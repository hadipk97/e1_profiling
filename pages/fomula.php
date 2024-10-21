<?php
  ${'g'.$z} = 0;
  if($coloum1 != ""){
    if($i == "0")
      {
        echo "<td>".$coloum1."</td>";

      /*if(strpos($coloum2,$coloum1) || $coloum2 == $coloum1)
        { echo "<td style=\"background-color:#62a25d\">"."<font color=\"#ffffff\">$coloum1</font>"."</td>"; ${'g'.$z} = 1;}
        else 
          {echo "<td>".$coloum1."</td>";}
          */
    }
    else
      {if(strpos($coloum2, $coloum1) || $coloum2 == $coloum1)
        { echo "<td style=\"background-color:#62a25d\">"."<font color=\"#ffffff\">$coloum1</font>"."</td>"; ${'g'.$z} = 1;}
        else 
          {echo "<td>".$coloum1."</td>";}
      }
  }
  else
    {echo "<td></td>";}
?>