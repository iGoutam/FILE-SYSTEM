<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>log_in</title>
    <link rel="stylesheet" href="loginstyle.css">
    <link rel="Website Icon" type="png" href="img/Swami_Vivekananda_University,_Barrackpore_Logo.png">
</head>

<body>
    <?php
    require 'config.php';
    if (!empty($_SESSION["id"])) {
        header("Location: login.php");
    }
    if (isset($_REQUEST["subl"])) {
        $uname = $_REQUEST["uname"];
        $pass = $_REQUEST["pass"];
        $result = mysqli_query($conn, "SELECT * FROM regfile WHERE uname = '$uname'");
        $row = mysqli_fetch_assoc($result);
        if (mysqli_num_rows($result) > 0) {
            if ($pass == $row['pass']) {
                $_SESSION["login"] = true;
                $_SESSION["id"] = $row["id"];
                header("Location: datainsert.php");
            } else {
                echo
                "<script> alert('Wrong Password'); </script>";
            }
        } else {
            echo
            "<script> alert('User Not Registered'); </script>";
        }
    }
    ?>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" name="uname" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="pass" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass">Forgot Password?</div>
            <input type="submit" name="subl" value="Login">
            <div class="signup_link">
                Not a member? <a href="reg.php">Register</a>
            </div>
        </form>
    </div>

</body>

</html>