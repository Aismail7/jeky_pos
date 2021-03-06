<?php
include "header.php";

// if session is null, showing up the text and exit
if ($_SESSION['userName'] == '' && $_SESSION['userPassword'] == '')
{
	// show up the text and exit
	echo "You have not authorization for access the modules.";
	exit();
}

else{
	if ($_SESSION['outletLevel'] != 'W' && $_SESSION['outletID'] != '1' || $_SESSION['outletLevel'] == ''){
		// show up the text and exit
		echo "You have not authorization for access the modules.";
		exit();
	}
	
	ob_start();
	require ("includes/html2pdf/html2pdf.class.php");
	
	$now = date('Y-m-d');
	$startDate = $_GET['startDate'];
	$endDate = $_GET['endDate'];
	$start = tgl_indo2($startDate);
	$end = tgl_indo2($endDate);
	$outletID = $_GET['outletID'];
	
	$filename="laporan-biaya-".$outletID."-".$startDate."-".$endDate.".pdf";
	$content = ob_get_clean();
	
	$outletDt = mysqli_fetch_array(mysqli_query($connect, "SELECT outletCode, outletID, outletName FROM as_outlets WHERE outletID = '$outletID'"));
	
	$content = "<table style='border-bottom: 1px solid #999999; padding-bottom: 10px; width: 210mm;'>
					<tr valign='top'>
						<td style='width: 206mm;' valign='middle'>
							<div style='font-weight: bold; padding-bottom: 5px; font-size: 12pt;'>
								$dataIdentity[identityName]
							</div>
							<span style='font-size: 10pt;'>$dataIdentity[identityAddress], Telp. $dataIdentity[identityPhone], Email: $dataIdentity[identityEmail]</span>
						</td>
					</tr>
				</table>
				<br>
				<table>
					<tr>
						<td>Nama Outlet</td>
						<td>: $outletDt[outletCode] - $outletDt[outletName]</td>
					</tr>
					<tr>
						<td>Jenis Laporan</td>
						<td>: Biaya</td>
					</tr>
					<tr>
						<td>Periode</td>
						<td>: $start s/d $end</td>
					</tr>
				</table>
				<br>
				<table cellpadding='0' cellspacing='0' style='width: 240mm;'>
					<tr>
						<th style='width: 10mm; padding: 5px 0px 5px 0px; font-size: 10pt;'>No.</th>
						<th style='width: 20mm; padding: 5px 0px 5px 0px; font-size: 10pt;'>Tanggal</th>
						<th style='width: 25mm; padding: 5px 0px 5px 0px; font-size: 10pt;'>Kode Akun</th>
						<th style='width: 50mm; padding: 5px 0px 5px 0px; font-size: 10pt;'>Nama Akun</th>
						<th style='width: 70mm; padding: 5px 0px 5px 0px; font-size: 10pt;'>Keterangan</th>
						<th style='width: 30mm; padding: 5px 0px 5px 0px; font-size: 10pt;'>Jumlah</th>
					</tr>";
					
					// showing up the fund based on period date
					$queryFund = "SELECT * FROM as_funds A INNER JOIN as_accounts B ON B.accountID=A.accountID WHERE A.outletID = '$outletID' AND A.fundDate BETWEEN '$startDate' AND '$endDate'";
					$sqlFund = mysqli_query($connect, $queryFund);
					
					$i = 1;
					while($dtFund = mysqli_fetch_array($sqlFund)){
						
						$fundDate = explode("-", $dtFund['fundDate']);
						$fundAmount = rupiah($dtFund['fundAmount']);
						$fundNote = chunk_split($dtFund['fundNote'], 50, "<br>");
						
						$content .= "
							<tr>
								<td style='padding: 5px 0px 5px 0px; font-size: 10pt;'>$i</td>
								<td style='padding: 5px 0px 5px 0px; font-size: 10pt;'>$fundDate[2]/$fundDate[1]/$fundDate[0]</td>
								<td style='padding: 5px 0px 5px 0px; font-size: 10pt;'>$dtFund[accountCode]</td>
								<td style='padding: 5px 0px 5px 0px; font-size: 10pt;'>$dtFund[accountName]</td>
								<td style='padding: 5px 0px 5px 0px; font-size: 10pt;'>$fundNote</td>
								<td style='padding: 5px 0px 5px 0px; font-size: 10pt;' align='right'>$fundAmount</td>
							</tr>
						";
						
						$total = $total + $dtFund['fundAmount'];
						$i++;
					}
					$fundTotal = rupiah($total);
		$content .= 
					"
					<tr>
						<td style='border-top: 1px solid #999; padding: 5px 0px 5px 0px; font-size: 10pt;' colspan='5'></td>
						<td style='border-top: 1px solid #999; padding: 5px 0px 5px 0px; font-size: 10pt;' align='right'><b>Rp. $fundTotal</b></td>
					</tr>
				</table>
				
				";
	ob_end_clean();
	// conversion HTML => PDF
	try
	{
		$html2pdf = new HTML2PDF('P', 'A4','fr', false, 'ISO-8859-15',array(1, 1, 1, 1)); //setting ukuran kertas dan margin pada dokumen anda
		// $html2pdf->setModeDebug();
		$html2pdf->setDefaultFont('Arial');
		$html2pdf->writeHTML($content, isset($_GET['vuehtml']));
		$html2pdf->Output($filename);
	}
	catch(HTML2PDF_exception $e) { echo $e; }
}
?>