<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>

<html>
    <body>
    <div class="navbar">
        <h1>Inventori Gudang</h1>
        <div class="nav-links">
            <a href="register_pegawai_642.php">Registrasi Pegawai</a>
            <a href="barang_masuk_639.php">Barang Masuk</a>
            <a href="barang_keluar_651.php">Barang Keluar</a>
            <a href="register_inventori_627.php">Inventori</a>
            <a href="transaksi_628.php">Transaksi</a>
        </div>
    </div>
        <div class="container">        
        <h2>Barang Keluar</h2>
        <form action="" method="POST">
            <label for="id_651">ID Barang : </label>
            <input type="text" id="id_651" name="id_651"><br>
            <label for="nama_651">Nama Barang : </label>
            <input type="text" id="nama_651" name="nama_651"><br>
            <label for="deskripsi_651">Deskripsi : </label>
            <input type="text" id="deskripsi_651" name="deskripsi_651"><br>
            <label for="kategori_651">Kategori : </label>
            <input type="text" id="kategori_651" name="kategori_651"><br>
            <label for="keluar_651">Jumlah Keluar  : </label>
            <input type="text" id="keluar_651" name="keluar_651"><br>
            <label for="tanggal_651">Tanggal Keluar : </label>
            <input type="date" id="tanggal_651" name="tanggal_651"><br>
            <input type="submit" value="Submit">
        </form>
    </div>
    </body>
</html>

<?php
    class barang_651 {
        protected $idBarang;
        protected $namaBarang;
        protected $deskripsiBarang;
        protected $kategoriBarang;
        protected $barangKeluar;
        protected $tanggalKeluar;
        protected $array_barang_keluar;
    }

    class barang_keluar_651 extends barang_651 {
        public function __construct($id_651,$nama_651,$deskripsi_651,$kategori_651,$tanggal_651,$keluar_651) {
            $this->idBarang = $id_651;
            $this->namaBarang = $nama_651;
            $this->deskripsiBarang = $deskripsi_651;
            $this->kategoriBarang = $kategori_651;
            $this->tanggalKeluar = $tanggal_651;
            $this->barangKeluar = $keluar_651;
            $this->array_barang_keluar = [];
            array_push(
                $this->array_barang_keluar, $this->idBarang,$this->namaBarang,$this->deskripsiBarang,$this->kategoriBarang,$this->barangKeluar,$this->tanggalKeluar
            );
        }

        public function funtion_651() {
            echo "<p><strong>ID Barang:</strong> {$this->idBarang}</p>";
            echo "<p><strong>Nama Barang:</strong> {$this->namaBarang}</p>";
            echo "<p><strong>Deskripsi:</strong> {$this->deskripsiBarang}</p>";
            echo "<p><strong>Kategori:</strong> {$this->kategoriBarang}</p>";
            echo "<p><strong>Keluar:</strong> {$this->barangKeluar}</p>";
            echo "<p><strong>Kategori:</strong> {$this->tanggalKeluar}</p>";
        }
    }

    if ($_POST) {
        $idBarang = $_POST['id_651'];
        $namaBarang = $_POST['nama_651'];
        $deskripsiBarang = $_POST['deskripsi_651'];
        $kategoriBarang = $_POST['kategori_651'];
        $tanggalKeluar = $_POST['tanggal_651'];
        $barangKeluar = $_POST['keluar_651'];
        
        echo "<div class='hasil'>";
        $out_651 = new barang_keluar_651($idBarang,$namaBarang,$deskripsiBarang,$kategoriBarang,$tanggalKeluar,$barangKeluar);
        $out_651 -> funtion_651();
        echo "</div>";
    }
?>