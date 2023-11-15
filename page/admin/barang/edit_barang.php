<div class="box-title">
    <p>Barang / <b>Manajemen Barang Jualan</b></p>
</div>
<div id="box">

<?php
include "lib/koneksi.php";

$id = $_GET['id'];
$result = $conn->prepare("SELECT * FROM tbl_barang WHERE id_barang = :id");
$result->bindParam(':id', $id);
$result->execute();
$row = $result->fetch(PDO::FETCH_OBJ);
?>

<h1>Barang Jualan Ubah</h1>
<form name="edit" method="post" action="?page=edit_barangpro" enctype="multipart/form-data">

  <table class="article">
    <tr>
      <td>Gambar</td>
      <td>
        <input type="hidden" name="id_barang" value="<?php echo $row->id_barang ?>">
        <img src="img/jersey/<?php echo $row->nama_image ?>" width="100"><br><br>
        <input type="file" name="gambar">
      </td>
    </tr>
    <tr>
      <td>Deskripsi Jersey</td>
      <td>
        <input type="text" name="deskripsi" size="50" value="<?php echo $row->deskripsi ?>" required>
      </td>
    </tr>
    <tr>
      <td>Harga</td>
      <td>
        <input type="text" name="harga" size="50" value="<?php echo $row->harga ?>" required>
      </td>
    </tr>
    <tr>
      <td>Stok Jersey</td>
      <td>
        <input type="text" name="stok" size="50" value="<?php echo $row->stok ?>" required>
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        <input class="tombol-biru" type="submit" name="edit" value="Ubah & Simpan">
        <a class="tombol-merah" href="?page=barang">Tutup</a>
      </td>
    </tr>
  </table>
</form>
</div>
