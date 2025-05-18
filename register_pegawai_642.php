<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include 'navbar.php'; ?>
    <div class="container">        
    <h2>Register Pegawai</h2>
    <form action="" method="POST">
        <label for="nama">Nama</label>
        <input type="text" name="nama_642" id="nama_642" required>
        <label for="alamat">Alamat</label>
        <input type="text" name="alamat_642" id="alamat_642" required>
        <label for="no_telp">No. Telepon</label>
        <input type="text" name="no_telp_642" id="no_telp_642" required>
        <label for="username">Username</label>
        <input type="text" name="username_642" id="username_642" required>
        <label for="password">Password</label>
        <input type="password" name="password_642" id="password_642" required>
        <input type="submit" value="Register">
    </form>
    </div>
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

    }

    public function output_642() {
        $array = [
            'Nama' => $this->nama,
            'Alamat' => $this->alamat,
            'No. Telepon' => $this->no_telp,
            'Username' => $this->username,
            'Password' => $this->password
        ];

        echo "<h3>Data Pegawai</h3>";
        foreach ($array as $key => $value) {
            echo "<p><strong>$key:</strong> $value</p>";
        }
    }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama_642']);
    $alamat = htmlspecialchars($_POST['alamat_642']);
    $no_telp = htmlspecialchars($_POST['no_telp_642']);
    $username = htmlspecialchars($_POST['username_642']);
    $password = htmlspecialchars($_POST['password_642']);

    echo "<div class='hasil'>";
    $pegawaiBaru642 = new daftarPegawai_642($nama, $alamat, $no_telp, $username, $password);
    $pegawaiBaru642->output_642();
    echo "</div>";
}


?>