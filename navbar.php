<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="navbar">
        <?php
            if (isset($_SESSION['username'], $_SESSION['password'])) {
                echo "<div class='user'>";
                echo "<img class='pp' src='assets/".$_SESSION['username'].".png' alt='foto wajah'>";
                echo "<a href='userDash.php'>" . $_SESSION['username'] . "</a>"; 
                echo "</div>";
            } else if ($_SERVER['PHP_SELF']) {
                echo " ";
            }
        ?>
        <div class="nav-logo">
            <a href="index.php">Inventori Toko</a>
        </div>
        <?php
            if (isset($_SESSION['username'], $_SESSION['password'])) {
                echo "<div class='nav-links'>";
                echo "<a href='".$_SESSION['username'].".php'>"."Dashboard</a>";
                echo "<a href='logout.php'>Logout</a>";
                echo "</div>";
            } else if (basename($_SERVER['PHP_SELF']) != 'index.php') {
                echo "<a href='index.php'>Login</a>";
            } else if ($_SERVER['PHP_SELF']) {
                echo " ";
            }

            ?>
    </div>
    <div class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">📞 Hubungi CS</a>
        <a href="javascript:void(0)" class="dropbtn">🛠️ Report Masalah!</a>
    </div>
</body>
</html>
