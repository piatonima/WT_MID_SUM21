<?php
     $length =6;
     $width = 3;
  if($length==$width) echo "This shape is a square.";
  else 
  {
    $area = $length * $width;
    echo "Area is: ".$area; 
    $perimeter = 2 * ($length + $width); 
    echo "<br>Perimeter is: ".$perimeter;
	
  }
  ?>