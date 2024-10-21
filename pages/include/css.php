<style> 

input[type=password]:focus {
    border: 3px solid #ef4545;
}
input[type=text]:focus {
    border: 3px solid #1abb9c;
}
input[type=number]:focus {
    border: 3px solid #1abb9c;
}
input[type=email]:focus {
    border: 3px solid #1abb9c;
}
select[id=pilih]:focus {
    border: 3px solid #1abb9c;
}
select[required]:focus {
    border: 3px solid #ef4545;
}
input[required]:focus {
    border: 3px solid #ef4545;
}
input[type=tel]:focus {
    border: 3px solid #1abb9c;
}
textarea[class=form-control]:focus {
    border: 3px solid #1abb9c;
}
textarea[required]:focus {
    border: 3px solid #ef4545;
}
</style>
 <style type="text/css">
        .wizard {
    margin: 20px auto;
    background: #fff;
}

    .wizard .nav-tabs {
        position: relative;
        margin: 40px auto;
        margin-bottom: 0;
        border-bottom-color: #e0e0e0;
    }

    .wizard > div.wizard-inner {
        position: relative;
    }

.connecting-line {
    height: 2px;
    background: #e0e0e0;
    position: absolute;
    width: 90%;
    margin: 0 auto;
    left: 0;
    right: 0;
    top: 50%;
    z-index: 1;
}

.wizard .nav-tabs > li.active > a, .wizard .nav-tabs > li.active > a:hover, .wizard .nav-tabs > li.active > a:focus {
    color: #555555;
    cursor: default;
    border: 0;
    border-bottom-color: transparent;
}

span.round-tab {
    width: 70px;
    height: 70px;
    line-height: 70px;
    display: inline-block;
    border-radius: 100px;
    background: #fff;
    border: 2px solid #e0e0e0;
    z-index: 2;
    position: absolute;
    left: 0;
    text-align: center;
    font-size: 25px;
}
span.round-tab i{
    color:#555555;
}
.wizard li.active span.round-tab {
    background: #fff;
    border: 2px solid #3AA0F4;
    
}
.wizard li.active span.round-tab i{
    color: #3AA0F4;
}

span.round-tab:hover {
    color: #333;
    border: 2px solid #333;
}

.wizard .nav-tabs > li {
    width: 9%;
}

.wizard li:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 0;
    margin: 0 auto;
    bottom: 0px;
    border: 5px solid transparent;
    border-bottom-color: #3AA0F4;
    transition: 0.1s ease-in-out;
}

.wizard li.active:after {
    content: " ";
    position: absolute;
    left: 46%;
    opacity: 1;
    margin: 0 auto;
    bottom: 0px;
    border: 10px solid transparent;
    border-bottom-color: #3AA0F4;
}

.wizard .nav-tabs > li a {
    width: 70px;
    height: 70px;
    margin: 20px auto;
    border-radius: 100%;
    padding: 0;
}

    .wizard .nav-tabs > li a:hover {
        background: transparent;
    }

.wizard .tab-pane {
    position: relative;
    padding-top: 50px;
}

.wizard h3 {
    margin-top: 0;
}
.step1 .row {
    margin-bottom:10px;
}
.step_21 {
    border :1px solid #eee;
    border-radius:5px;
    padding:10px;
}
.step33 {
    border:1px solid #ccc;
    border-radius:5px;
    padding-left:10px;
    margin-bottom:10px;
}
.dropselectsec {
    width: 68%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.dropselectsec1 {
    width: 74%;
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    outline: none;
    font-weight: normal;
}
.mar_ned {
    margin-bottom:10px;
}
.wdth {
    width:25%;
}
.birthdrop {
    padding: 6px 5px;
    border: 1px solid #ccc;
    border-radius: 3px;
    color: #333;
    margin-left: 10px;
    width: 16%;
    outline: 0;
    font-weight: normal;
}


/* according menu */
#accordion-container {
    font-size:13px
}
.accordion-header {
	font-size:13px;
	background:#ebebeb;
	margin:5px 0 0;
	padding:7px 20px;
	cursor:pointer;
	color:#fff;
	font-weight:400;
	-moz-border-radius:5px;
	-webkit-border-radius:5px;
	border-radius:5px
}
.unselect_img{
	width:18px;
	-webkit-user-select: none;  
	-moz-user-select: none;     
	-ms-user-select: none;      
	user-select: none; 
}
.active-header {
	-moz-border-radius:5px 5px 0 0;
	-webkit-border-radius:5px 5px 0 0;
	border-radius:5px 5px 0 0;
	background:#F53B27;
}
.active-header:after {
	content:"\f068";
	font-family:'FontAwesome';
	float:right;
	margin:5px;
	font-weight:400
}
.inactive-header {
	background:#333;
}
.inactive-header:after {
	content:"\f067";
	font-family:'FontAwesome';
	float:right;
	margin:4px 5px;
	font-weight:400
}
.accordion-content {
	display:none;
	padding:20px;
	background:#fff;
	border:1px solid #ccc;
	border-top:0;
	-moz-border-radius:0 0 5px 5px;
	-webkit-border-radius:0 0 5px 5px;
	border-radius:0 0 5px 5px
}
.accordion-content a{
	text-decoration:none;
	color:#333;
}
.accordion-content td{
	border-bottom:1px solid #dcdcdc;
}



@media( max-width : 585px ) {

    .wizard {
        width: 90%;
        height: auto !important;
    }

    span.round-tab {
        font-size: 16px;
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard .nav-tabs > li a {
        width: 50px;
        height: 50px;
        line-height: 50px;
    }

    .wizard li.active:after {
        content: " ";
        position: absolute;
        left: 35%;
    }
}
    </style>
<style>
    #load{
    width:100%;
    height:100%;
    position:fixed;
    z-index:9999;
    background:url("../img/giphy.gif") no-repeat center center rgba(0,0,0,0.25)
}
</style>
<style>
    
.btn-indigo {
    color: #f8f8f8;
    background-color: #3E50B4;
    border-color: #3949a2;
}
.btn-indigo:hover {
    color: #fff;
    background-color: #3949a2;
    border-color: #3949a2;
}

.btn-deep-orange {
    color: #f8f8f8;
    background-color: #FE5621;
    border-color: #d4481c;
}
.btn-deep-orange:hover {
    color: #fff;
    background-color: #d4481c;
    border-color: #d4481c;
}
</style>
    <link rel="apple-touch-icon" sizes="76x76" href="../../img/logo2.png">
  	<link rel="icon" type="image/png" href="../../img/logo2.png">

    <!-- Bootstrap -->
    <link href="../gentelella-master/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../gentelella-master/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../gentelella-master/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../gentelella-master/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  
    <!-- bootstrap-progressbar -->
    <link href="../gentelella-master/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../gentelella-master/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../gentelella-master/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- daterange picker -->
    <link rel="stylesheet" href="../gentelella-master/production/plugins/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" href="../plugins/timepicker/bootstrap-timepicker.css">
    <!-- Custom Theme Style -->
    <link href="../gentelella-master/build/css/custom.min.css" rel="stylesheet">
    
   <link rel="stylesheet" href="../gentelella-master/production/plugins/datepicker/datepicker3.css">
   <link rel="stylesheet" href="../gentelella-master/production/plugins/datepicker1/datepicker3.css">
   <link rel="stylesheet" href="../gentelella-master/production/datepicker/datepicker3.css">
    
    <link href="../gentelella-master/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../gentelella-master/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../gentelella-master/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../gentelella-master/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../gentelella-master/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
  	<link rel="stylesheet" href="../gentelella-master/build/plugins/daterangepicker/daterangepicker.css">

    