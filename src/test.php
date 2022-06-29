<?php
echo "GET";
echo "<pre>";
  print_r($_GET);
echo "</pre>";
if($_SERVER['REQUEST_METHOD']== "POST"){

echo "POST";
echo "<pre>";
  print_r($_POST);
echo "</pre>";
}
echo "FILES";
echo "<pre>";
  print_r($_FILES);
echo "</pre>";

echo "REQUEST";
echo "<pre>";
  print_r($_REQUEST);
echo "</pre>";

echo "SERVER";
echo "<pre>";
  print_r($_SERVER);
echo "</pre>";
