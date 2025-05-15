<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Barang - J&T Style</title>
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
<body>
    <div class="container">
        <h2>Input Data Barang</h2>
        <form action="" method="POST">
            <label for="idBarang">ID Barang</label>
            <input type="text" name="idBarang_3nim" id="idBarang">

            <label for="namaBarang">Nama Barang</label>
            <input type="text" name="namaBarang_3nim" id="namaBarang">

            <label for="deskripsi">Deskripsi</label>
            <input type="text" name="deskripsiBarang_3nim" id="deskripsi">

            <label for="kategori">Kategori</label>
            <input type="text" name="kategoriBarang_3nim" id="kategori">

            <label for="stock">Stock</label>
            <input type="text" name="stockBarang_3nim" id="stock">

            <input type="submit" value="Simpan Data">
        </form>
    </div>

<?php
    class Barang {
        protected $idBarang;
        protected $namaBarang;
        protected $deskripsiBarang;
        protected $kategoriBarang;
        protected $stockBarang;

        public function __construct($id, $nama, $deskripsi, $kategori, $stock) {
            $this->idBarang = $id;
            $this->namaBarang = $nama;
            $this->deskripsiBarang = $deskripsi;
            $this->kategoriBarang = $kategori;
            $this->stockBarang = $stock;
        }

        public function tampilkan() {
            echo "<div class='hasil'>";
            echo "<h3>Data Barang</h3>";
            echo "<p><strong>ID Barang:</strong> $this->idBarang</p>";
            echo "<p><strong>Nama Barang:</strong> $this->namaBarang</p>";
            echo "<p><strong>Deskripsi:</strong> $this->deskripsiBarang</p>";
            echo "<p><strong>Kategori:</strong> $this->kategoriBarang</p>";
            echo "<p><strong>Stock:</strong> $this->stockBarang</p>";
            echo "</div>";
        }
    }

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $barang = new Barang(
            $_POST['idBarang_3nim'],
            $_POST['namaBarang_3nim'],
            $_POST['deskripsiBarang_3nim'],
            $_POST['kategoriBarang_3nim'],
            $_POST['stockBarang_3nim']
        );
        $barang->tampilkan();
    }
?>
</body>
</html>
