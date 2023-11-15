<?php

try {
  $conn = new PDO("mysql:host=localhost;dbname=rajy_store;charset=utf8mb4", "root", "");
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
} catch (PDOException $e) {
  echo "Koneksi atau query bermasalah: " . $e->getMessage() . "<br>";
  die();
}

?>
