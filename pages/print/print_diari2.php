<?php 
session_start();
?>
<!doctype html>
<html>
<style type="text/css">
    body {
        width: 100%;
        height: 100%;
        margin: 0;
        padding: 0;
        background-color: #FAFAFA;
        font: 10pt "arial";
    }
    * {
        box-sizing: border-box;
        -moz-box-sizing: border-box;
    }
    .page {
        width: 216mm;
        min-height: 279mm;
        padding: 20mm;
        margin: 10mm auto;
        /*border: 1px #D3D3D3 solid;
        border-radius: 5px;*/
        background: white;
        box-shadow: 0 0 5px rgba(0, 0, 0, 0.1);
    }
    .subpage {
        padding: 1cm;
        border: 5px red solid;
        height: 239mm; /* .page height -40mm (20 off top/bottom) */
        outline: 2cm #FFEAEA solid;
    }
    
    @page {
        size: Letter;
        margin: 0;
    }
    @media print {
        html, body {
            width: 216mm;
            height: 279mm;        
        }
        .page {
            margin: 0;
            border: initial;
            border-radius: initial;
            width: initial;
            min-height: initial;
            box-shadow: initial;
            background: initial;
            page-break-after: always;
        }
    }
</style>
<style type="text/css">
	h6 {

        font: 12pt "Times New Roman", Times, serif;
	}
</style>
<?php $counter = 1 ?>
<body onload="window.print();" >
	<center>
  <div class="page">
    <section class="content">
          <div class="box">
            <div class="box-body">
               <div class="col-xs-10">
	                <div><center>
					  <table width="90%" cellpadding="1" cellspacing="1" border="0">
							<tr>
								<td width="15%" style=""><center><img src="../../LogoSPRM.png" height="105px" width="130px"></center></td>
							</tr>
							<tr>
								<td colspan="4" style=""><center><br/><strong><h2>SISTEM PROFILING</h2></strong></center></td>
							</tr>
							<tr>
								<td width="15%" style=""><center><strong><h2> DIARI KES </h2></strong></center></td>
							</tr>
					</table>
					<br/>
					<table width="90%" cellpadding="1" cellspacing="1" border="0">
					</table>
					<br/>

					<table width="90%" cellpadding="1" cellspacing="0" border="0">
							<tr>
								<td style="border-left: 1px solid black;border-top: 1px solid black;background: #B4B0B0;border-bottom: 1px solid black"><strong><center>No</center></strong></td>
								<td style="width: 10%;border-left: 1px solid black;border-top: 1px solid black;background: #B4B0B0;border-bottom: 1px solid black"><strong><center>FIR</center></strong></td>
								<td style="width: 20%;border-left: 1px solid black;border-top: 1px solid black;background: #B4B0B0;border-bottom: 1px solid black"><strong><center>Nama Petugas</center></strong></td>
								<td style="width: 12%;border-left: 1px solid black;border-top: 1px solid black;background: #B4B0B0;border-bottom: 1px solid black"><strong><center>Jawatan</center></strong></td>
								<td style="width: 20%;border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;background: #B4B0B0;border-bottom: 1px solid black"><strong><center>Tarikh Tugas</center></strong></td>
								<td style="width: 20%;border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;background: #B4B0B0;border-bottom: 1px solid black"><strong><center>Masa Tugas</center></strong></td>
								<td style="width: 60%;border-top: 1px solid black;border-left: 1px solid black;border-right: 1px solid black;background: #B4B0B0;border-bottom: 1px solid black"><strong><center>Butiran Tugas</center></strong></td>
							</tr>
<?php include('../include/dbconn.php');
$id = $_SESSION['id']; 

      $sql = "SELECT * FROM [jim].[dbo].[diari] WHERE id = '$id'";
      $stmt1 = sqlsrv_query ($conn , $sql);
      if( !$stmt1) {
      }
?>

                      <tbody>
<?php
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>

							<tr>
								<td valign="top" style="height: 20px; border-left: 1px solid black;border-bottom: 1px solid black"><center><?php echo $counter++; ?></center></td>
								<td valign="top" style="border-left: 1px solid black;border-bottom: 1px solid black"><center><?php  echo $row1['id_fir']; ?></center></td>
								<td valign="top" style="border-left: 1px solid black;border-bottom: 1px solid black"><center><?php  echo $row1['nm_ptgas']; ?></center></td>
								<td valign="top" style="border-left: 1px solid black;border-bottom: 1px solid black"><center><?php  echo $row1['jwt']; ?></center></td>
								<td valign="top" style="border-left: 1px solid black;border-bottom: 1px solid black"><center><?php echo $row1['trkh'];?></center></td>
								<td valign="top" style="border-left: 1px solid black;border-bottom: 1px solid black"><center><?php echo $row1['ms']; ?></center></td>
								<td valign="top" style="border-left: 1px solid black;border-right: 1px solid black;border-bottom: 1px solid black"><center><?php echo $row1['butiran']; ?></center></td>
							</tr>
<?php } ?>

					</table>
					<table width="90%" cellpadding="1" cellspacing="1" border="0">
							<tr>
								<td colspan="4" width="7%" style="height: 60px"></td>
							</tr>
					</table>
		  			
					  </center>
	            </div>
	            </div>
	        </div>
	</section>
</div>
</center>
</body>
</html>