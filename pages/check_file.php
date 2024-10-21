<?php 
	include 'include/dbconn.php';
	$sql = "SELECT * FROM [jim].[dbo].[attach]";
	$stmt2 = sqlsrv_query ($conn , $sql);
	$a = 1;
	if(!$stmt2) {

	}else{
		while($row2 = sqlsrv_fetch_array($stmt2))
     {
     	if("jpg" == $row2['ext'] || "png" == $row2['ext'] || "gif" == $row2['ext'] || "bip" == $row2['ext'] || "JPG" == $row2['ext'] || "PNG" == $row2['ext'] || "GIF" == $row2['ext'] || "BIP" == $row2['ext']){ $pic = "<img src=\"upload/".$row2['filename']."\" height=\"20px\">";} else {$pic = "Cannot Show File Format"; }
     				echo "<a href=\"#\"  onclick=\"window.open('upload/".$row2['filename']."')\">".$row2['filename']."</a> <a href=\"delete.php?act=remove_attch&id=".$row2['id']."\" class=\"btn btn-primary btn-xs\">Delete</a><br>";
     	$a++;
	} 

	}

	
?>