<div class="box-title">
    <p>Beranda / <b>Produk Jualan</b></p>
</div>
<div id="box">
<h1>Pembayaran</h1>
<?php
    include 'lib/koneksi.php';

    $total = $_GET['jum'];
    $id = $_GET['id'];
    try {
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $insert = $conn->prepare("INSERT INTO tbl_pesanan (id_user,id_barang,ukuran,qty,kurir,date_in,total) SELECT id_user,id_barang,ukuran,qty,kurir,date_in,total FROM tbl_keranjang WHERE id_user=:id");
      $insert->bindParam(':id', $id);
      $insert->execute();

      $delete = $conn->prepare("DELETE FROM tbl_keranjang WHERE id_user=:id");
      $delete->bindParam(':id', $id);
      $delete->execute();
      ?>
  <table class="article">
    <tr>
      <td>Status</td>
      <td><a class="tombol-biru">Pesanan Berhasil</a></td>
    </tr>
    <tr>
      <td>Jumlah Pembayaran</td>
      <td><b><?php echo "Rp. " . $total; ?></b></td>
    </tr>
    <tr>
      <td>Deskripsi</td>
      <td>
        Lakukan pembayaran dengan mentransfer nominal <b>Jumlah Pembayaran</b> pada rekening :<br>
        BANK CIMB NIAGA<br>
        Rekening : 705698305100<br>
        A.N : Yusi Maltia<br>
        Referensi : bayar/id user/jersey <b>contoh : bayar/<?php echo $id . "/jersey"; ?></b>
      </td>
    </tr>
    <tr>
      <td>Lanjutan</td>
      <td>
        Jika sudah melakukan pembayaran, segera <b>Konfirmasi Pembayaran</b> dengan mengirimkan bukti pembayaran di : <br>
        <b>Whatsapp</b> : 089668654632 <br>
        <b>Instagram</b> : @yusimaltia
      </td>
    </tr>
    <tr>
      <td></td>
      <td>
        Terima kasih telah membeli jersey di website kami <br>
        Anda dapat melihat <a class="link" href="?page=belanja">Detail Pesanan</a>
      </td>
    </tr>
  </table>

   <?php
    } catch (PDOException $e) {
      print "Added data failed: " . $e->getMessage() . "<br/>";
       die();
    }
 ?>
</div>
