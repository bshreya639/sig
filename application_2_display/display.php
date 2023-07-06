<?php
echo "<body style='background-color:yellow'>";
$get_port=getenv('PORT');
$get_ip=getenv('IP');
$url = "http://$get_ip:$get_port/response.php";
$homepage = file_get_contents($url);
$get_json = json_decode($homepage);

foreach ($get_json as $element) {
    foreach ($element as $key => $value);
}
echo strrev($value);
?>
