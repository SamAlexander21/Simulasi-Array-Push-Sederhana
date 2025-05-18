<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barang Keluar</title>
    <link rel="stylesheet" href="style.css">
</head>

<html>
    <body>
    <?php include 'navbar.php'; ?>
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
            $array = [
                'Id barang' => $this->idBarang,
                'Nama Barang' => $this->namaBarang,
                'Deskripsi Barang' => $this->deskripsiBarang,
                'Kategori' => $this->kategoriBarang,
                'Tanggal Keluar' => $this->tanggalKeluar,
                'Jumlah Keluar' => $this->barangKeluar
            ];
            echo "<h3>Data Barang Masuk</h3>";
            foreach ($array as $key => $value) {
                echo "<p><strong>{$key}:</strong> {$value}</p>";
            }
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