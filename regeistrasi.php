    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <div class="container">
            <h2>Register Transaksi</h2>
            <form action="" method="POST">
                <label for="nama">Nama Pelanggan</label>
                <input type="text" name="namaPelanggan" id="nama" required>
                
                <label for="tanggal">Tanggal</label>
                <input type="text" name="tanggal" id="tanggal" required>
                
                <label for="barang">Barang</label>
                <input type="text" name="barang" id="barang" required>
                
                <label for="bayar">Total Hrga bayar</label>
                <input type="text" name="totalBayar" id="bayar" required>
                
                <label for="metode">Metode Pembayaran</label>
                <input type="text" name="metodeBayar" id="metode" required>
                
                <input type="submit" value="Register">
            </form>
    </body>
    </html>
    <?php 
    class transaksi_628 {
        protected $namaPelanggan, $tanggal, $barang, $totalBayar, $metodeBayar;
    }

    class daftarTransaksi_628 extends transaksi_628 {
        public function __construct($namaPelanggan, $tanggal, $barang, $totalBayar, $metodeBayar) {
            $this->namaPelanggan = $namaPelanggan;
            $this->tanggal = $tanggal ;
            $this->barang = $barang;
            $this->totalBayar = $totalBayar ;
            $this->metodeBayar = $metodeBayar;
            $this->array = [];
            array_push(
                $this->array, $this->nama, $this->alamat, $this->no_telp, $this->username, $this->password
            );
        }
    }
    
    ?>