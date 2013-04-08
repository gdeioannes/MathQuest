<?php
 $ajax_var1 = $_POST['name'];
 $ajax_var2 = $_POST['level'];
 $ajax_var3 = $_POST['count'];

$file=fopen("puntages.txt","a+");
fwrite($file,"<p>" . $ajax_var1 . " Level:" . $ajax_var2 . " score:" . $ajax_var3 . " </p>" );
fclose($file);
echo $ajax_var1;
?>