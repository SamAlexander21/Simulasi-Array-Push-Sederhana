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
            } else if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                echo " ";
            } else if ($_SERVER['PHP_SELF']) {
                echo "<div class='user'>";
                echo "<img class='pp' src='' alt='foto wajah'>";
                echo "<a href='#'>Error</a>";
                echo "</div>";
            } 
        ?>
        <div class="nav-logo">
            <a href="index.php">Inventori Toko</a>
        </div>
        <?php
            if (isset($_SESSION['username'], $_SESSION['password']) && basename($_SERVER['PHP_SELF']) == $_SESSION['username'].'.php') {
                echo "<div class='nav-links'>";
                echo "<a href='logout.php'>Logout</a>";
                echo "</div>";
            } else if (basename($_SERVER['PHP_SELF']) == 'userDash.php') {
                echo "<div class='nav-links'>";
                echo "<a href='".$_SESSION['username'].".php'>"."Form</a>";
                echo "<a href='logout.php'>Logout</a>";
                echo "</div>";
            } else if (basename($_SERVER['PHP_SELF']) == 'index.php') {
                echo " ";
            } else if ($_SERVER['PHP_SELF']) {
                echo "<div class='nav-links'>";
                echo "<a href='index.php'>Login</a>";
                echo "</div>";
            }

            ?>
    </div>
    <div class="dropdown">
        <a href="javascript:void(0)" class="dropbtn">📞 Hubungi CS</a>
        <a href="javascript:void(0)" class="dropbtn">🛠️ Report Masalah!</a>
    </div>
</body>
</html>
