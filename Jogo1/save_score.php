<?php
  // Acrescenta o novo placar no final do arquivo
  $fp = fopen("memory_highscore.dat", "w+");
  foreach($_GET as $var) { 
    fputs($fp, "$var" . chr(9)); 
  }
  fputs($fp, chr(10)); 
  fclose($fp);
  
  include("show_score.php")
?>