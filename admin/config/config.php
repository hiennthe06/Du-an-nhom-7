<?php
$mysqli = new mysqli("localhost","root","","khach_san_MT");

// Check connection
if ($mysqli->connect_errno) {
  echo "Kết nối mySQL lỗi" . $mysqli->connect_error;
  exit();
}
?>