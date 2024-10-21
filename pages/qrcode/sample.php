<?php    
    $PNG_TEMP_DIR = dirname(__FILE__).DIRECTORY_SEPARATOR.'temp'.DIRECTORY_SEPARATOR;

    $PNG_WEB_DIR = 'temp/';

    include "qrlib.php";    
    
    
    
    $filename = $PNG_TEMP_DIR.'test.png';

        $filename = $PNG_TEMP_DIR.'test'.md5('JPHL&TN(HQ):IP0001/2018|H|4').'.png';
        QRcode::png('JPHL&TN(HQ):IP0001/2018', $filename,'H', '4', 2);  

        echo '<img src="'.$PNG_WEB_DIR.basename($filename).'" />';  
    // benchmark
    QRtools::timeBenchmark();    

?>