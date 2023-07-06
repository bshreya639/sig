<?php

header('Content-type: application/json');
$response = array();
$response[0] = array(
    'id' => '1',
    'message' => 'Hello world'
);
echo json_encode($response);
