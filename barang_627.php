<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gudang Barang</title>
        <link rel="stylesheet" href="style.css">
    <body>
        <div class="container">
        <h2>Gudang Barang</h2>
        <form action="template_robi.php" method="POST">
            ID Barang : <input type="text" name="idBarang_627"><br>
            Nama Barang : <input type="text" name="namaBarang_627"><br>
            Deskripsi : <input type="text" name="deskripsiBarang_627"><br>
            Kategori : <input type="text" name="kategoriBarang_627"><br>
            Stock : <input type="text" name="stockBarang_627"><br>
            <input type="submit" value="Submit">
        </form>
        </div>
    </body>
</html>

<?php
    class namaClass_3nim {
        protected $idBarang;
        protected $namaBarang;
        protected $deskripsiBarang;
        protected $kategoriBarang;
        protected $stockBarang;
        protected $array;
    }

    class turunanClass_3nim extends namaClass_3nim {
        public function __construct($var1_3nim,$var2_3nim,$var3_3nim,$var4_3nim,$var5_3nim) {
            $this->idBarang = $var1_3nim;
            $this->namaBarang = $var2_3nim;
            $this->deskripsiBarang = $var3_3nim;
            $this->kategoriBarang = $var4_3nim;
            $this->stockBarang = $var5_3nim;
            $this->array = [];
            array_push(
                $this->array, $this->idBarang,$this->namaBarang,$this->deskripsiBarang,$this->kategoriBarang,$this->stockBarang
            );
        }
        public function funtion_3nim() {
            foreach ($this->array as $x) {
                echo "$x<br>";
            }
        }
    }

    if ($_POST) {
        $idBarang = $_POST['idBarang_627'];
        $namaBarang = $_POST['namaBarang_627'];
        $deskripsiBarang = $_POST['deskripsiBarang_627'];
        $kategoriBarang = $_POST['kategoriBarang_627'];
        $stockBarang = $_POST['stockBarang_627'];
        
        $out_3nim = new turunanClass_3nim($idBarang,$namaBarang,$deskripsiBarang,$kategoriBarang, $stockBarang);
        $out_3nim -> funtion_3nim();
    }
?>