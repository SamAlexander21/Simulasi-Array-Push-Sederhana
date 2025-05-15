<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f8f8;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 500px;
            margin: 60px auto;
            background: #fff;
            padding: 30px 40px;
            border-radius: 12px;
            box-shadow: 0 8px 20px rgba(0,0,0,0.1);
            border-top: 4px solid #d60000;
        }

        h2 {
            text-align: center;
            color: #d60000;
            margin-bottom: 30px;
        }

        label {
            font-weight: 600;
            display: block;
            margin-bottom: 8px;
            color: #333;
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 6px;
            margin-bottom: 20px;
            font-size: 14px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #d60000;
            color: #fff;
            font-weight: bold;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s ease;
        }

        input[type="submit"]:hover {
            background-color: #b30000;
        }

        .hasil {
            max-width: 500px;
            margin: 30px auto;
            background: #fff;
            padding: 20px 30px;
            border-radius: 8px;
            border-left: 4px solid #d60000;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
        }

        .hasil p {
            margin: 8px 0;
            font-size: 15px;
        }
    </style>
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
            Tanggal Keluar : <input type="date" name="tanggal_651"><br>
            Jumlah Keluar  : <input type="text" name="keluar_651"><br>
            <input type="submit">
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