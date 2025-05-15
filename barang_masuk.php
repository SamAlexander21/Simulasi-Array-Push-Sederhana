<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Barang</title>
        <link rel="stylesheet" href="style.css">
    <body>
        <div class="container">
        <h2>Input Barang Masuk</h2>
        <form action="" method="POST">
            Nama Barang : <input type="text" name="namaBarang_3nim"><br>
            Supplier  : <input type="text" name="supplier_3nim"><br>
            Tanggal Masuk : <input type="text" name="tanggalMasuk_3nim"><br>
            Jumlah : <input type="text" name="jumlah_3nim"><br>
            Kondisi Barang : <input type="text" name="kondisiBarang_3nim"><br>
            <input type="submit">
        </form>
        </div>
    </body>
</html>

<?php
    class namaClass_3nim {
        protected $namaBarang;
        protected $supplier;
        protected $tanggalMasuk;
        protected $jumlah;
        protected $kondisiBarang;
        protected $array;
    }

    class turunanClass_3nim extends namaClass_3nim {
        public function __construct($var1_3nim,$var2_3nim,$var3_3nim,$var4_3nim,$var5_3nim) {
            $this->namaBarang = $var1_3nim;
            $this->supplier = $var2_3nim;
            $this->tanggalMasuk = $var3_3nim;
            $this->jumlah = $var4_3nim;
            $this->kondisiBarang = $var5_3nim;
            $this->array = [];
            array_push(
                $this->array, $this->namaBarang,$this->supplier,$this->tanggalMasuk,$this->jumlah,$this->kondisiBarang
            );
        }
        public function funtion_3nim() {
        echo "<div class='hasil'>";
        echo "<h3>Barang yang masuk</h3>";
        echo "<p><strong>Nama:</strong> $this->namaBarang</p>";
        echo "<p><strong>Supplier:</strong> $this->supplier</p>";
        echo "<p><strong>Tanggal Masuk:</strong> $this->tanggalMasuk</p>";
        echo "<p><strong>Jumlah:</strong> $this->jumlah</p>";
        echo "<p><strong>Kondisi:</strong> $this->kondisiBarang</p>";
        echo "</div>";
        }
            }

    if ($_POST) {
        $namaBarang = $_POST['namaBarang_3nim'];
        $supplier = $_POST['supplier_3nim'];
        $tanggalMasuk = $_POST['tanggalMasuk_3nim'];
        $jumlah = $_POST['jumlah_3nim'];
        $kondisiBarang = $_POST['kondisiBarang_3nim'];
        
        $out_3nim = new turunanClass_3nim($namaBarang,$supplier,$tanggalMasuk,$jumlah, $kondisiBarang);
        $out_3nim -> funtion_3nim();
    }
?>