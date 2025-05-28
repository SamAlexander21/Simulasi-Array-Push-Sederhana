<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <?php include('navbar.php');?>
    <div class="container">
        <h2>
            <?php 
                echo "User = ".$_SESSION['username']."<br>";
                echo "Password = ".$_SESSION['password']."<br>";
                echo "Foto Wajah = <img src='assets/".$_SESSION['username'].".png' alt='foto wajah'>";
            ?>
        </h2>
    </div>  
</body>
</html>