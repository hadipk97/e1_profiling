<!--/**
 * @author Faizul
 * @copyright 2019
 */-->
 <?php 
 include "include/bar.php";
 
    if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
        $ip = $_SERVER['HTTP_CLIENT_IP'];
    } elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
    } else {
        $ip = $_SERVER['REMOTE_ADDR'];
    }

 
//function run sql
function runSQL($sql){
    include "include/dbconn.php";
    //echo $sql;
    //$sql = "SELECT * FROM [jim].[dbo].[attach]";
    //$stmt = sqlsrv_query ($conn , $sql);
    //check null value to skip
   
    if( strpos( $sql, "VALUES ();" ) !== false) { //skip query if all value is null
        echo "Null value exists in the haystack variable";
        echo "<script>console.log('Null value exists in the haystack variable')</script>";
    }else if(!$res=sqlsrv_query($conn, $sql)){ //run query
        $errmsg = sqlsrv_errors();
        //echo $sql;
        echo "<script>console.log(".json_encode($errmsg[0]["message"]).")</script>";
        echo 'Error: '.$errmsg[0]["message"]."<br>";
        return $res;
    }else{
        //echo "Query Sucessfully run<br>"; 
        return $res;
    }
    
  }

 ?>

<link href="../plugins/dropzone.css" rel="stylesheet">
<script src="../plugins/dropzone.js"></script>
<section class="content">
<div class="right_col" >
<h4>Import File</h4>
<form name="readcsv" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="col-xs-1"></div>
        <div class="col-xs-2">
           
        </div>
        <div class="col-xs-2">
            <select class="form-control" name="ty" required="required">
            <!--<option disabled selected>Option</option>-->
            <!--<option value="xls">Excel (XLS)</option>-->
            <option value="csv">Excel (CSV)</option>
            <!--<option value="txt">Flat Data Type (TXT)</option>-->
            </select>
        </div>
        <div class="col-xs-2">
            <button type="submit" class="btn btn-primary" name="exe_data">Import Data </button>
            <img id="loader" style="display: none;" src="../img/giphy.gif" />
        </div>
    
    </div>
</form>
<form action="#" enctype="multipart/form-data" class="dropzone" id="image-upload">
    <div accept=".csv,.xls,.txt" >
        <center>Drop Files Here for Uploding.</center>
        <div id="table_data"></div>
    </div>
</form>

<?php 
$uploadDir = 'upload';

if (!empty($_FILES)) {

  $tmpFile = $_FILES['file']['tmp_name'];
  $filename = $uploadDir.'/'. $_FILES['file']['name'];
  $file_name = $_FILES['file']['name'];


  $sql = "SELECT * FROM [jim].[dbo].[attach] WHERE filename = '$file_name'";
  $stmt = runSQL($sql);
  $r =  sqlsrv_fetch_array($stmt);
  if($r['id'] == ""){
        $ext = pathinfo($file_name, PATHINFO_EXTENSION);
        move_uploaded_file($tmpFile,$filename);

        $sql = "INSERT INTO [jim].[dbo].[attach] ([filename],[ext],[user_id]) VALUES ('$file_name','$ext','$_COOKIE[id]')";
        $stmt = runSQL($sql);
  }
}

if(isset($_POST["exe_data"])){
    //check filename
    include "include/dbconn.php";
    $stmt3 = sqlsrv_query($conn,"SELECT * FROM [jim].[dbo].[attach] WHERE ext = '".$_POST['ty']."' AND user_id = '".$_COOKIE['id']."'");
    while($eachfile = sqlsrv_fetch_array($stmt3)){
        createquery("upload/".$eachfile['filename']);
    }
    //clear uploadfile
    clear_csvfile();
}

function createquery($filename){


    //echo "<pre>";
    //$filename = 'upload/filename';

    // The nested array to hold all the arrays
    $the_big_array = []; 

    // Open the file for reading
    if (($h = fopen("{$filename}", "r")) !== FALSE) 
    {
    // Each line in the file is converted into an individual array that we call $data
    // The items of the array are comma separated
    while (($data = fgetcsv($h, 1000, ",")) !== FALSE) 
    {
        // Each individual array is being pushed into the nested array
        $the_big_array[] = $data;	
        
    }

    // Close the file
    fclose($h);
    }

    // Display the code in a readable format
    //echo "<pre>";
    //var_dump($the_big_array[0]);
    //echo "</pre>";

    $tablename =  pathinfo($filename)['filename'];
    $createSQL = "CREATE TABLE ".$tablename." ( id INTEGER IDENTITY NOT NULL,  ";
    $createSQLLink = "CREATE TABLE ".$tablename."_link ( id INTEGER IDENTITY NOT NULL, from_link VARCHAR(100) NOT NULL, to_link VARCHAR(100) NOT NULL);";
    $insertSQL = "INSERT INTO ".$tablename." (";
    $insertColumn = "";

    //create table sql
    foreach ($the_big_array[0] as $tblcolumn){
        $colname = str_replace(' ', '_', $tblcolumn);
        $colnameckd = preg_replace('/[^a-z0-9_]/i', '', $colname);
        //for insert Statement
        $insertColumn .="[".$colnameckd."], ";
    $createSQL .= $colnameckd." VARCHAR(100) NULL, ";
    }

    $createSQL = rtrim($createSQL, ', ')."); "; //trim last ,
    $colnameckd =rtrim($insertColumn, ', ').") "; //trim last ,


    //echo "Created 1 script table name as ".$tablename."<br><br>";//.$createSQL;
    //run SQL script
    runSQL($createSQL);
    //set ?column as primary key
    $pid = "id";
    runSQL("ALTER TABLE $tablename ADD CONSTRAINT PK_$tablename PRIMARY KEY ($pid);");
    
    //create table_link
    runSQL($createSQLLink);
    //set primary & forign key with link table
    runSQL("ALTER TABLE ".$tablename."_link ADD CONSTRAINT PK_".$tablename."_link PRIMARY KEY ($pid);");
    //runSQL("ALTER TABLE ".$tablename." WITH NOCHECK ADD  CONSTRAINT [FK_".$tablename."_".$tablename."_link] FOREIGN KEY([id]) REFERENCES [".$tablename."_link] ([from_link])");


    //echo "</pre>";
    //echo $createSQL ;
    //dump insert 
    $rowcount = sizeof($the_big_array);

    for($x = 1; $x <= $rowcount; $x++){
        //echo "Row $x ";
        $insertSQL = $insertSQL.$colnameckd." VALUES (";
        
        foreach ($the_big_array[$x] as $columnvalue){
            $insertSQL .="'".$columnvalue."' ,";
        }
        $insertSQL =rtrim($insertSQL, ', ')."); ";
        //echo $insertSQL;
        //echo "<br><br>";
        //run SQL script
        //runSQL($insertSQL);
        $insertSQL =  "INSERT INTO ".$tablename." ("; //reset insert
    }

    //echo "</pre>";
    //log import
    runSQL("INSERT INTO [jim].[dbo].[log] ([type],[tdate],[usr],[ip]) VALUES ('Import File $tablename',CURRENT_TIMESTAMP,'$_COOKIE[id]','$ip');" );
}

function clear_csvfile(){
    //runSQL("DELETE FROM [jim].[dbo].[attach] WHERE user_id = '".$_COOKIE['id']."'");
}

?>

<div class ="">
    <br>
    <h4>Edit Link</h4>
    <div class = "container">
        <div class= "col-xs-8 ">
            <?php
                include "include/dbconn.php";
                $tablename1 = sqlsrv_query($conn,"select name from sys.tables where name like '%_link' order by name;");
                $tablename2 = sqlsrv_query($conn,"select name from sys.tables order by name;");
                $columnname1 =  sqlsrv_query($conn,"SELECT t.name AS TableName, c.name AS ColName FROM sys.columns c JOIN sys.tables t ON c.object_id = t.object_id where c.name not like 'id' and t.name like '%_link'; ");
                $columnname2 =  sqlsrv_query($conn,"SELECT t.name AS TableName, c.name AS ColName FROM sys.columns c JOIN sys.tables t ON c.object_id = t.object_id;");
            
            ?>

            <select class="form-control" id="TableLinkName1" name="TableLinkName1" required="required">
            <option value = ""  selected>Select Table Link </option>
            <?php 
                while($tablelist1 = sqlsrv_fetch_array($tablename1)){
                    echo "<option value='$tablelist1[name]'>$tablelist1[name]</option>";
                }
            ?>
            </select>
        </div>

        <div class= "col-xs-4 ">
            
            <select class="form-control" id="PColumnName" required="required">
            <option value = ""  selected>Forign Key</option>
            <?php 
                while($columnlist1 = sqlsrv_fetch_array($columnname1)){
                    echo "<option data-filter='$columnlist1[TableName]' value='$columnlist1[ColName]'>$columnlist1[ColName]</option>";
                }
            ?>
            </select>
        </div>
        <div class="col-xs-8 ">
            <select class="form-control" id="TableLinkName2" name="TableLinkName2" required="required">
                <option value = ""  selected>Select Table as FOREIGN KEY </option>
                <?php 
                    while($tablelist2 = sqlsrv_fetch_array($tablename2)){
                        echo "<option value='$tablelist2[name]'>$tablelist2[name]</option>";
                    }
                ?>
            </select>
        </div>
        <div class= "col-xs-4 ">
            
            <select class="form-control" id="FColumnName" required="required">
            <option value = ""  selected>Reference Key</option>
            <?php 
                while($columnlist2 = sqlsrv_fetch_array($columnname2)){
                    echo "<option data-filter='$columnlist2[TableName]' value='$columnlist2[ColName]'>$columnlist2[ColName]</option>";
                }
            ?>
            </select>
        </div>
        <div class= "col-xs-12">
                <button id="generateScript">Click</button>
                <div id="generatedScript"></div>
        </div>
    </div>
    </div>
</div>

</section>
<?php include 'footer.php'; ?>
</div>
</div>
<?php include 'include/js.php'; ?>
<script type="text/javascript">

    function filterCombobox(selectObject, filterValue, autoSelect) {

    var fullData = selectObject.data("filterdata-values");
    var emptyValue = selectObject.data("filterdata-emptyvalue");

    // Initialize if first time.
    if (!fullData) {
    fullData = selectObject.find("option[data-filter]").detach();
    selectObject.data("filterdata-values", fullData);
    emptyValue = selectObject.find("option[data-filter-emptyvalue]").detach();
    selectObject.data("filterdata-emptyvalue", emptyValue);
    selectObject.addClass("filtered");
    }
    else {
    // Remove elements from DOM
    selectObject.find("option[data-filter]").remove();
    selectObject.find("option[data-filter-emptyvalue]").remove();
    }

    // Get filtered elements.
    var toEnable = fullData.filter("option[data-filter][data-filter='" + filterValue + "']");

    // Attach elements to DOM
    selectObject.append(toEnable);

    // If toEnable is empty, show empty option.
    if (toEnable.length == 0) {
    selectObject.append(emptyValue);
    }

    // Select First Occurrence
    if (autoSelect) {
    var obj = selectObject.find("option[selected]");
    selectObject.val(obj.length == 0 ? toEnable.val() : obj.val());
    }
    }
    $('#TableLinkName1').on('change', function() {
        filterCombobox($("#PColumnName"), this.value, true);   
    });
    $('#TableLinkName2').on('change', function() {
        filterCombobox($("#FColumnName"), this.value, true);
    });

    $('#generateScript').on('click', function(){
        //ALTER TABLE [dbo].[gst_link]  WITH NOCHECK ADD  CONSTRAINT [FK_gst_link_com_pany_link] FOREIGN KEY([c_no_to])
        //REFERENCES [dbo].[com_pany_link] ([no_c])
        $( "#generatedScript").html(
            "ALTER TABLE " + $( "#TableLinkName1 option:selected" ).text() 
            +" WITH NOCHECK ADD CONSTRAINT [FK_" + $( "#TableLinkName1 option:selected" ).text() + $( "#TableLinkName2 option:selected" ).text() + "] "
            +" FOREIGN KEY(["+$( "#PColumnName option:selected" ).text()+"]) "
            +" REFERENCES "+$( "#TableLinkName2 option:selected" ).text() +" (["+$( "#FColumnName option:selected" ).text()+"])"
        );
        $( "#TableLinkName1 option:selected" ).text();
        $( "#PColumnName option:selected" ).text();
        $( "#PColumnName option:selected" ).text();
        
    });

    Dropzone.options.imageUpload = {};
    // '.tbl-content' consumed little space for vertical scrollbar, scrollbar width depend on browser/os/platfrom. Here calculate the scollbar width .
    $(window).on("load resize ", function() {
    var scrollWidth = $('.tbl-content').width() - $('.tbl-content table').width();
    $('.tbl-header').css({'padding-right':scrollWidth});
    }).resize();
    
    var auto_refresh = setInterval(
    
    function (){$('#table_data').load('check_file.php');}, 1000);
</script>
</body>
</html>