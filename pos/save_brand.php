<?php// include headerinclude "header.php";$createdDate = date('Y-m-d H:i:s');$userID = $_SESSION['userID'];$brandName = $_POST['brandName'];$brandStatus = $_POST['brandStatus'];if ($brandName != '' && $brandStatus != ''){			$queryBrand = "INSERT INTO as_brands(	brandName,											brandStatus,											createdDate,											createdUserID,											modifiedDate,											modifiedUserID)									VALUES(	'$brandName',											'$brandStatus',											'$createdDate',											'$userID',											'',											'')";												$sqlBrand = mysqli_query($connect, $queryBrand);		if ($sqlBrand)	{		echo json_encode(OK);	}	}exit();?>