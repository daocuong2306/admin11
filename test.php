<?php
echo date("d/m/y");
echo strtotime("now");
$a="2022/12/11";
$date = date_create( );
$test=date_create($a);
echo "<pre>";

echo print_r($date);
echo print_r($test);
echo "</pre>";
if ($date>=$test) {echo "cuonglon";};
?>