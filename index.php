<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">        
</head>
<body>
    <div class="container">        
    <h2>Register Pegawai</h2>
    <form action="" method="POST">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="alamat">Alamat:</label>
        <input type="text" id="alamat" name="alamat" required><br>

        <label for="no_telp">No Telepon:</label>
        <input type="text" id="no_telp" name="no_telp" required><br>

        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br>

        <input type="submit" value="Register">
</body>
</html>

<?php 
class pegawai {
    private  $nama, $alamat, $no_telp, $username, $password;
    public function __construct($nama, $alamat, $no_telp, $username, $password) {
        $this->nama = $nama;
        $this->alamat = $alamat;
        $this->no_telp = $no_telp;
        $this->username = $username;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    public function getNama() {
        return $this->nama;
    }
}

// Proses form
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama = htmlspecialchars($_POST['nama']);
    $alamat = htmlspecialchars($_POST['alamat']);
    $no_telp = htmlspecialchars($_POST['no_telp']);
    $username = htmlspecialchars($_POST['username']);
    $password = htmlspecialchars($_POST['password']);

    // Membuat objek pegawai
    $pegawaiBaru = new Pegawai($nama, $alamat, $no_telp, $username, $password);

    // Menampilkan pesan selamat datang
    echo "<h2>Selamat Datang, " . $pegawaiBaru->getNama() . "!</h2>";
}


?>