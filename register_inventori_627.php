<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gudang Barang</title>
        <link rel="stylesheet" href="style.css">
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
        <h2>Gudang Barang</h2>
        <form action="" method="POST">
            <label for="idBarang_627">ID Barang : </label>
            <input type="text" id="idBarang_627" name="idBarang_627"><br>
            <label for="namaBarang_627">Nama Barang : </label>
            <input type="text" id="namaBarang_627" name="namaBarang_627"><br>
            <label for="deskripsiBarang_627">Deskripsi : </label>
            <input type="text" id="deskripsiBarang_627" name="deskripsiBarang_627"><br>
            <label for="kategoriBarang_627">Kategori : </label>
            <input type="text" id="kategoriBarang_627" name="kategoriBarang_627"><br>
            <label for="stockBarang_627">Stock : </label>
            <input type="text" id="stockBarang_627" name="stockBarang_627"><br>
            <input type="submit" value="Submit">
        </form>
        </div>
    </body>
</html>

<?php
    class inven_627 {
        protected $idBarang;
        protected $namaBarang;
        protected $deskripsiBarang;
        protected $kategoriBarang;
        protected $stockBarang;
        protected $array;
    }

    class submitInven_627 extends inven_627 {
        public function __construct($var1_627,$var2_627,$var3_627,$var4_627,$var5_627) {
            $this->idBarang = $var1_627;
            $this->namaBarang = $var2_627;
            $this->deskripsiBarang = $var3_627;
            $this->kategoriBarang = $var4_627;
            $this->stockBarang = $var5_627;
            $this->array = [];
            array_push(
                $this->array, $this->idBarang,$this->namaBarang,$this->deskripsiBarang,$this->kategoriBarang,$this->stockBarang
            );
        }
        public function funtion_627() {
            echo "<p><strong>ID Barang:</strong> {$this->idBarang}</p>";
            echo "<p><strong>Nama Barang:</strong> {$this->namaBarang}</p>";
            echo "<p><strong>Deskripsi:</strong> {$this->deskripsiBarang}</p>";
            echo "<p><strong>Kategori:</strong> {$this->kategoriBarang}</p>";
            echo "<p><strong>Stock:</strong> {$this->stockBarang}</p>";
        }
    }

    if ($_POST) {
        $idBarang = $_POST['idBarang_627'];
        $namaBarang = $_POST['namaBarang_627'];
        $deskripsiBarang = $_POST['deskripsiBarang_627'];
        $kategoriBarang = $_POST['kategoriBarang_627'];
        $stockBarang = $_POST['stockBarang_627'];
        
        echo "<div class='hasil'>";
        $out_627 = new submitInven_627($idBarang,$namaBarang,$deskripsiBarang,$kategoriBarang, $stockBarang);
        $out_627 -> funtion_627();
        echo "</div>";
    }
?>