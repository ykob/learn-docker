<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP with Docker</title>
</head>
<body>
  <h1>PHP with Docker</h1>
  <?php
    $mysqli = mysqli_connect('mysql', 'test', 'test', 'test');
    mysqli_select_db($mysqli, 'test');
    $data = mysqli_query($mysqli, 'SELECT name FROM person');

    while ($row = mysqli_fetch_assoc($data)) {
      print '<p>'. $row['name']. '</p>';
  }
  ?>
</body>
</html>
