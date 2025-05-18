<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mitra</title>
        <link rel="stylesheet" href="style.css">
    <body>
        <?php include 'navbar.php'; ?>
        <div class="container">
        <h2>Daftar Mitra</h2>
        <form action="" method="POST">
            <label for="ktp_627">KTP :</label>
            <input type="text" id="ktp_627" name="ktp_627" placeholder="Masukkan No. KTP" style="width: 100%;"><br>
            <label for="nama_627">Nama :</label>
            <input type="text" id="nama_627" name="nama_627" placeholder="Masukkan Nama" style="width: 100%;"><br>
            <label for="domisili_627">Domisili :</label>
            <input type="text" id="domisili_627" name="domisili_627" placeholder="Masukkan Kota Asal" style="width: 100%;"><br>
            <label for="skalaUsaha_627">Skala Usaha :</label>
            <select id="skalaUsaha_627" name="skalaUsaha_627" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 6px; margin-bottom: 20px; font-size: 14px; background: #fff;">
                <option class="default" value="" disabled selected>Pilih Skala Usaha</option>
                <option value="Mikro">Mikro</option>
                <option value="Kecil">Kecil</option>
                <option value="Menengah">Menengah</option>
                <option value="Besar">Besar</option>
            </select>
            <label for="noTelp_627">No. Telepon :</label>
            <input type="text" id="noTelp_627" name="noTelp_627" placeholder="Masukkan No. Telp" style="width: 100%;"><br>
            <input type="submit" value="Submit">
        </form>
        </div>
    </body>
</html>

<?php
    class inven_627 {
        protected $ktp;
        protected $nama;
        protected $domisili;
        protected $skalaUsaha;
        protected $notelp;
        protected $array;
    }

    class submitInven_627 extends inven_627 {
        public function __construct($ktp_627,$nama_627,$domisili_627,$skalaUsaha_627,$notelp_627) {
            $this->ktp = $ktp_627;
            $this->nama = $nama_627;
            $this->domisili = $domisili_627;
            $this->skalaUsaha = $skalaUsaha_627;
            $this->notelp = $notelp_627;
            
        }
        public function out_627() {
            $array = [
                'KTP' => $this->ktp,
                'Nama' => $this->nama,
                'Domisili' => $this->domisili,
                'Skala Usaha' => $this->skalaUsaha,
                'No Telepon' => $this->notelp
            ];
            echo "<h3>Data Mitra</h3>";
            foreach ($array as $key => $value) {
                echo "<p><strong>{$key}:</strong> {$value}</p>";
            }
        }
    }

    if ($_POST) {
        $ktp = $_POST['ktp_627'];
        $nama = $_POST['nama_627'];
        $domisili = $_POST['domisili_627'];
        $skalaUsaha = $_POST['skalaUsaha_627'];
        $notelp = $_POST['noTelp_627'];
        
        echo "<div class='hasil'>";
        $out_627 = new submitInven_627($ktp,$nama,$domisili,$skalaUsaha, $notelp);
        $out_627 -> out_627();
        echo "</div>";
    }
?>