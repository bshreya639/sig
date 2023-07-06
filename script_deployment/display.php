<?php
echo "<body style='background-color:yellow'>";
$get_ip=$_SERVER['SERVER_ADDR'];
$url = "http://$get_ip:80/response.php";
$homepage = file_get_contents($url);
$get_json = json_decode($homepage);

foreach ($get_json as $element) {
    foreach ($element as $key => $value);
}
echo strrev($value);
?>
