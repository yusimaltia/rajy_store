<div class="box-title">
    <p>Barang / <b>Manajemen Barang Jualan</b></p>
</div>
<div id="box">

<h1>Barang Jualan Ubah</h1>
<?php

  include 'lib/koneksi.php';

  $id = $_POST['id_barang'];
  $nama_barang = $_POST['nama_barang'];
  $harga = $_POST['harga'];
  $stok = $_POST['stok'];

  try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $pdo = $conn->prepare('UPDATE tbl_barang SET
                          nama_barang = :nama_barang,
                          harga = :harga,
                          stok = :stok
                          WHERE id_barang = :id_barang');

    $updatedata = array(':nama_barang' => $nama_barang, ':harga' => $harga, ':stok' => $stok, ':id_barang' => $id);
    $pdo->execute($updatedata);

    echo "<center><img src='img/icons/ceklist.png' width='60'></center>";
    echo "<center><b>Data barang berhasil diubah</b></center>";
    echo "</br>";
    echo "<meta http-equiv='refresh' content='1;url=?page=barang'>";

  } catch (PDOException $e) {
    print "Update data gagal: " . $e->getMessage() . "<br/>";
    die();
  }

 ?>
</div>
