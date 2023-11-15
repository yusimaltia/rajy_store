<!DOCTYPE html>
<html>

<head>
  <title>Login</title>
  <link rel="stylesheet" type="text/css" href="../css/loginstyle.css">
</head>

<body>
  <div class="login">
    <h2 class="login-header">LOGIN</h2>
    <form class="login-container" action="login.php" method="post">
      <?php
      include "../lib/koneksi.php";
      session_start();
      if (isset($_POST['submit'])) {
        $user = $_POST['username'];
        $pwd = $_POST['password'];
        $pdo = $conn->prepare("SELECT * FROM tbl_users WHERE username=:a AND password=:b");
        $pdo->execute(array(':a' => $user, ':b' => $pwd));
        $count = $pdo->rowCount();
        $row = $pdo->fetch(PDO::FETCH_OBJ);
        if ($count == 0) {
          echo "<center><a class='tombol-merah'>Login Gagal</a></center>";
        } else {
          $_SESSION['username'] = $user;
          $_SESSION['password'] = $pwd;
          $_SESSION['status'] = $row->title;
          echo "<center><a class='tombol-biru'>Login Berhasil</a></center>";
          echo "<meta http-equiv='refresh' content='1; url=../index.php'>";
        }
      }
      ?>
      <p>
        <input type="text" name="username" placeholder="Username" required>
      </p>
      <p>
        <input type="password" name="password" placeholder="Password" required>
      </p>
      <p>
        <input type="submit" name="submit" value="Masuk">
      </p>
      <p align="center"><a href="../index.php">Kembali</a></p>
      <p>Belum punya akun? <a href="daftar.php" class="tombol-biru">Yuk Daftar</a></p>
      <br>
      <center>
        <p>&copy; <?php echo date("Y"); ?> Toko Baju Rajy's Store. All rights reserved.</p>
      </center>
    </form>
  </div>
</body>

</html>
