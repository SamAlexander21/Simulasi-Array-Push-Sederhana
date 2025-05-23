<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Input Barang</title>
        <link rel="stylesheet" href="styles/style.css">
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
        <h2>Input Barang Masuk</h2>
        <form action="barang_masuk_639" method="POST">
            <label for="namaBarang_639">Nama Barang : </label>
            <input type="text" id="namaBarang_639" name="namaBarang_639" placeholder="Masukkan Nama Barang" style="width: 100%;" placeholder="Masukkan Nama Barang"><br>
            <label for="supplier_639">Supplier  : </label>
            <input type="text" id="supplier_639" name="supplier_639" style="width: 100%;" placeholder="Masukkan Nama Supplier"><br>
            <label for="jumlah_639">Jumlah : </label>
            <input type="number" id="jumlah_639" name="jumlah_639" style="width: 100%;" placeholder="Masukkan Jumlah"><br>
            <label for="kondisiBarang_639">Kondisi Barang : </label>
            <select id="kondisiBarang_639" name="kondisiBarang_639" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; margin-bottom: 20px; font-size: 14px; background: #fff;">
                <option value="" disabled selected>Pilih Kondisi Barang</option>
                <option value="Baik">Baik</option>
                <option value="Rusak Ringan">Rusak Ringan</option>
                <option value="Rusak Berat">Rusak Berat</option>
                </select>
            <br>
            <label for="tanggalMasuk_639">Tanggal Masuk : </label>
            <input type="date" id="tanggalMasuk_639" name="tanggalMasuk_639" style="width: 100%;" placeholder="Pilih Tanggal Masuk"><br>
            <input type="submit">
        </form>
        </div>
        <?php include 'footer.php'; ?>
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
            $label = [
                'Nama Barang',
                'Supplier',
                'Jumlah',
                'Kondisi Barang',
                'Tanggal Masuk'
            ];
            $array = [];
            array_push(
                $array, $this->namaBarang,$this->supplier,$this->jumlah,$this->kondisiBarang,$this->tanggalMasuk
            );
            echo "<h3>Data Mitra</h3>";
            foreach ($label as $index => $labelInput) {
                echo "<p><strong>{$labelInput}:</strong> {$array[$index]}</p>";
            }
        }
    }

    if ($_POST) {
        $namaBarang = htmlspecialchars($_POST['namaBarang_639']);
        $supplier = htmlspecialchars($_POST['supplier_639']);
        $tanggalMasuk = htmlspecialchars($_POST['tanggalMasuk_639']);
        $jumlah =  htmlspecialchars($_POST['jumlah_639']);
        $kondisiBarang = htmlspecialchars($_POST['kondisiBarang_639']);
        
        echo "<div class='hasil'>";
        $out_639 = new stock_639($namaBarang,$supplier,$tanggalMasuk,$jumlah, $kondisiBarang);
        $out_639 -> funtion_639();
        echo "</div>";
    }
?>