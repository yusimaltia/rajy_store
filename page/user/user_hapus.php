<?php
include('lib/koneksi.php');

$id = $_GET['id'];
try {
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $hapus = $conn->prepare("DELETE FROM tbl_users WHERE id_user = :id");
    $deleteuser = array(':id' => $id);
    $hapus->execute($deleteuser);
    echo "<script>alert('User berhasil dihapus');window.location='?page=user'</script>";
} catch (PDOexception $e) {
    print "Hapus user gagal: " . $e->getMessage() . "<br/>";
    die();
}
?>
