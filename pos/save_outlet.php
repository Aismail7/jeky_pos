<?php// include headerinclude "header.php";$outletCode = $_POST['outletCode'];$outletName = $_POST['outletName'];$outletStatus = $_POST['outletStatus'];$outletUsername = $_POST['outletUsername'];$outletPassword = md5($_POST['outletPassword']);$createdDate = date('Y-m-d H:i:s');$userID = $_SESSION['userID'];if ($outletCode != '' && $outletName != '' && $outletStatus != '' && $outletUsername != '' && $outletPassword != ''){	$queryOutlet = "INSERT INTO as_outlets (outletCode,											outletName,											outletStatus,											outletUsername,											outletPassword,											createdDate,											createdUserID,											modifiedDate,											modifiedUserID)									VALUES(	'$outletCode',											'$outletName',											'$outletStatus',											'$outletUsername',											'$outletPassword',											'$createdDate',											'$userID',											'',											'')";												$sqlOutlet = mysqli_query($connect, $queryOutlet);		$outletID = mysqli_insert_id($connect);		if ($sqlOutlet)	{		$queryIdentity = "INSERT INTO as_identity (	outletID,													identityName,													identityAddress,													identityPhone,													identityEmail,													identityImage,													identityOwner,													identityOwnerPhone,													identityPrintSale,													identityPrintBuy,													identityPrintDebt,													identityPrintReceive,													identityPrintReport,													modifiedDate,													modifiedUserID)											VALUES(	'$outletID',													'$outletName',													'',													'',													'',													'',													'',													'',													'1',													'1',													'1',													'1',													'1',													'$createdDate',													'$userID')";		mysqli_query($connect, $queryIdentity);				echo json_encode(OK);	}	}exit();?>