<?php
header('Content-Type: application/json; charset=UTF-8');

$arr['start'] = date('Y-m-d H:i:s');
$arr['end'] = date('Y-m-d H:i:s', strtotime('+1 hour'));

print json_encode($arr, JSON_PRETTY_PRINT);
?>