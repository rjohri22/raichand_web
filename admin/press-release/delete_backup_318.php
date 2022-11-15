<?php 

include("../../dbcon.php");

if(isset($_GET['deleteid']))
	{
		$selectSql = "SELECT * FROM press_release WHERE id = ".$_GET['deleteid'];
		$rsSelect = mysqli_query($con,$selectSql);
		$getRow = mysqli_fetch_assoc($rsSelect);
		$deleteSql = "DELETE FROM press_release WHERE id = ".$getRow['id'];
		$rsDelete = mysqli_query($con, $deleteSql);	
		
		$getIamgeName = $getRow['file_size'];
		
		$createDeletePath = "uploads/".$getIamgeName;
		
		if (file_exists($createDeletePath)) 
		{
			$unlink_file = unlink($createDeletePath);
		}
				
	}

	$newURL = SITEURL."admin/press-release";
	header('Location: '.$newURL);
	die();	
	

?>











