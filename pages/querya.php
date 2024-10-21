<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
  <?php 

 include 'include/dbconn.php';
if(isset($_POST['edit_query'])){
 $sql = "SELECT *  FROM [jim].[dbo].[query_mgr] WHERE id = '$_POST[id]'";
$stmt = sqlsrv_query ($conn , $sql);
if( !$stmt) {
}
else{
$r = sqlsrv_fetch_array($stmt);
      $id = $r['id'];
      $title = $r['title'];
      $tbl = $r['tbl'];
      $col = $r['col'];
      $ope = $r['ope'];
      $value = $r['value'];
      $value_a = $r['value_a'];
      $con1 = $r['con1'];
      $col1 = $r['col1'];
      $ope1 = $r['ope1'];
      $value1 = $r['value1'];
      $value1_a = $r['value1_a'];
      $con2 = $r['con2'];
      $col2 = $r['col2'];
      $ope2 = $r['ope2'];
      $value2 = $r['value2'];
      $value2_a = $r['value2_a'];
      $con3 = $r['con3'];
      $col3 = $r['col3'];
      $ope3 = $r['ope3'];
      $value3 = $r['value3'];
      $value3_a = $r['value3_a'];
      $con4 = $r['con4'];
      $col4 = $r['col4'];
      $ope4 = $r['ope4'];
      $value4 = $r['value4'];
      $value4_a = $r['value4_a'];
}
}
?>
<?php include 'include/bar.php'; ?>
        <!-- /top navigation -->
<!-- page content -->
    <section class="content">
        <div class="right_col" role="main">
          <div class="">
          <div class="page-title">
            
              <div class="title_left">
                <h3>Query</h3>
              </div>
            </div>
            <div class="clearfix">
            <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
          <div class="x_title">       
            <div class="title_right"> <div class="box-body">
              <div class="row">
                  <form method="post" action="querya.php">
                    <input type="hidden" name="query_by" value="<?php echo $_POST['query_by']; ?>">
                    <input type="hidden" name="conti" value="A">
                    <input type="hidden" name="id" value="<?php if(!empty($_POST['conti1'])) {echo $id;} ?>">
                <div class="col-xs-2">
                  <label>&ensp;</label>
                  <select class="form-control" name="con" disabled>
                    <option value=""></option>
                    <option value="AND">AND</option>
                    <option value="OR">OR</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <label>Coloum <font color="red">#</font></label>
                  <select class="form-control" name="col" required="required">
                    <option value=" " selected="selected"> Please Select</option>
                    <?php
                    include 'include/dbconn.php'; 
                    $sql = "SELECT * FROM [jim].[dbo].[query] WHERE tbl = '$_POST[query_by]' ORDER BY show_name ASC";
                    $stmt1 = sqlsrv_query ($conn , $sql);
                    if( !$stmt1) {
                    }
                    while($row1=  sqlsrv_fetch_array($stmt1))
                    {
                    ?>
                    <option <?php if ($row1['col_name']==$_POST['col']){ echo "selected='selected'";}?> value="<?php echo $row1['col_name']; ?>" ><?php echo $row1['show_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xs-2">
                  <label>Operator <font color="red">#</font></label>
                  <select class="form-control" name="ope" required="required">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['ope'];}?><?php if(!empty($_POST['conti1'])) { echo $ope;}?>">
                      <?php 
                      if(!empty($_POST['conti'])) {
                        if($_POST['ope'] == ">"){echo "Greater than";}
                        elseif($_POST['ope'] == "<"){echo "Less than";}
                        elseif($_POST['ope'] == ">="){echo "Greater than or equal to";}
                        elseif($_POST['ope'] == "<="){echo "Less than or equal to";}
                        elseif($_POST['ope'] == "="){echo "Equal";}
                        elseif($_POST['ope'] == "<>"){echo "Not Equal";}
                        elseif($_POST['ope'] == "LIKE"){echo "Contain";}
                        elseif($_POST['ope'] == "BETWEEN"){echo "Between";}
                        elseif($_POST['ope'] == "IS NULL"){echo "Is Blank";}
                        elseif($_POST['ope'] == "IS NOT NULL"){echo "Isn't Blank";}
                      }
                      if(!empty($_POST['conti1'])) {
                        if($ope == ">"){echo "Greater than";}
                        elseif($ope == "<"){echo "Less than";}
                        elseif($ope == ">="){echo "Greater than or equal to";}
                        elseif($ope == "<="){echo "Less than or equal to";}
                        elseif($ope == "="){echo "Equal";}
                        elseif($ope == "<>"){echo "Not Equal";}
                        elseif($ope == "LIKE"){echo "Contain";}
                        elseif($ope == "BETWEEN"){echo "Between";}
                        elseif($ope == "IS NULL"){echo "Is Blank";}
                        elseif($ope == "IS NOT NULL"){echo "Isn't Blank";}
                      }?>
                      </option>
                    <option value="IS NOT NULL">Isn't Blank</option>
                    <option value="IS NULL">Is Blank</option>
                    <option value=">">Greater than</option>
                    <option value="<">Less than</option>
                    <option value=">=">Greater than or equal to</option>
                    <option value="<=">Less than or equal to</option>
                    <option value="=">Equal</option>
                    <option value="<>">Not Equal</option>
                    <option value="LIKE">Contain</option>
                    <option value="BETWEEN">Between</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <label>Value 1</label>
                  <input class="form-control" name="value" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value'];}?><?php if(!empty($_POST['conti1'])) { echo $value;}?>">
                </div>
                <div class="col-xs-2">
                  <label>Value 2</label>
                  <input class="form-control" name="value_a" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value_a'];}?><?php if(!empty($_POST['conti1'])) { echo $value_a;}?>">
                </div>
                <div class="col-xs-1">
                </div>
                <br>
                    <div><button type="button" class="btn-sm btn btn-default" data-toggle="collapse" data-target="#A1"><span>+/-</span></button></div>
              </div>
                <div class="row">
                    <div id="A1" class="collapse">
                <div class="col-xs-2">
                  <select class="form-control" name="con1">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['con1'];}?><?php if(!empty($_POST['conti1'])) { echo $con1;}?>"><?php if(!empty($_POST['conti'])) { echo $_POST['con1'];}?><?php if(!empty($_POST['conti1'])) { echo $con1;}?></option>
                    <option value="AND">AND</option>
                    <option value="OR">OR</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="col1">
                   <option value=" " selected="selected"> Please Select</option>
                    <?php
                    include 'include/dbconn.php'; 
                    $sql = "SELECT * FROM [jim].[dbo].[query] WHERE tbl = '$_POST[query_by]' ORDER BY show_name ASC";
                    $stmt1 = sqlsrv_query ($conn , $sql);
                    if( !$stmt1) {
                    }
                    while($row1=  sqlsrv_fetch_array($stmt1))
                    {
                    ?>
                    <option <?php if ($row1['col_name']==$_POST['col1']){ echo "selected='selected'";}?> value="<?php echo $row1['col_name']; ?>" ><?php echo $row1['show_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="ope1">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['ope1'];}?><?php if(!empty($_POST['conti1'])) { echo $ope1;}?>">
                      <?php 
                      if(!empty($_POST['conti'])) {
                        if($_POST['ope1'] == ">"){echo "Greater than";}
                        elseif($_POST['ope1'] == "<"){echo "Less than";}
                        elseif($_POST['ope1'] == ">="){echo "Greater than or equal to";}
                        elseif($_POST['ope1'] == "<="){echo "Less than or equal to";}
                        elseif($_POST['ope1'] == "="){echo "Equal";}
                        elseif($_POST['ope1'] == "<>"){echo "Not Equal";}
                        elseif($_POST['ope1'] == "LIKE"){echo "Contain";}
                        elseif($_POST['ope1'] == "BETWEEN"){echo "Between";}
                        elseif($_POST['ope1'] == "IS NULL"){echo "Is Blank";}
                        elseif($_POST['ope1'] == "IS NOT NULL"){echo "Isn't Blank";}
                      }
                      if(!empty($_POST['conti1'])) {
                        if($ope1 == ">"){echo "Greater than";}
                        elseif($ope1 == "<"){echo "Less than";}
                        elseif($ope1 == ">="){echo "Greater than or equal to";}
                        elseif($ope1 == "<="){echo "Less than or equal to";}
                        elseif($ope1 == "="){echo "Equal";}
                        elseif($ope1 == "<>"){echo "Not Equal";}
                        elseif($ope1 == "LIKE"){echo "Contain";}
                        elseif($ope1 == "BETWEEN"){echo "Between";}
                        elseif($ope1 == "IS NULL"){echo "Is Blank";}
                        elseif($ope1 == "IS NOT NULL"){echo "Isn't Blank";}
                      }?></option>
                    <option value="IS NOT NULL">Isn't Blank</option>
                    <option value="IS NULL">Is Blank</option>
                    <option value=">">Greater than</option>
                    <option value="<">Less than</option>
                    <option value=">=">Greater than or equal to</option>
                    <option value="<=">Less than or equal to</option>
                    <option value="=">Equal</option>
                    <option value="<>">Not Equal</option>
                    <option value="LIKE">Contain</option>
                    <option value="BETWEEN">Between</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <input class="form-control" name="value1" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value1'];}?><?php if(!empty($_POST['conti1'])) { echo $value1;}?>">
                </div>
                <div class="col-xs-2">
                  <input class="form-control" name="value1_a" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value1_a'];}?><?php if(!empty($_POST['conti1'])) { echo $value1_a;}?>">
                </div>
                <div class="col-xs-1">
                </div>
                    <div><button type="button" class="btn-sm btn btn-default" data-toggle="collapse" data-target="#1"><span>+/-</span></button></div>
                    <div id="1" class="collapse">

                
                <div class="col-xs-2">
                  <select class="form-control" name="con2">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['con2'];}?><?php if(!empty($_POST['conti1'])) { echo $con2;}?>"><?php if(!empty($_POST['conti'])) { echo $_POST['con2'];}?><?php if(!empty($_POST['conti1'])) { echo $con2;}?></option>
                    <option value="AND">AND</option>
                    <option value="OR">OR</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="col2">
                    <option value=" " selected="selected"> Please Select</option>
                    <?php
                    include 'include/dbconn.php'; 
                    $sql = "SELECT * FROM [jim].[dbo].[query] WHERE tbl = '$_POST[query_by]' ORDER BY show_name ASC";
                    $stmt1 = sqlsrv_query ($conn , $sql);
                    if( !$stmt1) {
                    }
                    while($row1=  sqlsrv_fetch_array($stmt1))
                    {
                    ?>
                    <option <?php if ($row1['col_name']==$_POST['col2']){ echo "selected='selected'";}?> value="<?php echo $row1['col_name']; ?>" ><?php echo $row1['show_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="ope2">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['ope2'];}?><?php if(!empty($_POST['conti1'])) { echo $ope2;}?>">
                      <?php 
                      if(!empty($_POST['conti'])) {
                        if($_POST['ope2'] == ">"){echo "Greater than";}
                        elseif($_POST['ope2'] == "<"){echo "Less than";}
                        elseif($_POST['ope2'] == ">="){echo "Greater than or equal to";}
                        elseif($_POST['ope2'] == "<="){echo "Less than or equal to";}
                        elseif($_POST['ope2'] == "="){echo "Equal";}
                        elseif($_POST['ope2'] == "<>"){echo "Not Equal";}
                        elseif($_POST['ope2'] == "LIKE"){echo "Contain";}
                        elseif($_POST['ope2'] == "BETWEEN"){echo "Between";}
                        elseif($_POST['ope2'] == "IS NULL"){echo "Is Blank";}
                        elseif($_POST['ope2'] == "IS NOT NULL"){echo "Isn't Blank";}
                      }
                      if(!empty($_POST['conti1'])) {
                        if($ope2 == ">"){echo "Greater than";}
                        elseif($ope2 == "<"){echo "Less than";}
                        elseif($ope2 == ">="){echo "Greater than or equal to";}
                        elseif($ope2 == "<="){echo "Less than or equal to";}
                        elseif($ope2 == "="){echo "Equal";}
                        elseif($ope2 == "<>"){echo "Not Equal";}
                        elseif($ope2 == "LIKE"){echo "Contain";}
                        elseif($ope2 == "BETWEEN"){echo "Between";}
                        elseif($ope2 == "IS NULL"){echo "Is Blank";}
                        elseif($ope2 == "IS NOT NULL"){echo "Isn't Blank";}
                      }?></option>
                    <option value="IS NOT NULL">Isn't Blank</option>
                    <option value="IS NULL">Is Blank</option>
                    <option value=">">Greater than</option>
                    <option value="<">Less than</option>
                    <option value=">=">Greater than or equal to</option>
                    <option value="<=">Less than or equal to</option>
                    <option value="=">Equal</option>
                    <option value="<>">Not Equal</option>
                    <option value="LIKE">Contain</option>
                    <option value="BETWEEN">Between</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <input class="form-control" name="value2" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value2'];}?><?php if(!empty($_POST['conti1'])) { echo $value2;}?>">
                </div>
                <div class="col-xs-2">
                  <input class="form-control" name="value2_a" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value2_a'];}?><?php if(!empty($_POST['conti1'])) { echo $value2_a;}?>">
                </div>
                <div class="col-xs-1">
                </div>
                <div><button type="button" class="btn-sm btn btn-default" data-toggle="collapse" data-target="#2"><span>+/-</span></button></div>
                <div id="2" class="collapse">

                
                <div class="col-xs-2">
                  <select class="form-control" name="con3">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['con3'];}?><?php if(!empty($_POST['conti1'])) { echo $con3;}?>"><?php if(!empty($_POST['conti'])) { echo $_POST['con3'];}?><?php if(!empty($_POST['conti1'])) { echo $con3;}?></option>
                    <option value="AND">AND</option>
                    <option value="OR">OR</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="col3">
                    <option value=" " selected="selected"> Please Select</option>
                    <?php
                    include 'include/dbconn.php'; 
                    $sql = "SELECT * FROM [jim].[dbo].[query] WHERE tbl = '$_POST[query_by]' ORDER BY show_name ASC";
                    $stmt1 = sqlsrv_query ($conn , $sql);
                    if( !$stmt1) {
                    }
                    while($row1=  sqlsrv_fetch_array($stmt1))
                    {
                    ?>
                    <option <?php if ($row1['col_name']==$_POST['col3']){ echo "selected='selected'";}?> value="<?php echo $row1['col_name']; ?>" ><?php echo $row1['show_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="ope3">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['ope3'];}?><?php if(!empty($_POST['conti1'])) { echo $ope3;}?>">
                      <?php 
                      if(!empty($_POST['conti'])) {
                        if($_POST['ope3'] == ">"){echo "Greater than";}
                        elseif($_POST['ope3'] == "<"){echo "Less than";}
                        elseif($_POST['ope3'] == ">="){echo "Greater than or equal to";}
                        elseif($_POST['ope3'] == "<="){echo "Less than or equal to";}
                        elseif($_POST['ope3'] == "="){echo "Equal";}
                        elseif($_POST['ope3'] == "<>"){echo "Not Equal";}
                        elseif($_POST['ope3'] == "LIKE"){echo "Contain";}
                        elseif($_POST['ope3'] == "BETWEEN"){echo "Between";}
                        elseif($_POST['ope3'] == "IS NULL"){echo "Is Blank";}
                        elseif($_POST['ope3'] == "IS NOT NULL"){echo "Isn't Blank";}
                      }
                      if(!empty($_POST['conti1'])) {
                        if($ope3 == ">"){echo "Greater than";}
                        elseif($ope3 == "<"){echo "Less than";}
                        elseif($ope3 == ">="){echo "Greater than or equal to";}
                        elseif($ope3 == "<="){echo "Less than or equal to";}
                        elseif($ope3 == "="){echo "Equal";}
                        elseif($ope3 == "<>"){echo "Not Equal";}
                        elseif($ope3 == "LIKE"){echo "Contain";}
                        elseif($ope3 == "BETWEEN"){echo "Between";}
                        elseif($ope3 == "IS NULL"){echo "Is Blank";}
                        elseif($ope3 == "IS NOT NULL"){echo "Isn't Blank";}
                      }?></option>
                    <option value="IS NOT NULL">Isn't Blank</option>
                    <option value="IS NULL">Is Blank</option>
                    <option value=">">Greater than</option>
                    <option value="<">Less than</option>
                    <option value=">=">Greater than or equal to</option>
                    <option value="<=">Less than or equal to</option>
                    <option value="=">Equal</option>
                    <option value="<>">Not Equal</option>
                    <option value="LIKE">Contain</option>
                    <option value="BETWEEN">Between</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <input class="form-control" name="value3" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value3'];}?><?php if(!empty($_POST['conti1'])) { echo $value3;}?>">
                </div>
                <div class="col-xs-2">
                  <input class="form-control" name="value3_a" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value3_a'];}?><?php if(!empty($_POST['conti1'])) { echo $value3_a;}?>">
                </div>
                <div class="col-xs-1">
                </div>
                <div><button type="button" class="btn-sm btn btn-default" data-toggle="collapse" data-target="#3"><span>+/-</span></button></div>
                <div id="3" class="collapse">

                 
                <div class="col-xs-2">
                  <select class="form-control" name="con4">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['con4'];}?><?php if(!empty($_POST['conti1'])) { echo $con4;}?>"><?php if(!empty($_POST['conti'])) { echo $_POST['con4'];}?><?php if(!empty($_POST['conti1'])) { echo $con4;}?></option>
                    <option value="AND">AND</option>
                    <option value="OR">OR</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="col4">
                    <option value=" " selected="selected"> Please Select</option>
                    <?php
                    include 'include/dbconn.php'; 
                    $sql = "SELECT * FROM [jim].[dbo].[query] WHERE tbl = '$_POST[query_by]' ORDER BY show_name ASC";
                    $stmt1 = sqlsrv_query ($conn , $sql);
                    if( !$stmt1) {
                    }
                    while($row1=  sqlsrv_fetch_array($stmt1))
                    {
                    ?>
                    <option <?php if ($row1['col_name']==$_POST['col4']){ echo "selected='selected'";}?> value="<?php echo $row1['col_name']; ?>" ><?php echo $row1['show_name']; ?></option>
                    <?php } ?>
                  </select>
                </div>
                <div class="col-xs-2">
                  <select class="form-control" name="ope4">
                    <option value="<?php if(!empty($_POST['conti'])) { echo $_POST['ope4'];}?><?php if(!empty($_POST['conti1'])) { echo $ope4;}?>">
                      <?php 
                      if(!empty($_POST['conti'])) {
                        if($_POST['ope4'] == ">"){echo "Greater than";}
                        elseif($_POST['ope4'] == "<"){echo "Less than";}
                        elseif($_POST['ope4'] == ">="){echo "Greater than or equal to";}
                        elseif($_POST['ope4'] == "<="){echo "Less than or equal to";}
                        elseif($_POST['ope4'] == "="){echo "Equal";}
                        elseif($_POST['ope4'] == "<>"){echo "Not Equal";}
                        elseif($_POST['ope4'] == "LIKE"){echo "Contain";}
                        elseif($_POST['ope4'] == "BETWEEN"){echo "Between";}
                        elseif($_POST['ope4'] == "IS NULL"){echo "Is Blank";}
                        elseif($_POST['ope4'] == "IS NOT NULL"){echo "Isn't Blank";}
                      }
                      if(!empty($_POST['conti1'])) {
                        if($ope4 == ">"){echo "Greater than";}
                        elseif($ope4 == "<"){echo "Less than";}
                        elseif($ope4 == ">="){echo "Greater than or equal to";}
                        elseif($ope4 == "<="){echo "Less than or equal to";}
                        elseif($ope4 == "="){echo "Equal";}
                        elseif($ope4 == "<>"){echo "Not Equal";}
                        elseif($ope4 == "LIKE"){echo "Contain";}
                        elseif($ope4 == "BETWEEN"){echo "Between";}
                        elseif($ope4 == "IS NULL"){echo "Is Blank";}
                        elseif($ope4 == "IS NOT NULL"){echo "Isn't Blank";}
                      }?></option>
                    <option value="IS NOT NULL">Isn't Blank</option>
                    <option value="IS NULL">Is Blank</option>
                    <option value=">">Greater than</option>
                    <option value="<">Less than</option>
                    <option value=">=">Greater than or equal to</option>
                    <option value="<=">Less than or equal to</option>
                    <option value="=">Equal</option>
                    <option value="<>">Not Equal</option>
                    <option value="LIKE">Contain</option>
                    <option value="BETWEEN">Between</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <input class="form-control" name="value4" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value4'];}?><?php if(!empty($_POST['conti1'])) { echo $value4;}?>">
                </div>
                <div class="col-xs-2">
                  <input class="form-control" name="value4_a" value="<?php if(!empty($_POST['conti'])) { echo $_POST['value4_a'];}?><?php if(!empty($_POST['conti1'])) { echo $value4_a;}?>">
                </div>
                <div class="col-xs-1">
                </div>
                <div>
                </div>
              </div>
            </div>
          </div>
        </div>

                  <button type="submit" name="query_show" class="btn btn-primary pull-right">Query</button>
                  <button type="button" class="btn btn-default pull-right" data-toggle="collapse" data-target="#nama_query">Simpan</button>
                  <div id="nama_query" class="collapse">
                    <div class="row">
                      <div class="col-md-12">
                      <div class="col-md-8">&ensp;</div>
                      <div class="col-md-4">
                        <input type="text" class="form-control" name="n_query" value="" placeholder="Nama Query">
                        <button type="submit" name="query_save" class="btn-xs btn btn-default pull-right">Tambah</button>
                      </div>
                      </div>
                    </div>
                  </div>
              </form>

                <?php if (isset($_POST['query_show']) || isset($_POST['query_save'])):?>

<?php 
$col = $_POST['col'];
//$con =  $_POST['con'];
$ope =  $_POST['ope'];
$AND = "";
$AND1 = "";
$AND2 = "";
$AND3 = "";
$AND4 = "";
//$value_a = "";
if ($_POST['value'] == "") {$value =  "$_POST[value]";} else { $value =  "'$_POST[value]'";}
if ($_POST['value_a'] == "") {$value_a =  "$_POST[value_a]";} else { $value_a =  "'$_POST[value_a]'";}
if ($ope == "BETWEEN") {$AND = "AND";}
if ($ope == "NOT BETWEEN") {$AND = "AND";}
if ($ope == "LIKE") {$value =  "'%$_POST[value]%'";}


$col1 = $_POST['col1'];
$con1 =  $_POST['con1'];
$ope1 =  $_POST['ope1'];
if ($_POST['value1'] == "") {$value1 =  "$_POST[value1]";} else {$value1 =  "'$_POST[value1]'";}
if ($_POST['value1_a'] == "") {$value1_a =  "$_POST[value1_a]";} else {$value1_a =  "'$_POST[value1_a]'";}
if ($ope1 == "BETWEEN") {$AND1 = "AND";}
if ($ope1 == "NOT BETWEEN") {$AND1 = "AND";}
if ($ope1 == "LIKE") {$value1 =  "'%$_POST[value1]%'";}

$col2 = $_POST['col2'];
$con2 =  $_POST['con2'];
$ope2 =  $_POST['ope2'];
$value2 =  "'$_POST[value2]'";
if ($_POST['value2'] == "") {$value2 =  "$_POST[value2]";} else {$value2 =  "'$_POST[value2]'";}
if ($_POST['value2_a'] == "") {$value2_a =  "$_POST[value2_a]";} else {$value2_a =  "'$_POST[value2_a]'";}
if ($ope2 == "BETWEEN") {$AND2 = "AND";}
if ($ope2 == "NOT BETWEEN") {$AND2 = "AND";}
if ($ope2 == "LIKE") {$value2 =  "'%$_POST[value2]%'";}

$col3 = $_POST['col3'];
$con3 =  $_POST['con3'];
$ope3 =  $_POST['ope3'];
$value3 =  "'$_POST[value3]'";
if ($_POST['value3'] == "") {$value3 =  "$_POST[value3]";} else {$value3 =  "'$_POST[value3]'";}
if ($_POST['value3_a'] == "") {$value3_a =  "$_POST[value3_a]";} else {$value3_a =  "'$_POST[value3_a]'";}
if ($ope3 == "BETWEEN") {$AND3 = "AND";}
if ($ope3 == "NOT BETWEEN") {$AND3 = "AND";}
if ($ope3 == "LIKE") {$value3 =  "'%$_POST[value3]%'";}

$col4 = $_POST['col4'];
$con4 =  $_POST['con4'];
$ope4 =  $_POST['ope4'];
$value4 =  "$_POST[value4]";
if ($_POST['value4'] == "") {$value4 =  "$_POST[value4]";} else {$value4 =  "'$_POST[value4]'";}
if ($_POST['value4_a'] == "") {$value4_a =  "$_POST[value4_a]";} else {$value4_a =  "'$_POST[value4_a]'";}
if ($ope4 == "BETWEEN") {$AND4 = "AND";}
if ($ope4 == "NOT BETWEEN") {$AND4 = "AND";}
if ($ope4 == "LIKE") {$value4 =  "'%$_POST[value4]%'";}
?>
                <?php if ($_POST['query_by'] == "admin"):?><!--FIR-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>FIR</th>
                  <th>Keutamaan Kes</th>
                  <th>Status Kes</th>
                  <th>Klasifikasi Utama</th>
                  <th>Klasifikasi Kecil</th>
                  <th>Negeri</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[admin] 
WHERE 
$col $ope $value 
$AND $value_a $con1 $col1 $ope1 $value1 
$AND1 $value1_a $con2 $col2 $ope2 $value2 
$AND2 $value2_a $con3 $col3 $ope3 $value3 
$AND3 $value3_a $con4 $col4 $ope4 $value4 
$AND4 $value4_a";



$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_fir']; ?></td>
                  <td><?php echo $row1['priority']; ?></td>
                  <td><?php echo $row1['cs_status']; ?></td>
                  <td><?php echo $row1['major']; ?></td>
                  <td><?php echo $row1['minor']; ?></td>
                  <td><?php echo $row1['state']; ?></td>
                  <td>
                      <center>
                    <div class="col-md-6">
                      <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                      <input type="hidden" name="id_fir" value="<?php echo $row1['id_fir']; ?>">
                      <input type="hidden" name="id" value="<?php echo $row1['id']; ?>">
                      <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                      </form>
                      </div>
                      </center></td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_fir" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "transaction"):?><!--Transaction-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>Nama Bank</th>
                  <th>Syarikat</th>
                  <th>Signatory</th>
                  <th>Akaun A</th>
                  <th>
                    <form method="post" action="chart_transac.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Tarikh Transaksi
                      <button type="submit" class="btn btn-primary btn-xs"name="date_trans"><span class="fa fa-bar-chart"></span></button>
                    </form>
                  </th>
                  <th>
                     <form method="post" action="chart_transac.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Masa Transaksi
                      <button type="submit" class="btn btn-primary btn-xs"name="time_trans"><span class="fa fa-bar-chart"></span></button>
                    </form>
                  </th>
                  <th>
                    <form method="post" action="chart_transac.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">MYR
                      <button type="submit" class="btn btn-primary btn-xs"name="myr_trans"><span class="fa fa-bar-chart"></span></button>
                    </form>
                  </th>
                  <th>Akaun B</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[transaction] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['rep_ins']; ?></td>
                  <td><?php echo $row1['company']; ?></td>
                  <td><?php echo $row1['name']; ?></td>
                  <td><?php echo $row1['acc_no']; ?></td>
                  <td><?php echo $row1['trans_date_from']->format('Y-m-d'); ?></td>
                  <td><?php echo $row1['time_trans']; ?></td>
                  <td>MYR <?php echo number_format($row1['myr'], 2); ?></td>
                  <td><?php echo $row1['transa_ac']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_transaction" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>


                <?php if ($_POST['query_by'] == "profile"):?><!--profile-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>FIR</th>
                  <th>ID Profil</th>
                  <th>Status</th>
                  <th>Hubungan Jenayah</th>
                  <th>Style</th>
                  <th>Hubungan</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Gelaran</th>
                  <th>Bahasa</th>
                  <th>Jantina</th>
                  <th>Tarikh Lahir</th>
                  <th>Umur</th>
                  <th>Bangsa</th>
                  <th>Etnik</th>
                  <th>Negara</th>
                  <th>Status Perkahwinan</th>
                  <th>Warganegara</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[profile] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_fir']; ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['crimetree']; ?></td>
                  <td><?php echo $row1['style']; ?></td>
                  <td><?php echo $row1['relationship']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['middlename']; ?></td>
                  <td><?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['nickname']; ?></td>
                  <td><?php echo $row1['language']; ?></td>
                  <td><?php echo $row1['gender']; ?></td>
                  <td><?php echo $row1['birth']; ?></td>
                  <td><?php echo $row1['age']; ?></td>
                  <td><?php echo $row1['race']; ?></td>
                  <td><?php echo $row1['ethnic']; ?></td>
                  <td><?php echo $row1['country']; ?></td>
                  <td><?php echo $row1['marital']; ?></td>
                  <td><?php echo $row1['nationality']; ?></td>
                  <td><?php echo $row1['notes']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_profile" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "physical"):?><!--Physical-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Nama</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>Warna Mata</th>
                  <th>Warna Rambut</th>
                  <th>Parut</th>
                  <th>Cermin Mata</th>
                  <th>Bentuk Badan</th>
                  <th>Panjang Rambut</th>
                  <th>Tattoos</th>
                  <th>Darah</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[physical] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php
                   $row1['id_profil']; 

                   $sql = "SELECT *  FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                   $stmt = sqlsrv_query ($conn , $sql);
                   $r = sqlsrv_fetch_array($stmt);
                   Echo $r['firstname'];
                   ?>
                   </td>
                  <td><?php echo $row1['height']; ?></td>
                  <td><?php echo $row1['weight']; ?></td>
                  <td><?php echo $row1['eyecolor']; ?></td>
                  <td><?php echo $row1['haircolor']; ?></td>
                  <td><?php echo $row1['scar']; ?></td>
                  <td><?php echo $row1['glasses']; ?></td>
                  <td><?php echo $row1['build']; ?></td>
                  <td><?php echo $row1['hairlength']; ?></td>
                  <td><?php echo $row1['tattoos']; ?></td>
                  <td><?php echo $row1['blood']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_physical" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "ic"):?><!--IC-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>No.KP</th>
                  <th>Status</th>
                  <th>Keselamatan</th>
                  <th>Jenis Kad</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Alamat</th>
                  <th>Poskod</th>
                  <th>Bandar</th>
                  <th>Negeri</th>
                  <th>Negara</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[ic] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['nom']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['security']; ?></td>
                  <td><?php echo $row1['cardtype']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['middlename']; ?></td>
                  <td><?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['add1']; ?>&ensp;<?php echo $row1['add2']; ?>&ensp;<?php echo $row1['add3']; ?></td>
                  <td><?php echo $row1['poscode']; ?></td>
                  <td><?php echo $row1['city']; ?></td>
                  <td><?php echo $row1['state']; ?></td>
                  <td><?php echo $row1['country']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_ic" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "passport"):?><!--passport-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Status</th>
                  <th>No Baru</th>
                  <th>No Lama</th>
                  <th>MRZ</th>
                  <th>Jenis</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Kod Negara</th>
                  <th>Gender</th>
                  <th>Tarikh Lahir</th>
                  <th>Umur</th>
                  <th>Warganegara</th>
                  <th>Tarikh Isu</th>
                  <th>Tarikh Tamat</th>
                  <th>Tempat Isu</th>
                  <th>Negara Isu</th>
                  <th>Tinggi</th>
                  <th>Berat</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[passport] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['nomnew']; ?></td>
                  <td><?php echo $row1['nomold']; ?></td>
                  <td><?php echo $row1['mrz']; ?></td>
                  <td><?php echo $row1['type']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['middlename']; ?></td>
                  <td><?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['countrycode']; ?></td>
                  <td><?php echo $row1['gender']; ?></td>
                  <td><?php echo $row1['birth']; ?></td>
                  <td><?php echo $row1['age']; ?></td>
                  <td><?php echo $row1['nationality']; ?></td>
                  <td><?php echo $row1['dateissue']; ?></td>
                  <td><?php echo $row1['dateexpired']; ?></td>
                  <td><?php echo $row1['issueplace']; ?></td>
                  <td><?php echo $row1['issuecountry']; ?></td>
                  <td><?php echo $row1['height']; ?></td>
                  <td><?php echo $row1['weight']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_passport" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "drivelicense"):?><!--drivelicense-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>No Siri</th>
                  <th>Status</th>
                  <th>Kelas</th>
                  <th>Nama Pertama</th>
                  <th>Nama Tengah</th>
                  <th>Nama Akhir</th>
                  <th>Warganegara</th>
                  <th>Tarikh Mula</th>
                  <th>Tarikh Tamt</th>
                  <th>Tempat Isu</th>
                  <th>Negara</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[drivelicense] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php echo $row1['serialno']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['class']; ?></td>
                  <td><?php echo $row1['firstname']; ?></td>
                  <td><?php echo $row1['middlename']; ?></td>
                  <td><?php echo $row1['lastname']; ?></td>
                  <td><?php echo $row1['nationality']; ?></td>
                  <td><?php echo $row1['startdate']; ?></td>
                  <td><?php echo $row1['expireddate']; ?></td>
                  <td><?php echo $row1['placeissue']; ?></td>
                  <td><?php echo $row1['country']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_drivelicense" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "transportation"):?><!--transportation-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Nama</th>
                  <th>No Pendaftaran</th>
                  <th>Status</th>
                  <th>Jenis</th>
                  <th>Buatan</th>
                  <th>Model</th>
                  <th>Warna</th>
                  <th>Tahun</th>
                  <th>Tarikh Daftar</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[transportation] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php
                   $row1['id_profil']; 

                   $sql = "SELECT *  FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                   $stmt = sqlsrv_query ($conn , $sql);
                   $r = sqlsrv_fetch_array($stmt);
                   Echo $r['firstname'];
                   ?>
                   </td>
                  <td><?php echo $row1['registno']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['type']; ?></td>
                  <td><?php echo $row1['maker']; ?></td>
                  <td><?php echo $row1['model']; ?></td>
                  <td><?php echo $row1['color']; ?></td>
                  <td><?php echo $row1['year']; ?></td>
                  <td><?php echo $row1['registdate']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_transportation" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "mobileno"):?><!--mobileno-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Nama</th>
                  <th>No.Tel</th>
                  <th>Services</th>
                  <th>Tarikh Daftar</th>
                  <th>Tarikh Tamat</th>
                  <th>Status</th>
                  <th>Menara</th>
                  <th>Rekod</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[mobileno] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php
                   $row1['id_profil']; 

                   $sql = "SELECT *  FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                   $stmt = sqlsrv_query ($conn , $sql);
                   $r = sqlsrv_fetch_array($stmt);
                   Echo $r['firstname'];
                   ?>
                   </td>
                  <td><?php echo $row1['nom']; ?></td>
                  <td><?php echo $row1['service']; ?></td>
                  <td><?php echo $row1['registdate']; ?></td>
                  <td><?php echo $row1['terminatedate']; ?></td>
                  <td><?php echo $row1['status']; ?></td>
                  <td><?php echo $row1['tower']; ?></td>
                  <td><?php echo $row1['record']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_mobileno" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "msocial"):?><!--msocial-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Nama</th>
                  <th>Jenis Media Sosial</th>
                  <th>Id Pengguna</th>
                  <th>Nama Penuh</th>
                  <th>Nama Pengguna</th>
                  <th>URL</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[msocial] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php
                   $row1['id_profil']; 

                   $sql = "SELECT *  FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                   $stmt = sqlsrv_query ($conn , $sql);
                   $r = sqlsrv_fetch_array($stmt);
                   Echo $r['firstname'];
                   ?>
                   </td>
                  <td><?php echo $row1['sm_id']; ?></td>
                  <td><?php echo $row1['sm_type']; ?></td>
                  <td><?php echo $row1['sm_fname']; ?></td>
                  <td><?php echo $row1['sm_name']; ?></td>
                  <td><?php echo $row1['sm_url']; ?></td>
                  <td><?php echo $row1['notas']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_msocial" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "bank"):?><!--bank-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Nama</th>
                  <th>Nama Bank</th>
                  <th>No.Akaun</th>
                  <th>Pemegang Akaun</th>
                  <th>Jenis Akaun</th>
                  <th>Lokasi Akaun</th>
                  <th>Baki Akaun</th>
                  <th>Alamat Bank</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[bank] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php
                   $row1['id_profil']; 

                   $sql = "SELECT *  FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                   $stmt = sqlsrv_query ($conn , $sql);
                   $r = sqlsrv_fetch_array($stmt);
                   Echo $r['firstname'];
                   ?>
                   </td>
                  <td><?php echo $row1['n_bank']; ?></td>
                  <td><?php echo $row1['n_aka']; ?></td>
                  <td><?php echo $row1['p_aka']; ?></td>
                  <td><?php echo $row1['j_aka']; ?></td>
                  <td><?php echo $row1['l_aka']; ?></td>
                  <td><?php echo $row1['b_aka']; ?></td>
                  <td><?php echo $row1['a_bank']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_bank" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "bank_syarikat"):?><!--bank_syarikat-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>No.Syarikat</th>
                  <th>Nama Bank</th>
                  <th>No.Akaun</th>
                  <th>Pemegang Akaun</th>
                  <th>Jenis Akaun</th>
                  <th>Lokasi Akaun</th>
                  <th>Baki Akaun</th>
                  <th>Alamat Bank</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[bank_syarikat] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_syarikat']; ?></td>
                  <td><?php echo $row1['n_bank']; ?></td>
                  <td><?php echo $row1['n_aka']; ?></td>
                  <td><?php echo $row1['p_aka']; ?></td>
                  <td><?php echo $row1['j_aka']; ?></td>
                  <td><?php echo $row1['l_aka']; ?></td>
                  <td><?php echo $row1['b_aka']; ?></td>
                  <td><?php echo $row1['a_bank']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_bank_syarikat" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "com_pany"):?><!--com_pany-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Nama</th>
                  <th>Nama Syarikat</th>
                  <th>Milikan</th>
                  <th>No.Syarikat</th>
                  <th>Tarikh Luput</th>
                  <th>Sektor</th>
                  <th>Alamat</th>
                  <th>No.Tel</th>
                  <th>Sambungan Syarikat</th>
                  <th>Fax</th>
                  <th>Emel</th>
                  <th>Laman Sesawang</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[com_pany] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php
                   $row1['id_profil']; 

                   $sql = "SELECT *  FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                   $stmt = sqlsrv_query ($conn , $sql);
                   $r = sqlsrv_fetch_array($stmt);
                   Echo $r['firstname'];
                   ?>
                   </td>
                  <td><?php echo $row1['c_name']; ?></td>
                  <td><?php echo $row1['mili_s']; ?></td>
                  <td><?php echo $row1['no_c']; ?></td>
                  <td><?php echo $row1['attch']; ?></td>
                  <td><?php echo $row1['exp_regist']; ?></td>
                  <td><?php echo $row1['sek']; ?></td>
                  <td><?php echo $row1['ala']; ?></td>
                  <td><?php echo $row1['tel']; ?></td>
                  <td><?php echo $row1['exttel']; ?></td>
                  <td><?php echo $row1['fax']; ?></td>
                  <td><?php echo $row1['email']; ?></td>
                  <td><?php echo $row1['web']; ?></td>
                  <td><?php echo $row1['note']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_com_pany" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "house"):?><!--house-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>ID Profil</th>
                  <th>Nama</th>
                  <th>ID Pendaftaran</th>
                  <th>Jenis Rumah</th>
                  <th>Status Rumah</th>
                  <th>Sewa Bulanan</th>
                  <th>Tarikh Mula Sewa</th>
                  <th>Warna Rumah</th>
                  <th>Pemilik</th>
                  <th>Catatan</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[house] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['id_profil']; ?></td>
                  <td><?php
                   $row1['id_profil']; 

                   $sql = "SELECT *  FROM [jim].[dbo].[profile] WHERE id_profil = '$row1[id_profil]'";
                   $stmt = sqlsrv_query ($conn , $sql);
                   $r = sqlsrv_fetch_array($stmt);
                   Echo $r['firstname'];
                   ?>
                   </td>
                  <td><?php echo $row1['id_regis']; ?></td>
                  <td><?php echo $row1['hse_type']; ?></td>
                  <td><?php echo $row1['hse_stat']; ?></td>
                  <td><?php echo $row1['month_rent']; ?></td>
                  <td><?php echo $row1['rent_since']; ?></td>
                  <td><?php echo $row1['hse_col']; ?></td>
                  <td><?php echo $row1['owner']; ?></td>
                  <td><?php echo $row1['notas']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table>
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_house" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>
                   <?php endif; ?>

                <?php if ($_POST['query_by'] == "lg"):?><!--ledger-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>IC No</th>
                  <th>ROC No</th>
                  <th>Akaun No</th>
                  <th>
                    <form method="post" action="chart_ledger.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Tarikh
                      <button type="submit" class="btn btn-primary btn-xs"name="date_ledger"><span class="fa fa-bar-chart"></span></button>
                    </form>
                  </th>
                  <th>Deskripsi</th>
                  <th>Debit</th>
                  <th>Deskripsi</th>
                  <th>Credit</th>
                  <th>Baki</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[ledger] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['ic_lg']; ?></td>
                  <td><?php echo $row1['roc_lg']; ?></td>
                  <td><?php echo $row1['acc_no']; ?></td>
                  <td><?php echo $row1['date_lg']; ?></td>
                  <td><?php echo $row1['desc_lg']; ?></td>
                  <td><?php echo $row1['debit_lg']; ?></td>
                  <td><?php echo $row1['debit_desc_lg']; ?></td>
                  <td><?php echo $row1['credit_lg']; ?></td>
                  <td><?php echo $row1['balance_lg']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table><!---
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_house" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>-->
                <?php endif; ?>

                <?php if ($_POST['query_by'] == "inv"):?><!--invesment-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>IC No</th>
                  <th>ROC No</th>
                  <th>Akaun No</th>
                  <th>
                    <form method="post" action="chart_invest.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Tarikh Contrak
                      <button type="submit" class="btn btn-primary btn-xs"name="date_invest"><span class="fa fa-bar-chart"></span></button>
                    </form>
                    </th>
                  <th>Jual/Beli</th>
                  <th>Nama Stok</th>
                  <th>Kod Stok</th>
                  <th>No Contrak</th>
                  <th>Unit</th>
                  <th>Harga</th>
                  <th>Jumlah Kasar</th>
                  <th>Kadar Broker(%)</th>
                  <th>Jumlah Dagangan(RM)</th>
                  <th>Setem Kontrak (RM)</th>
                  <th>Yuran Pembersihan (RM)</th>
                  <th>Jumlah Kos Pembersihan (RM)</th>
                  <th>Asas Penghantaran</th>
                  <th>Mata wang</th>
                  <th>Jumlah Bersih (RM)</th>
                  <th>No Traksaksi</th>
                  <th>Tarkh Penghantaran</th>
                  <th>Tarikh Pembayaran</th>
                  <th>Tarikh matang</th>
                  <th>Tarikh Dikecualikan</th>
                  <th>Tarikh Lodgement</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[invest] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['ic_iv']; ?></td>
                  <td><?php echo $row1['roc_iv']; ?></td>
                  <td><?php echo $row1['acc_no']; ?></td>
                  <td><?php echo $row1['cont_date']; ?></td>
                  <td><?php echo ($row1['buy_sell'] == "B")? "<font color='green'>Buy</font>":"<font color='red'>Sell</font>"; ?></td>
                  <td><?php echo $row1['stock_name']; ?></td>
                  <td><?php echo $row1['stock_code']; ?></td>
                  <td><?php echo $row1['cont_no_tax_no']; ?></td>
                  <td><?php echo $row1['quan']; ?></td>
                  <td><?php echo $row1['price']; ?></td>
                  <td><?php echo $row1['g_amount']; ?></td>
                  <td><?php echo $row1['brokerage']; ?></td>
                  <td><?php echo $row1['brokerage_amout']; ?></td>
                  <td><?php echo $row1['cont_stamp']; ?></td>
                  <td><?php echo $row1['clearing_fee']; ?></td>
                  <td><?php echo $row1['tt_fee']; ?></td>
                  <td><?php echo $row1['deli_bas']; ?></td>
                  <td><?php echo $row1['traded_curr']; ?></td>
                  <td><?php echo $row1['n_amount']; ?></td>
                  <td><?php echo $row1['transac_no']; ?></td>
                  <td><?php echo $row1['delivery_date']; ?></td>
                  <td><?php echo $row1['payment_date']; ?></td>
                  <td><?php echo $row1['maturity_date']; ?></td>
                  <td><?php echo $row1['exempted_date']; ?></td>
                  <td><?php echo $row1['lodgement_date']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table><!---
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_house" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>-->
                <?php endif; ?>

                <?php if ($_POST['query_by'] == "fd"):?><!--Fixed Deposit-->


                <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th style="width: 1%">No</th>
                  <th>IC No</th>
                  <th>ROC No</th>
                  <th>Akaun No</th>
                  <th>
                    <form method="post" action="chart_fd.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Jumlah Pelaburan
                      <button type="submit" class="btn btn-primary btn-xs" name="myr_fd"><span class="fa fa-bar-chart"></span></button>
                    </form>
                  </th>
                  <th>
                    <form method="post" action="chart_fd.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">Tarikh
                      <button type="submit" class="btn btn-primary btn-xs" name="date_fd"><span class="fa fa-bar-chart"></span></button>
                    </form>
                  </th>
                  <th>Masa</th>
                  <th>Tempoh Pelaburan</th>
                  <th>Kadar Dividen</th>
                  <th>Jumlah Matang</th>
                  <th>Pengeluaran</th>
                  <th>Baki</th>
                  <th>Tindakan</th>
                </tr>
                </thead>
<?php 
include('include/dbconn.php');

$query_tbl = "SELECT * FROM [jim].[dbo].[fd_trans] WHERE $col $ope $value $AND $value_a $con1 $col1 $ope1 $value1 $AND1 $value1_a $con2 $col2 $ope2 $value2 $AND2 $value2_a $con3 $col3 $ope3 $value3 $AND3 $value3_a $con4 $col4 $ope4 $value4 $AND4 $value4_a";

$sql = "$query_tbl";
$stmt1 = sqlsrv_query ($conn , $sql);
if( !$stmt1) {
}

$counter = 1 ;
while($row1=  sqlsrv_fetch_array($stmt1))
{
?>
                <tr>
                  <td><?php echo $counter++ ?></td>
                  <td><?php echo $row1['ic']; ?></td>
                  <td><?php echo $row1['roc']; ?></td>
                  <td><?php echo $row1['acc_no']; ?></td>
                  <td><?php echo $row1['inv_amount']; ?></td>
                  <td><?php echo $row1['datefd']; ?></td>
                  <td><?php echo $row1['timefd']; ?></td>
                  <td><?php echo $row1['inv_period']; ?></td>
                  <td><?php echo $row1['dividen_rate']; ?></td>
                  <td><?php echo $row1['amount_mat']; ?></td>
                  <td><?php echo $row1['withdraw']; ?></td>
                  <td><?php echo $row1['balance']; ?></td>
                  <td>
                    <center>
                      <!--<div class="col-md-6">
                        <form method="post" action="view.php" target="print_popup" onsubmit="window.open('about:blank','print_popup','width=1200,height=500');">
                          <input type="hidden" name="id_fir" value="<?php// echo $row1['id_fir']; ?>">
                          <input type="hidden" name="id" value="<?php// echo $row1['id']; ?>">
                          <button type="submit" class="btn btn-warning btn-xs" title="Papar" name="papar_fir"><span class="glyphicon glyphicon-eye-open"></span></button>
                        </form>
                      </div>-->
                    </center>
                  </td>
                </tr>
<?php } ?>
              </table><!---
              <form method="post" action="e_data.php">
                <input type="hidden" name="query_script" value="<?php echo $query_tbl; ?>">
                <button type="submit" name="e_house" class="btn btn-success"><span class="fa fa-file-excel-o"><font color="#fff">&ensp;Export</font></span></button>
              </form>-->
                   <?php endif; ?>
                   <?php endif; ?>
              <br>
            </div>
            </div>
          </div>
                  <div class="x_content">
                  <div class="form group">
                  <div class="row">
                  <div class="box-body">       

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
      </section>
        <!-- footer content -->
        <?php include 'footer.php'; ?>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <?php include 'include/js.php'; ?>
    <?php 
    if (!empty($_POST['value1'])) { ?>
      <script>$('#A1').collapse('show');</script>";
    <?php } ?>

    <?php 
    if (!empty($_POST['value2'])) { ?>
      <script>$('#1').collapse('show');</script>";
    <?php } ?>

    <?php 
    if (!empty($_POST['value3'])) { ?>
      <script>$('#2').collapse('show');</script>";
    <?php } ?>

    <?php 
    if (!empty($_POST['value4'])) { ?>
      <script>$('#3').collapse('show');</script>";
    <?php } ?>
    <?php 
    if (!empty($value1)) { ?>
      <script>$('#A1').collapse('show');</script>";
    <?php } ?>

    <?php 
    if (!empty($value2)) { ?>
      <script>$('#1').collapse('show');</script>";
    <?php } ?>

    <?php 
    if (!empty($value3)) { ?>
      <script>$('#2').collapse('show');</script>";
    <?php } ?>

    <?php 
    if (!empty($value4)) { ?>
      <script>$('#3').collapse('show');</script>";
    <?php } ?>
<?php 
if(isset($_POST['query_save'])){
if(!empty($_POST['id'])){
  $sql = "UPDATE [jim].[dbo].[query_mgr]
   SET [date_e] =CURRENT_TIMESTAMP
      ,[title] = '$_POST[n_query]'
      ,[userk] = '$fulname'
      ,[col] = '$_POST[col]'
      ,[ope] = '$_POST[ope]'
      ,[value] = '$_POST[value]'
      ,[value_a] = '$_POST[value_a]'
      ,[con1] = '$_POST[con1]'
      ,[col1] = '$_POST[col1]'
      ,[ope1] = '$_POST[ope1]'
      ,[value1] = '$_POST[value1]'
      ,[value1_a] = '$_POST[value1_a]'
      ,[con2] = '$_POST[con2]'
      ,[col2] = '$_POST[col2]'
      ,[ope2] = '$_POST[ope2]'
      ,[value2] = '$_POST[value2]'
      ,[value2_a] = '$_POST[value2_a]'
      ,[con3] = '$_POST[con3]'
      ,[col3] = '$_POST[col3]'
      ,[ope3] = '$_POST[ope3]'
      ,[value3] = '$_POST[value3]'
      ,[value3_a] = '$_POST[value3_a]'
      ,[con4] = '$_POST[con4]'
      ,[col4] = '$_POST[col4]'
      ,[ope4] = '$_POST[ope4]'
      ,[value4] = '$_POST[value4]'
      ,[value4_a] = '$_POST[value4_a]'
 WHERE id = '$_POST[id]'";
}
else{
$sql = "INSERT INTO [jim].[dbo].[query_mgr]
           ([date_c]
           ,[title]
           ,[userk]
           ,[tbl]
           ,[col]
           ,[ope]
           ,[value]
           ,[value_a]
           ,[con1]
           ,[col1]
           ,[ope1]
           ,[value1]
           ,[value1_a]
           ,[con2]
           ,[col2]
           ,[ope2]
           ,[value2]
           ,[value2_a]
           ,[con3]
           ,[col3]
           ,[ope3]
           ,[value3]
           ,[value3_a]
           ,[con4]
           ,[col4]
           ,[ope4]
           ,[value4]
           ,[value4_a])
     VALUES
           (CURRENT_TIMESTAMP
           ,'$_POST[n_query]'
           ,'$fulname'
           ,'$_POST[query_by]'
           ,'$_POST[col]'
           ,'$_POST[ope]'
           ,'$_POST[value]'
           ,'$_POST[value_a]'
           ,'$_POST[con1]'
           ,'$_POST[col1]'
           ,'$_POST[ope1]'
           ,'$_POST[value1]'
           ,'$_POST[value1_a]'
           ,'$_POST[con2]'
           ,'$_POST[col2]'
           ,'$_POST[ope2]'
           ,'$_POST[value2]'
           ,'$_POST[value2_a]'
           ,'$_POST[con3]'
           ,'$_POST[col3]'
           ,'$_POST[ope3]'
           ,'$_POST[value3]'
           ,'$_POST[value3_a]'
           ,'$_POST[con4]'
           ,'$_POST[col4]'
           ,'$_POST[ope4]'
           ,'$_POST[value4]'
           ,'$_POST[value4_a]')";
         }
$stmt1 = sqlsrv_query ($conn , $sql);
}
?>
  </body>
</html>
