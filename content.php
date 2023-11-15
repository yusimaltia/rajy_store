<?php
if (isset($_GET['page'])) {
  $page = $_GET['page'];
} else {
  $page = "beranda";
}
if ($page == "beranda") {
  include("page/beranda.php");
} elseif ($page == "tentang") {
  include("page/tentang.php");
} elseif ($page == "login") {
  include("page/login.php");
}
//---------------------------- PENGGUNA ---------------------------
elseif ($page == "belanja") {
  include("page/user/belanja.php");
} elseif ($page == "belanja_detail") {
  include("page/user/belanja_detail.php");
} elseif ($page == "belanja_detailpro") {
  include("page/user/belanja_detailpro.php");
} elseif ($page == "keranjang_hapus") {
  include("page/user/keranjang_hapus.php");
} elseif ($page == "pesanan") {
  include("page/user/pesanan.php");
} elseif ($page == "profil") {
  include("page/user/profil/profil.php");
} elseif ($page == "profil_ubah") {
  include("page/user/profil/profil_ubah.php");
} elseif ($page == "profil_ubahpro") {
  include("page/user/profil/profil_ubahpro.php");
}
//---------------------------- ADMIN ---------------------------
elseif ($page == "barang") {
  include("page/admin/barang/barang.php");
} elseif ($page == "tambah_barang") {
  include("page/admin/barang/tambah_barang.php");
} elseif ($page == "tambah_barangpro") {
  include("page/admin/barang/tambah_barangpro.php");
} elseif ($page == "edit_barang") {
  include("page/admin/barang/edit_barang.php");
} elseif ($page == "edit_barangpro") {
  include("page/admin/barang/edit_barangpro.php");
} elseif ($page == "hapus_barang") {
  include("page/admin/barang/hapus_barang.php");
} elseif ($page == "transaksi") {
  include("page/admin/transaksi/transaksi.php");
} elseif ($page == "transaksi_detail") {
  include("page/admin/transaksi/transaksi_detail.php");
} elseif ($page == "pesan") {
  include("page/admin/pesan/pesan.php");
} elseif ($page == "pengguna") {
  include("page/admin/pengguna/pengguna.php");
} elseif ($page == "pengguna_edit") {
  include("page/admin/pengguna/pengguna_edit.php");
} elseif ($page == "pengguna_editpro") {
  include("page/admin/pengguna/pengguna_editpro.php");
} elseif ($page == "pengguna_hapus") {
  include("page/admin/pengguna/pengguna_hapus.php");
} elseif ($page == "profilad") {
  include("page/admin/profil/profil.php");
} elseif ($page == "profilad_ubah") {
  include("page/admin/profil/profil_ubah.php");
} elseif ($page == "profilad_ubahpro") {
  include("page/admin/profil/profil_ubahpro.php");
} else {
  echo "Konten tidak ada";
}
?>
