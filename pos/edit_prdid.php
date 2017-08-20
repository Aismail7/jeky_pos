<?php
// include header
include "header.php";
// set the tpl page
$page = "edit_prdid.tpl";

// if session is null, showing up the text and exit
if ($_SESSION['userName'] == '' && $_SESSION['userPassword'] == '')
{
	// show up the text and exit
	echo "You have not authorization for access the modules.";
	exit();
}

else 
{
	// get variable
	$module = $_GET['module'];
	$act = $_GET['act'];
	
	if ($module == 'prdid' && $act == 'edit')
	{
		// insert method into a variable
		$idprd = $_GET['idprd'];
		
		// showing up the $dataprdid data based on $dataprdid id
		$queryprdid= "SELECT * FROM as_prdid WHERE idprd = '$idprd'";
		$sqlprdid = mysqli_query($connect, $queryprdid);
		
		// fetch data
		$dataprdid = mysqli_fetch_array($sqlprdid);
		
		// assign fetch data to the tpl
		$smarty->assign("idprd", $dataprdid['idprd']);
		$smarty->assign("namaid", $dataprdid['namaid']);
		$smarty->assign("namasub", $dataprdid['namasub']);
		$smarty->assign("status", $dataprdid['status']);
	} //close bracket
	
	// assign code to the tpl
	$smarty->assign("code", $_GET['code']);
	$smarty->assign("module", $_GET['module']);
	$smarty->assign("act", $_GET['act']);
	
} // close bracket

// include footer
include "footer.php";
?>