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
                <!-- <input type="text" name="metodeBayar" id="metode" > -->
                
                <select name="metodeBayar_628" id="metode_628" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; margin-bottom: 20px; font-size: 14px; background: #fff;">
                <option value="" disabled selected>Pilih Pembayaran</option>    
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
            $array = [
                'Nama Pelanggan' => $this->namaPelanggan,
                'Tanggal' => $this->tanggal,
                'Barang' => $this->barang,
                'Total Bayar' => $this->totalBayar,
                'Metode Pembayaran' => $this->metodeBayar
            ];
        
            echo '<h3>Data Transaksi</h3>';
            foreach ($array as $key => $value) {
                echo '<p><strong>' . $key . ':</strong> ' . $value . '</p>';
            }
        }
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $namaPelanggan = htmlspecialchars($_POST['namaPelanggan_628']);
    $tanggal = htmlspecialchars($_POST['tanggal_628']);
    $barang = htmlspecialchars($_POST['barang_628']);
    $totalBayar = htmlspecialchars($_POST['totalBayar_628']);
    $metodeBayar = htmlspecialchars($_POST['metodeBayar_628']);
    $arrayMenampilkan = [];
    
    echo "<div class='hasil'>";
    $detailTransaksi = new daftarTransaksi_628($namaPelanggan, $tanggal, $barang, $totalBayar, $metodeBayar);
    $detailTransaksi->output_628();
    echo "</div>";
    
}
    ?>