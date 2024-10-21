<!DOCTYPE html>
<html>
<head>

	<title>PHP - Multiple Image upload using dropzone.js</title>
	<link href="css/bootstrap.css" rel="stylesheet">
	<link href="css/index.css" rel="stylesheet">
	<script src="js/jquery.js"></script>
	<script src="js/index.js"></script>
	<style type="text/css">
		
h1{
  font-size: 30px;
  color: #fff;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}
table{
  width:100%;
  table-layout: fixed;
}
.tbl-header{
  background-color: rgba(255,255,255,0.3);
 }
.tbl-content{
  height:300px;
  overflow-x:auto;
  margin-top: 0px;
  border: 1px solid rgba(255,255,255,0.3);
}
th{
  padding: 20px 15px;
  text-align: left;
  font-weight: 500;
  font-size: 12px;
  color: #fff;
  text-transform: uppercase;
}
td{
  padding: 15px;
  text-align: left;
  vertical-align:middle;
  font-weight: 300;
  font-size: 12px;
  color: #fff;
  border-bottom: solid 1px rgba(255,255,255,0.1);
}


/* demo styles */

@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,300,700);
body{
  background: -webkit-linear-gradient(left, #25c481, #25b7c4);
  background: linear-gradient(to right, #25c481, #25b7c4);
  font-family: 'Roboto', sans-serif;
}
section{
  margin: 50px;
}


/* follow me template */
.made-with-love {
  margin-top: 40px;
  padding: 10px;
  clear: left;
  text-align: center;
  font-size: 10px;
  font-family: arial;
  color: #fff;
}
.made-with-love i {
  font-style: normal;
  color: #F50057;
  font-size: 14px;
  position: relative;
  top: 2px;
}
.made-with-love a {
  color: #fff;
  text-decoration: none;
}
.made-with-love a:hover {
  text-decoration: underline;
}


/* for custom scrollbar for webkit browser*/

::-webkit-scrollbar {
    width: 6px;
} 
::-webkit-scrollbar-track {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
} 
::-webkit-scrollbar-thumb {
    -webkit-box-shadow: inset 0 0 6px rgba(0,0,0,0.3); 
}
	</style>
</head>
<body>
<br>
<div class="container">
	<div class="row">
    <?php include 'mic.php' ?>
		<div class="col-md-3">
			<form action="#" enctype="multipart/form-data" class="dropzone" id="image-upload" style="background-color: #25c28c">
				<div>
					<center>Drop Files Here for Uploding.</center>
				</div>
			</form>
		</div>
		<div class="col-md-9">
			<div class="tbl-header">
				<table cellpadding="0" cellspacing="0" border="0">
					<thead>
						<tr>
            <th width="5%">No</th>
						<th width="5%">ID</th>
						<th width="15%">Filename</th>
						<th width="15%">Ext</th>
						<th width="20%">Preview</th>
						<th width="15%"><form method="post" action="upload.php">
								Option&ensp;<button class="btn btn-danger btn-xs" name="deletedall">Delete All</button>
							</form>
						</th>
						</tr>
					</thead>
				</table>
			</div>
			<div class="tbl-content">
				<table cellpadding="0" cellspacing="0" border="0">
					<tbody>
<script type="text/javascript">
    var auto_refresh = setInterval(
    function (){$('#table_data').load('table.php');}, 1000); // refresh every 1000 milliseconds
</script>
<div id="table_data"></div>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
<?php 
$uploadDir = 'uploads';
include 'dbconn.php';

if (!empty($_FILES)) {

 	$tmpFile = $_FILES['file']['tmp_name'];
 	$filename = $uploadDir.'/'. $_FILES['file']['name'];
 	$file_name = $_FILES['file']['name'];
	$ext = pathinfo($file_name, PATHINFO_EXTENSION);
 	move_uploaded_file($tmpFile,$filename);

 	$sql = "INSERT INTO [dropzone].[dbo].[file_u]
           			([filename],[ext])
     		VALUES
           			('$file_name','$ext')";
 	$stmt = sqlsrv_query ($conn , $sql);
 	
	}
?>
<script type="text/javascript">
	Dropzone.options.imageUpload = {};

	// '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
$(window).on("load resize ", function() {
  var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
  $('.tbl-header').css({'padding-right':scrollWidth});
}).resize();
</script>
</body>
</html>