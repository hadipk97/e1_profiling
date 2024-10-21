<!--/**
 * @author Kamaruzzaman
 * @copyright 2017
 */-->
  <?php
$myfile = fopen("newfile.php", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);
?> 