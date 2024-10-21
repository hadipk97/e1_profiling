<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
 
<!-- List loop -->
    <style>
      blink {
        animation: blinker 0.6s linear infinite;
       }
      @keyframes blinker {  
        50% { opacity: 0; }
       }
    </style>
<?php
include 'include/dbconn.php';
$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[loop] ORDER BY id DESC" );
 $r = sqlsrv_fetch_array( $stmt);
 $f = $r['loop_q'];

$stmt = sqlsrv_query( $conn, "SELECT * FROM [jim].[dbo].[table_size] ORDER BY id DESC" );
 $r = sqlsrv_fetch_array( $stmt);
 $tb = $r['table_q'];

 ?>
<?php for ($i=0; $i < $f; $i++) { ?>
<style>
.autocomplete<?= $i ?> {
  position: relative;
  display: inline-block;
}
input {
  border: 1px solid transparent;
  background-color: #f1f1f1;
  padding: 10px;
  font-size: 16px;
}

input[type=text] {
  background-color: #f1f1f1;
  width: 100%;
}

input[type=submit] {
  background-color: DodgerBlue;
  color: #fff;
  cursor: pointer;
}

.autocomplete<?= $i ?>-items {
  position: absolute;
  border: 1px solid #d4d4d4;
  border-bottom: none;
  border-top: none;
  z-index: 99;
  /*position the autocomplete items to be the same width as the container:*/
  top: 100%;
  left: 0;
  right: 0;
}

.autocomplete<?= $i ?>-items div {
  padding: 10px;
  cursor: pointer;
  background-color: #fff; 
  border-bottom: 1px solid #d4d4d4; 
}

/*when hovering an item:*/
.autocomplete<?= $i ?>-items div:hover {
  background-color: #e9e9e9; 
}

/*when navigating through the items using the arrow keys:*/
.autocomplete<?= $i ?>-active {
  background-color: DodgerBlue !important; 
  color: #ffffff; 
}

#myBtn {
  position: fixed;
  bottom: 20px;
  right: 30px;
  z-index: 99;
}

#myBtn1 {
  position: fixed;
  bottom: 50px;
  right: 30px;
  z-index: 99;
}
</style>
<?php } ?>