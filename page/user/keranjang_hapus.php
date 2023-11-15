<?php
include('lib/koneksi.php');

$id = $_GET['id'];
try {
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $delete = $conn->prepare("DELETE FROM tbl_keranjang WHERE id = :id");
  $delete->bindParam(':id', $id);
  $delete->execute();
  echo "<script>alert('Barang dalam keranjang berhasil dihapus');window.location='?page=beranda'</script>";
} catch (PDOException $e) {
  print "Hapus barang gagal: " . $e->getMessage() . "<br/>";
  die();
}
?>
