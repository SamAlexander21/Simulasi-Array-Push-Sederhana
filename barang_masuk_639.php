<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Barang</title>
        <link rel="stylesheet" href="style.css">
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
        <h2>Input Barang Masuk</h2>
        <form action="" method="POST">
            <label for="namaBarang_639">Nama Barang : </label>
            <input type="text" id="namaBarang_639" name="namaBarang_639" style="width: 100%;"><br>
            <label for="supplier_639">Supplier  : </label>
            <input type="text" id="supplier_639" name="supplier_639" style="width: 100%;"><br>
            <label for="jumlah_639">Jumlah : </label>
            <input type="text" id="jumlah_639" name="jumlah_639" style="width: 100%;"><br>
            <label for="kondisiBarang_639">Kondisi Barang : </label>
            <input type="text" id="kondisiBarang_639" name="kondisiBarang_639" style="width: 100%;"><br>
            <label for="tanggalMasuk_639">Tanggal Masuk : </label>
            <input type="date" id="tanggalMasuk_639" name="tanggalMasuk_639" style="width: 100%;"><br>
            <input type="submit">
        </form>
        </div>
    </body>
</html>

<?php
    class Barang_masuk_639 {
        protected $namaBarang;
        protected $supplier;
        protected $tanggalMasuk;
        protected $jumlah;
        protected $kondisiBarang;
        protected $array;
    }

    class stock_639 extends Barang_masuk_639 {
        public function __construct($var1_639,$var2_639,$var3_639,$var4_639,$var5_639) {
            $this->namaBarang = $var1_639;
            $this->supplier = $var2_639;
            $this->tanggalMasuk = $var3_639;
            $this->jumlah = $var4_639;
            $this->kondisiBarang = $var5_639;
            $this->array = [];
            array_push(
                $this->array, $this->namaBarang,$this->supplier,$this->jumlah,$this->kondisiBarang,$this->tanggalMasuk
            );
        }
        public function funtion_639() {
            $array = [
                'Nama Barang' => $this->namaBarang,
                'Supplier' => $this->supplier,
                'Tanggal Masuk' => $this->tanggalMasuk,
                'Jumlah' => $this->jumlah,
                'Kondisi Barang' => $this->kondisiBarang
            ];
            echo "<h3>Data Barang Masuk</h3>";
            foreach ($array as $key => $value) {
                echo "<p><strong>{$key}:</strong> {$value}</p>";
            }
        }
    }

    if ($_POST) {
        $namaBarang = $_POST['namaBarang_639'];
        $supplier = $_POST['supplier_639'];
        $tanggalMasuk = $_POST['tanggalMasuk_639'];
        $jumlah = $_POST['jumlah_639'];
        $kondisiBarang = $_POST['kondisiBarang_639'];
        
        echo "<div class='hasil'>";
        $out_639 = new stock_639($namaBarang,$supplier,$tanggalMasuk,$jumlah, $kondisiBarang);
        $out_639 -> funtion_639();
        echo "</div>";
    }
?>