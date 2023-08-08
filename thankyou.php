<!DOCTYPE html>
<html lang="en">

<head>
    <title>Thank You</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="Website Icon" type="png" href="img/Swami_Vivekananda_University,_Barrackpore_Logo.png">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        .container {
            width: 100%;
            height: 100vh;
            background: linear-gradient(135deg, #df7308, #523200);
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .btn {
            padding: 10px 60px;
            background: #fff;
            border: 0;
            outline: none;
            cursor: pointer;
            font-size: 22px;
            font-weight: 500;
            border-radius: 50px;
        }

        .popup {
            width: 400px;
            background: #fff;
            border-radius: 6px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%) scale(1);
            text-align: center;
            padding: 0 30px 30px;
            color: #333;
            /*visibility: hidden;*/
            transition: transform 0.4s, top 0.4s;
        }

        /*.open-Popup {
            visibility: visible;
            top: 50%;
            transform: translate(-50%, -50%) scale(1);
        }*/

        .popup img {
            width: 100px;
            margin-top: -50px;
            border-radius: 50%;
            box-shadow: 8 2px 5px rgba(0, 0, 0, 0.2);
        }

        .popup h2 {
            font-size: 38px;
            font-weight: 500;
            margin: 30px 0 10px;
        }

        .popup button {
            width: 100%;
            margin-top: 50px;
            padding: 10px 0;
            background: #6fd649;
            color: #fff;
            border: 0;
            outline: none;
            font-size: 18px;
            border-radius: 4px;
            cursor: pointer;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2);
        }

        .popup button a {
            text-decoration: none;
        }
    </style>
</head>

<body>

    <div class="container">
        <!-- <button type="submit" class="btn" onclick="openPopup()">submit</button> -->
        <div class="popup" id="popup">
            <img src="img/yt.jpg" alt="rightpic">
            <h2>THANK YOU !</h2>
            <p>your details has taken.</p>
            <button type="button" onclick="closePopup()"><a href="login.php">NOW LOGIN</a></button>
        </div>
    </div>
    <!-- <script>
        let popup = document.getElementById("popup");

        function openPopup() {
            popup.classList.add("open-Popup");
        }

        function closePopup() {
            popup.classList.remove("open-Popup");
        }
    </script> -->
</body>

</html>