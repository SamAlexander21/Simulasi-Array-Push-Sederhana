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
        <div class="container">        
        <h2>Barang Keluar</h2>
        <form action="" method="POST">
            ID Barang : <input type="text" name="id_651"><br>
            Nama Barang : <input type="text" name="nama_651"><br>
            Deskripsi : <input type="text" name="deskripsi_651"><br>
            Kategori : <input type="text" name="kategori_651"><br>
            Jumlah Keluar  : <input type="text" name="keluar_651"><br>
            Tanggal Keluar : <input type="date" name="tanggal_651"><br>
            <input type="submit" value="Submit">
        </form>
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
        protected $array;
    }

    class barang_keluar_651 extends barang_651 {
        public function __construct($id_651,$nama_651,$deskripsi_651,$kategori_651,$tanggal_651,$keluar_651) {
            $this->idBarang = $id_651;
            $this->namaBarang = $nama_651;
            $this->deskripsiBarang = $deskripsi_651;
            $this->kategoriBarang = $kategori_651;
            $this->tanggalKeluar = $tanggal_651;
            $this->barangKeluar = $keluar_651;
            $this->array = [];
            array_push(
                $this->array, $this->idBarang,$this->namaBarang,$this->deskripsiBarang,$this->kategoriBarang,$this->tanggalKeluar,$this->barangKeluar
            );
        }

        public function funtion_651() {
            echo "<p><strong>ID Barang:</strong> {$this->idBarang}</p>";
            echo "<p><strong>Nama Barang:</strong> {$this->namaBarang}</p>";
            echo "<p><strong>Deskripsi:</strong> {$this->deskripsiBarang}</p>";
            echo "<p><strong>Kategori:</strong> {$this->kategoriBarang}</p>";
            echo "<p><strong>Kategori:</strong> {$this->tanggalKeluar}</p>";
            echo "<p><strong>Keluar:</strong> {$this->barangKeluar}</p>";
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