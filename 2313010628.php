<?php 
session_start();
    if (!isset($_SESSION['username'], $_SESSION['password']) || ($_SESSION['username'] != '2313010628' && (password_verify('2313010628', $_SESSION['password']) == false))) {
        include 'navbar.php';
        echo "<div class='container'>";
        echo "<h1>Anda tidak memiliki akses ke halaman ini.</h1>";
        echo "</div>";
        session_unset();
        session_destroy();
        exit();
    } else {
    class transaksi_628 {
        protected $namaPelanggan, $tanggal, $barang, $totalBayar, $metodeBayar, $array;
    }

    class daftarTransaksi_628 extends transaksi_628 {
        public function __construct($namaPelanggan, $tanggal, $barang, $totalBayar, $metodeBayar) {
            $this->namaPelanggan = $namaPelanggan;
            $this->tanggal = $tanggal ;
            $this->barang = $barang;
            $this->totalBayar = $totalBayar ;
            $this->metodeBayar = $metodeBayar;
            
            
        }
        public function output_628() {
            $label = [
                'Nama Pelanggan',
                'Barang',
                'Total Bayar',
                'Metode Pembayaran',
                'Tanggal'
            ];
            $array = [];
            array_push(
                $array, $this->namaPelanggan, $this->barang, $this->totalBayar, $this->metodeBayar, $this->tanggal
            );
            echo "<h3>Data Mitra</h3>";
            foreach ($label as $index => $labelInput) {
                echo "<p><strong>{$labelInput}:</strong> {$array[$index]}</p>";
            }
        }
    }
}
?>

    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
            <h2>Register Transaksi</h2>
            <form action="" method="POST">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" name="namaPelanggan_628" id="nama_628" >
                
                <label for="barang">Barang</label>
                <input type="text" name="barang_628" id="barang_628" >
                
                <label for="bayar">Total Harga bayar</label>
                <input type="text" name="totalBayar_628" id="bayar_628" >
                
                <label for="metode">Metode Pembayaran</label>
                <select name="metodeBayar_628" id="metode_628" required>
                    <option value="" disabled selected>--Pilih Pembayaran--</option>    
                    <option value="Tunai">Tunai</option>
                    <option value="Non-Tunai">Non-Tunai</option>
                </select>

                <label for="tanggal">Tanggal</label>
                <input type="date" name="tanggal_628" id="tanggal_628" >

                <input type="submit" value="Submit Transaksi">
            </form>
        </div>
    </body>
    </html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaPelanggan = htmlspecialchars($_POST['namaPelanggan_628']);
    $tanggal = htmlspecialchars($_POST['tanggal_628']);
    $barang = htmlspecialchars($_POST['barang_628']);
    $totalBayar = htmlspecialchars($_POST['totalBayar_628']);
    $metodeBayar = htmlspecialchars($_POST['metodeBayar_628']);
    
    echo "<div class='hasil'>";
    $detailTransaksi = new daftarTransaksi_628($namaPelanggan, $tanggal, $barang, $totalBayar, $metodeBayar);
    $detailTransaksi->output_628();
    echo "</div>";
    
}
    ?>