<?php
session_start();
    if (isset($_SESSION['username'])) {
        header('Location: userDash.php');
    }
    
    class login_masuk {
        protected $username;
        protected $password;
    }

    class proses_login_kelompok extends login_masuk {
        public function __construct($username, $password) {
            $this->username = $username;
            $this->password = $password;
        }
        public function cekLogin() {
            $username = array('2313010627', '2313010628', '2313010639', '2313010642', '2313010651');
            $password = array('2313010627', '2313010628', '2313010639', '2313010642', '2313010651');
            if ( in_array($this->username, $username) && in_array($this->password, $password)) {
                if (!isset($_SESSION['username']) && ($_POST['username'] == $_POST['password'])) {
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
            } else if ( !in_array($this->username, $username) || !in_array($this->password, $password)) {
                echo "<h3 style='text-align: center; color: red;'>Username atau Password Salah</h3>";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body></body>
<?php include 'navbar.php'; ?>
    <div class="container">
        <?php 
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $username = $_POST['username'];
                $password = $_POST['password'];
                $login = new proses_login_kelompok($username, $password);
                $login->cekLogin();
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