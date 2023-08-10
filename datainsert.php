<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>file upload</title>
    <link rel="stylesheet" href="regstyle1.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="Website Icon" type="png" href="img/Swami_Vivekananda_University,_Barrackpore_Logo.png">

</head>

<body>
    <?php
    if (isset($_REQUEST["sub"])) {
        $conn = mysqli_connect("localhost", "root", "", "filesystem");
        if ($conn) {
            echo ("success<br>");
        } else {
            die("sorry,database not established ");
        }
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $rno = $_REQUEST['rno'];
        $regno = $_REQUEST['regno'];
        $email = $_REQUEST['email'];
        $stream = $_REQUEST['stream'];
        $semester = $_REQUEST['semester'];
        $amo = $_REQUEST['amo'];
        $file = ($_FILES["file"]["name"]);
        if ((($_FILES["file"]["type"] == "image/gif")|| ($_FILES["file"]["type"] == "image/jpeg")|| ($_FILES["file"]["type"] == "image/pjpeg"))
            && (($_FILES["file"]["size"] / 1024) < 200)) {
                if ($_FILES["file"]["error"] > 0) {
                    echo "Return Code:" . $_FILES["file"]["error"] . "<br/>";
            } else {

                echo "Upload: " . $_FILES["file"]["name"] . "<br />";
                move_uploaded_file($_FILES["file"]["tmp_name"], "upload/" . $_FILES["file"]["name"]);
                echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
            }
        $sql = "INSERT INTO data_table(fname,lname,rno,regno,email,stream,semester,amo,file) VALUES('$fname','$lname','$rno','$regno','$email','$stream','$semester','$amo','$file')";
        }
        $result = mysqli_query($conn, $sql);
        if ($result) {
            echo ("the data inserted sucessfully");
            header("Location: thankyou2.php");
        } else {
            echo ("the data inserted not sucessfully" . mysqli_error($conn));
        }
    }
    ?>
    <div class="container">
        <div class="title">Form fill up</div>
        <div class="content">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">First Name</span>
                        <input type="text" name="fname" placeholder="Enter your name" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Lastname</span>
                        <input type="text" name="lname" placeholder="Enter your lastname" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Roll no.</span>
                        <input type="text" name="rno" placeholder="Enter your roll no" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Registration Number</span>
                        <input type="text" name="regno" placeholder="Enter your reg no" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Stream</span>
                        <select name="stream" id="stream">
                            <option value="select">select</option>
                            <option value="cse">CSE</option>
                            <option value="ds">DS</option>
                            <option value="etce">ETCE</option>
                            <option value="eletrical">ELECTRICAL</option>
                            <option value="mechanical">MECHANICAL</option>
                            <option value="civil">civil</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Semester</span>
                        <select name="semester" id="semester">
                            <option value="select">select</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                        </select>
                    </div>
                    <div class="input-box">
                        <span class="details">Amount</span>
                        <input type="number" name="amo" placeholder="Enter your amount" required>
                    </div>
                    <div class="input-box">
                        <span class="details">File</span>
                        <input type="file" name="file" placeholder="upload your file" required>
                    </div>
                    <div class="button">
                        <input type="submit" name='sub' value="upload">
                    </div>
</body>

</html>