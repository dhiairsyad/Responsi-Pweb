<?php  
 $file = fopen("invoice.txt","r");  
 while(! feof($file))  
  {  
  echo fgets($file). "<br />";  
  }
  echo '<a href="index.html">Halaman Awal</a></br></br>';
 fclose($file);  
 ?>