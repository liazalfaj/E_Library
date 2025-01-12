<!DOCTYPE html>
<html>
<head>
    <title>Register Page</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <form method="post" action="#">
        <div class="container">
            <div class="title">Register for Virtual Library</div>
            <div class="input-group">
                <label for="username">User:</label>
                <input type="text" name="user" placeholder="Enter your username">
            </div>
            <div class="input-group">
                <label for="password">Pass:</label>
                <input type="password" name="pass" placeholder="Enter your password">
            </div>
            <input type="submit" value="Register" class="login-btn" name="register"></input>
            </div>
        </form>
        <?php
        if(isset($_POST['register'])){
            include ('models/config.php');
            global $conn;
            
            $u = $_POST['user'];
            $plain = $_POST['pass'];
            $hash = password_hash($plain, PASSWORD_DEFAULT);
            $check = "SELECT username FROM t_user WHERE username='$u'";
            $ckres = mysqli_query($conn, $check);
            $found = mysqli_affected_rows($conn);

            if (!($found > 0)){
                $query = "INSERT INTO t_user VALUES('', '$u', '$hash')";
                $result = mysqli_query($conn, $query);
                $isSucceed = mysqli_affected_rows($conn);
                if ($isSucceed > 0) {
                    echo "
                    <script>
                        alert('Registrasi Sukses');
                        document.location.href = 'index.php';
                    </script>";
                } else {
                    echo "
                    <script>
                    alert('Gagal registrasi, coba lagi !');
                    document.location.href = 'index.php';
                    </script>";
                }
            }else {
                echo "
                    <script>
                    alert('Gagal registrasi, username sudah ada !');
                    document.location.href = 'index.php';
                    </script>";
            }
        }
        ?>
</body>
</html>


