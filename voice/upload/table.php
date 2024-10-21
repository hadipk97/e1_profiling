<?php 
	include 'dbconn.php';
	$sql = "SELECT * FROM [dropzone].[dbo].[file_u]";
	$stmt2 = sqlsrv_query ($conn , $sql);
	$a = 1;
	if( !$stmt2) {}
	while($row2=  sqlsrv_fetch_array($stmt2))
     {
     	if("jpg" == $row2['ext'] || "png" == $row2['ext'] || "gif" == $row2['ext'] || "bip" == $row2['ext']){ $pic = "<img src=\"uploads/".$row2['filename']."\" height=\"20px\">";} else {$pic = "Cannot Show File Format"; }
     				echo "<tr>
							<td width=\"5%\">$a</td>
							<td width=\"5%\">".$row2['id']."</td>
							<td width=\"15%\">".$row2['filename']."</td>
							<td width=\"15%\">".$row2['ext']."</td>
							<td width=\"20%\">$pic</td>
							<td width=\"15%\">
								<center>
								<form method=\"post\" action=\"upload.php\">
									<input type=\"hidden\" name=\"id\" value=\"".$row2['id']."\">
									<button type=\"submit\" class=\"btn btn-primary btn-xs\" name=\"delete\">Delete</button>
								</form>
								</center>
							</td>
						</tr>";
     	$a++;
	} ?>