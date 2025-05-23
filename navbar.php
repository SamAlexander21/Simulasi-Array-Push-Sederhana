<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <div class="nav-logo">
            <a href="index.php">Inventori Toko</a>
        </div>
        <div class="nav-links">            
            <?php
                if (isset($_SESSION['username'], $_SESSION['password'])) {
                    echo "Halo, " . $_SESSION['username'] . "!";
                    echo "<a href='logout.php'>Logout</a>";
                } else if ($_SERVER['PHP_SELF'] == '/Tgs-Kelompok-Pak-Robi/api/index.php') {
                    echo " ";
                } else {
                    echo "<a href='index.php'>Login</a>";
                }
            ?>
        </div>
    </div>
    <div class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">📞 Hubungi CS</a>
        <a href="javascript:void(0)" class="dropbtn">🛠️ Report Masalah!</a>
        </div>
</body>
</html>

<!-- <a href='register_pegawai_642.php'>Registrasi Pegawai</a>
<a href='barang_masuk_639.php'>Barang Masuk</a>
<a href='barang_keluar_651.php'>Barang Keluar</a>
<a href='2313010627.php'>Inventori</a>
<a href='2313010628.php'>Transaksi</a> -->