<!DOCTYPE html>
<html>
<body>
<?php session_start(); ?>
Location Name : Latitude : <?php echo $_POST['lat'];?> | Longitude : <?php echo $_POST['log'];?>
<iframe width="880" height="450" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?q=<?php// echo $_SESSION['l_name'];?>/@<?php echo $_POST['lat'];?>,<?php echo $_POST['log'];?>  &amp;ie=UTF8&amp;&amp;output=embed"></iframe>
</body>
</html>