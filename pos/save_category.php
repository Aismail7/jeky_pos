<?php//include headerinclude "header.php";$createdDate = date('Y-m-d H:i:s');$userID = $_SESSION['userID'];$categoryName = $_POST['categoryName'];$categoryStatus = $_POST['categoryStatus'];if ($categoryName != '' && $categoryStatus != ''){			$queryCategory = "INSERT INTO as_categories(categoryName,												categoryStatus,												createdDate,												createdUserID,												modifiedDate,												modifiedUserID)										VALUES(	'$categoryName',												'$categoryStatus',												'$createdDate',												'$userID',												'',												'')";												$sqlCategory = mysqli_query($connect, $queryCategory);		if ($sqlCategory)	{		echo json_encode(OK);	}	}exit();?>