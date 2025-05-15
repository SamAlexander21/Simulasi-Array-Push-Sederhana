<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">        
</head>
<body>
    <div class="container">        
    <h2>Register Pegawai</h2>
    <form action="registrasi_pegawai.php" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama" id="nama" required>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat" id="alamat" required>
        <label for="no_telp">No. Telepon</label>
        <input type="text" name="no_telp" id="no_telp" required>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Register">
</body>
</html>

<?php 
class pegawai_642 {
    protected  $nama, $alamat, $no_telp, $username, $password, $array;
}

class daftarPegawai_642 extends pegawai_642 {
    public function __construct($nama_642, $alamat_642, $no_telp_642, $username_642, $password_642) {
        $this->nama = $nama_642;
        $this->alamat = $alamat_642;
        $this->no_telp = $no_telp_642;
        $this->username = $username_642;
        $this->password = password_hash($password_642, PASSWORD_DEFAULT);
        $this->array = [];
        array_push(
            $this->array, $this->nama, $this->alamat, $this->no_telp, $this->username, $this->password
        );
    }

    public function output_642() {
        echo "<div class='hasil'>";
        echo "<h3>Selamat Datang!</h3>";
        echo "<p><strong>Nama:</strong> $this->nama</p>";
        echo "<p><strong>Alamat:</strong> $this->alamat</p>";
        echo "<p><strong>No. Telepon:</strong> $this->no_telp</p>";
        echo "<p><strong>Username:</strong> $this->username</p>";
        echo "<p><strong>Password:</strong> $this->password</p>";
        echo "</div>";
        }
    }

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    $pegawaiBaru642 = new daftarPegawai_642($nama, $alamat, $no_telp, $username, $password);

    $pegawaiBaru642->output_642();
}


?>