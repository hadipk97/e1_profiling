<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 <?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
<?php include 'include/css.php'; ?>
</head>
<body>
  <?php if($_COOKIE['id'] == 14): ?>
  <div class="">
    <div class="clearfix">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="x_panel">
            <form action="reg.php" method="post" enctype="multipart/form-data">
            <div class="x_title">
              <center><h4>Register New Game</h4></center>
              <div class="row">
<?php
include('include/dbconn.php');

$stmt = sqlsrv_query( $conn, "SELECT COUNT(*) FROM [jim].[dbo].[game]");
if( $stmt === false) {}
while( $row66 = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_NUMERIC) ) { 
?>
                  <input type="hidden" name="id" class="form-control" value="<?php echo $row66[0]+1 ?>">
                <div class="col-xs-6 col-md-6 col-lg-6">
                  <label>Title</label>
                  <input type="text" name="ttl" class="form-control">
                  <label>Link</label>
                  <input type="text" name="link" class="form-control">
                  <label>Description</label>
                  <textarea class="form-control" rows="2" name="desc"></textarea>
                </div>
                <div class="col-xs-6 col-md-6 col-lg-6">
                  <label>Rating</label>
                  <input type="number" name="rat" class="form-control" maxlength="1" max="5">
                  <div class="lampiran_diari col-md-6">
                    <button type="button" class="add_form_field btn btn-primary btn-xs"><span class="fa fa-plus"></span></button>
                    <div><input type="file" name="lampiran[]"/></div>
                  </div>
                </div>
              </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right" name="save_game">Save</button>
          </form>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php } endif; ?>

      <div id="contents">
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix">
            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                  <center><h4>Game Center</h4></center>
                   <br/><br/>
                  </div>
                  <table width="100%">
<?php 
include('include/dbconn.php');

$stmt1 = sqlsrv_query ($conn , "SELECT * FROM [jim].[dbo].[game] ORDER BY id ASC");
if( !$stmt1) {}
$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
<?php
$stmt2 = sqlsrv_query ($conn , "SELECT TOP 1 [pic] FROM [jim].[dbo].[game_pic] WHERE game_id = '$row1[game_id]' ORDER BY id ASC");
if( !$stmt2) {}
while($row2=  sqlsrv_fetch_array($stmt2))
{
 ?>
                  <td><?php echo $counter++; ?>&ensp;<a href="<?php echo $row1['game_link']; ?>"><img src="upload/<?php echo $row2['pic']; ?>" style="width: 200px"></a><br>&ensp;<?php echo $row1['game_ttl']; ?><br>&ensp;
                  <?php
                  switch ($row1['game_rating']) {
                    case 1:
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                     break;
                    case 2:
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                     break;
                    case 3:
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                     break;
                    case 4:
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\"></span>";
                     break;
                    case 5:
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                    echo "<span class=\"fa fa-star\" style=\"color:gold\"></span>";
                     break;
                    default:
                    echo "No Rating Yet";
                  } 
 ?>
                </td>
                <td width="70%" align="left" ><?php echo $row1['game_desc']; ?></td>
<?php } ?>
                </tr>
        <?php } ?>
              </table>
                        <div class="ln_solid"></div>
                        <div class="row">
                        <div class="pull-right">
                          <button onclick="window.close()" class="btn btn-primary">Tutup</button>
                        </div>
                        </div>
                       </div>
                     </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </body>
<?php include 'include/js.php'; ?>
<script>
$(document).ready(function() {
    var max_fields      = 10;
    var wrapper         = $(".lampiran_diari"); 
    var add_button      = $(".add_form_field"); 
    
    var x = 1; 
    $(add_button).click(function(e){ 
        e.preventDefault();
        if(x < max_fields){ 
            x++; 
            $(wrapper).append('<div class="row">&ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; &ensp; <a href="#" class="delete">Delete</a> <div class="col-xs-6"><input type="file" name="lampiran[]"/></div></div>'); //add input box
        }
    else
    {
    alert('You Reached the limits')
    }
    });
    
    $(wrapper).on("click",".delete", function(e){ 
        e.preventDefault(); $(this).parent('div').remove(); x--;
    })
});
</script>
</html>