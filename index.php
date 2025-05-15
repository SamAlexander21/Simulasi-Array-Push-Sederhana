<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 60px auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-top: 4px solid #d60000;
        }

        h2 {
            text-align: center;
            color: #d60000;
            margin-bottom: 30px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #d60000;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #b30000;
        }

        .hasil {
            max-width: 500px;
            margin: 30px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            border-left: 4px solid #d60000;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .hasil p {
            margin: 8px 0;
            font-size: 15px;
        }
    </style>
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
    private , $nama, $alamat, $no_telp, $username, $password;
    public function __construct(, $nama, $alamat, $no_telp, $username, $password) {
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
    $pegawaiBaru = new Pegawai($idPegawai, $nama, $alamat, $no_telp, $username, $password);

    // Menampilkan pesan selamat datang
    echo "<h2>Selamat Datang, " . $pegawaiBaru->getNama() . "!</h2>";
}


?>