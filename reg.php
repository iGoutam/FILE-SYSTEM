<!DOCTYPE html>

<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <title>Registration</title>
    <link rel="stylesheet" href="regstyle1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon" type="png" href="img/Swami_Vivekananda_University,_Barrackpore_Logo.png">

</head>

<body>
    <?php
    require 'config.php';
    if (!empty($_SESSION["id"])) {
        header("Location: reg.php");
    }
    if (isset($_REQUEST["sub"])) {
        $fname = $_REQUEST["fname"];
        $uname = $_REQUEST["uname"];
        $email = $_REQUEST["email"];
        $pno = $_REQUEST["pno"];
        $pass = $_REQUEST["pass"];
        $cpass = $_REQUEST["cpass"];
        $gender = $_REQUEST["gender"];
        $duplicate = mysqli_query($conn, "SELECT * FROM regfile WHERE uname = '$uname' OR email = '$email'");
        if (mysqli_num_rows($duplicate) > 0) {
            echo
            "<script> alert('Username or Email Has Already Taken'); </script>";
        } else {
            if ($pass == $cpass) {
                $query = "INSERT INTO regfile(fname,uname,email,pno,pass,cpass,gender) VALUES('$fname','$uname','$email','$pno','$pass','$cpass','$gender')";
                mysqli_query($conn, $query);
                echo
                "<script> alert('Registration Successful'); </script>";
                header("Location: thankyou.php");
            } else {
                echo
                "<script> alert('Password Does Not Match'); </script>";
            }
        }
    }
    ?>
    <div class="container">
        <div class="title">Registration</div>
        <div class="content">
            <form action="" method="post">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Full Name</span>
                        <input type="text" name="fname" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Username</span>
                        <input type="text" name="uname" placeholder="Enter your username" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Phone Number</span>
                        <input type="number" name="pno" placeholder="Enter your number" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Password</span>
                        <input type="password" name="pass" placeholder="Enter your password" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Confirm Password</span>
                        <input type="password" name="cpass" placeholder="Confirm your password" required>
                    </div>
                </div>
                <div class="gender-details">
                    <input type="radio" name="gender" id="dot-1" value='Male'>
                    <input type="radio" name="gender" id="dot-2" value='Female'>
                    <input type="radio" name="gender" id="dot-3" value='Other'>
                    <span class="gender-title">Gender</span>
                    <div class="category">
                        <label for="dot-1">
                            <span class="dot one"></span>
                            <span class="gender">Male</span>
                        </label>
                        <label for="dot-2">
                            <span class="dot two"></span>
                            <span class="gender">Female</span>
                        </label>
                        <label for="dot-3">
                            <span class="dot three"></span>
                            <span class="gender">other</span>
                        </label>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" name='sub' value="Register">
                </div>
            </form>
        </div>
    </div>
</body>

</html>