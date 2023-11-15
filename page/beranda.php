<div class="box-title">
    <p>Beranda / <b>Produk Jualan</b></p>
</div>
<div id="box">
    <?php
    // Periksa apakah pengguna telah login sebelum menampilkan tombol logout
    if (isset($_SESSION['username'])) {
        echo '<div class="logout-button">
            <a class="button" href="page/logout.php">Logout</a>
          </div>';
    }

    if (isset($_SESSION['username']) && $_SESSION['username'] != "") {
        echo '
        <div class="pesan">
            <p>Kamu cari jersey tim favorit mu? Belanja di Rajy Store aja jadi lebih mudah!!!
            </p>
        </div>';
    }
    ?>

    <table>
        <tr>
            <?php
            include 'lib/koneksi.php';
            $no = 1;
            $query = $conn->prepare("SELECT * FROM tbl_barang");
            $query->execute();

            $data = $query->fetchAll();

            foreach ($data as $value) {
                echo '
                <td class="list">
                    <img src="img/jersey/' . $value['nama_image'] . '" width="100">
                    <br>' . $value['deskripsi'] . '
                    <br><b>Rp.' . $value['harga'] . '</b>
                    <br>';

                $id = $value['id_barang'];
                $query = $conn->prepare("SELECT SUM(qty) AS jumlah FROM tbl_pesanan WHERE id_barang=:id");
                $query->bindparam(':id', $id);
                $query->execute();
                $data = $query->fetch(PDO::FETCH_OBJ);
                $hasil = $data->jumlah;

                $stok = $value['stok'];
                $sisa = ($stok - $hasil);

                echo '<button type="button">Stok: ';
                if ($sisa > 0) {
                    echo $sisa;
                } else {
                    echo "Habis";
                }
                echo '</button>';

                if ($sisa > 0 && isset($_SESSION['username']) && $_SESSION['username'] != "") {
                    echo '<a class="link" href="?page=belanja_detail&id=' . $value['id_barang'] . '&st=' . $sisa . '">Beli</a>';
                }

                echo '</td>';

                if ($no % 4 == 0) {
                    echo '</tr><tr>';
                }
                $no++;
            }
            ?>
        </tr>
    </table>
</div>