<?php
// include header
include "header.php";
// set the tpl page
$page = "prdid.tpl";

// if session is null, showing up the text and exit
if ($_SESSION['userName'] == '' && $_SESSION['userPassword'] == '')
{
	// show up the text and exit
	echo "You have not authorization for access the modules.";
	exit();
}

else 
{
	if ($_SESSION['userLevel'] != '1'){
		echo "You have not authorization for access the modules.";
		exit();
	}
	
	// get variable
	$module = $_GET['module'];
	$act = $_GET['act'];
	
	// if module is category and action is delete
	if ($module == 'prdid' && $act == 'delete')
	{
		// insert method into a variable
		$idprd = $_GET['idprd'];
		
		// delete categories
		$queryprdid = "DELETE FROM as_prdid WHERE idprd = '$idprd'";
		$sqlprdid = mysqli_query($connect, $queryprdid);
		
		// redirect to the categories page
		header("Location: prdid.php?code=3");
	} // close bracket
	
	// default
	else 
	{
		// create new object pagination
		$p = new Paginationprdid;
		// limit 10 data for page
		$limit  = 15;
		$position = $p->searchPosition($limit);
		
		// showing up categories data
		$queryprdid = "SELECT * FROM as_prdid ORDER BY namaid ASC LIMIT $position,$limit";
		$sqlprdid = mysqli_query($connect, $queryprdid);
		
		// fetch data
		$i = 1 + $position;
		while ($dtprdid = mysqli_fetch_array($sqlprdid))
		{
			// save data to array
			$dataprdid[] = array(	    'idprd' => $dtprdid['idprd'],
										'namaid' => $dtprdid['namaid'],
										'namasub' => $dtprdid['namasub'],
										'status' => $dtprdid['status'],
										'no' => $i
										);
			$i++;
		} // close while
		
		// count data
		$queryCountprdid = "SELECT * FROM as_prdid";
		$sqlCountprdid = mysqli_query($connect, $queryCountprdid);
		$amountData = mysqli_num_rows($sqlCountprdid);
		
		$amountPage = $p->amountPage($amountData, $limit);
		$pageLink = $p->navPage($_GET['page'], $amountPage);
		
		$smarty->assign("pageLink", $pageLink);
		
		// assign array to the tpl
		$smarty->assign("dataprdid", $dataprdid);
		
	} // close bracket
	
	// assign code to the tpl
	$smarty->assign("code", $_GET['code']);
	$smarty->assign("module", $_GET['module']);
	$smarty->assign("act", $_GET['act']);
	
} // close bracket

// include footer
include "footer.php";
?>