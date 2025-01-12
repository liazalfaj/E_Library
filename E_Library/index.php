<?php session_start(); $_SESSION['admin'] = false; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Login Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form method="post" action="#">
        <div class="container">
            <div class="title">Virtual Library</div>
            <div class="input-group">
                <label for="username">User:</label>
                <input type="text" name="user" placeholder="Enter your username">
            </div>
            <div class="input-group">
                <label for="password">Pass:</label>
                <input type="password" name="pass" placeholder="Enter your password">
            </div>
            <input type="submit" value="Login" class="login-btn" name="login"></input>
            <div class="input-group">
                Don't have an account?
                <a href="register.php">Register now</a>
            </div>
        </form>
        <?php
        if (isset($_POST['login'])) {
            include ('models/config.php');
            global $conn;
            $isSucceed = mysqli_affected_rows($conn);

            $u = $_POST['user'];
            $plain = $_POST['pass'];
            
            $query = "SELECT * FROM t_user WHERE username='$u'";
            $result = mysqli_query($conn, $query);
            $data = mysqli_fetch_assoc($result);
            
            $hash = $data['password'];
            
            if (password_verify($plain, $hash)) {
                if ($u == 'Root'){
                    $_SESSION['admin'] = true; // Set the admin session variable
                    echo "
                    <script>
                        alert('Admin Login Sukses');
                        document.location.href = 'admin.php';
                    </script>";  
                }else{
                    $_SESSION['admin'] = false;
                echo "
                <script>
                    alert('Login Sukses');
                    document.location.href = 'home.php';
                </script>";
                }
            } else {
                echo "
                <script>
                alert('Login Gagal, Username atau Pasword salah !');
                document.location.href = 'index.php';
                </script>";
            }
        }
        ?>
</body>
</html>

