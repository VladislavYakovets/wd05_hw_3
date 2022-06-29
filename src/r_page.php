<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <form action="test.php" method="post" enctype="multipart/form-data">
    <input type="text" name="title">
    <br>
    <br>
    <textarea name="content"></textarea>
    <br>
    <br>
    <input type="file" name="img">
    <br>
    <br>
    <button type="submit">Send</button>
  </form>
</body>
</html>