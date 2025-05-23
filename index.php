<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php
session_start();
    if (isset($_SESSION['username'])) {
        header('Location: userDash.php');
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = array('2313010627', '2313010628', '2313010639', '2313010642', '2313010651');
        $password = array('2313010627', '2313010628', '2313010639', '2313010642', '2313010651');

        if (in_array($_POST['username'], $username) && in_array($_POST['password'], $password)) {
            if ($_POST['username'] != $_POST['password']) {
                echo "";
            } else {
                switch ($_POST['username']) {
                    case '2313010627':
                        $_SESSION ['username'] = $_POST['username'];
                        $_SESSION ['password'] = password_hash($_POST['password'], CRYPT_SHA256);
                        header('Location: 2313010627.php');
                        break;
                    case '2313010628':
                        $_SESSION ['username'] = $_POST['username'];
                        $_SESSION ['password'] = password_hash($_POST['password'], CRYPT_SHA256);
                        header('Location: 2313010628.php');
                        break;
                    case '2313010639':
                        $_SESSION ['username'] = $_POST['username'];
                        $_SESSION ['password'] = password_hash($_POST['password'], CRYPT_SHA256);
                        header('Location: 2313010639.php');
                        break;
                    case '2313010642':
                        $_SESSION ['username'] = $_POST['username'];
                        $_SESSION ['password'] = password_hash($_POST['password'], CRYPT_SHA256);
                        header('Location: 2313010642.php');
                    case '2313010651':
                        $_SESSION ['username'] = $_POST['username'];
                        $_SESSION ['password'] = password_hash($_POST['password'], CRYPT_SHA256);
                        header('Location: 2313010651.php');
                }
            }
        } else {
            class err {
                public function errorLogin() {
                    echo "<h3 style='text-align:center;'>Username atau Password Salah!</h3>";
                }
            }
        }
    }
?>
<?php include 'navbar.php'; ?>
    <div class="container">
        <?php
            if ($_POST && (!in_array($_POST['username'], $username) || !in_array($_POST['password'], $password))) {
                $err = new err();
                $err->errorLogin();
            }
        ?>
        <form action="" method="post">
        <label for="username">Username :</label>
        <input type="text" name="username" id="username" required>
        <label for="password">Password :</label>
        <input type="password" name="password" id="password" required>
        <input type="submit" value="Login">
    </div>
</form>
</body>
</html>