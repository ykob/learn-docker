<?php
header('Content-Type: application/json; charset=UTF-8');

$mysqli = mysqli_connect('mysql', 'test', 'test', 'test');
mysqli_select_db($mysqli, 'test');
$data = mysqli_query($mysqli, 'SELECT * FROM time');

$arr['current'] = date('Y-m-d H:i:s');
$row = mysqli_fetch_assoc($data);
$arr['data'] = $row;

if ($row['start'] != null && $row['end'] != null) {
  $stmt = mysqli_prepare($mysqli, 'UPDATE time SET current = ?');
  mysqli_stmt_bind_param($stmt, 's', $arr['current']);
  mysqli_stmt_execute($stmt);
  $arr['start'] = $row['start'];
  $arr['end'] = $row['end'];
} else {
  $start = date('Y-m-d H:i:s');
  $end = date('Y-m-d H:i:s', strtotime('+1 hour'));
  $stmt = mysqli_prepare($mysqli, 'UPDATE time SET start = ?, end = ?, current = ?');
  mysqli_stmt_bind_param($stmt, 'sss', $start, $end, $arr['current']);
  mysqli_stmt_execute($stmt);
  $arr['start'] = $start;
  $arr['end'] = $end;
}

print json_encode($arr, JSON_PRETTY_PRINT);
?>