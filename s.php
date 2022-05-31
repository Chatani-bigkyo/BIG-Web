<?php



$name = $_POST{'name'};

$txt = $_POST{'txt'};

$txt = htmlspecialchars($txt);

if(isset($txt)) {

 $file = file_get_contents('log.html');

 $fp = fopen('log.html', 'w');

 fputs($fp, $name . "<br />" . $txt . "<hr>" . "\n" . $file);

 fclose($fp);

}



?>
