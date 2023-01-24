<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="loginstyle" href="login.css">
</head>

<body>

    <div class="login">
        <form action="users.php" method="post">
            <h3>login</h3>
            <a href="https://www.google.com/" target="_blank">
                <img class="google" src="google.png" alt="google" height="20px"></a>
            <a href="https://www.facebook.com/" target="_blank">
                <img class="facebook" src="fb.png" alt="facebook" height="20px">
            </a>
            <a href="https://www.instagram.com/" target="_blank">

                <img class="instagram" src="insta.webp" alt="instagram" height="20px">
            </a>


            <p>or use your account</p>

            <p><input class="btn1" type="email" name="email" id="email" placeholder="Username/Email" required></p>
            <p><input class="btn1" type="password" name="pass" id="password" placeholder="Password" required></p>
            <input class="btn1" type="reset" value="Reset">
            <input class="btn1" name="submit" type="submit" value="Submit">
        </form>
    </div>
    <style>
        a {
            margin: 2px;
        }
        
        .btn1 {
            border-radius: 22px;
        }
        
        h3,
        p {
            color: white;
        }
        
        body {
            background-image: url("background.jpg");
            background-position: center;
        }
        
        .login {
            border-radius: 522px;
            display: block;
            width: 40%;
            margin: 29px auto;
            text-align: center;
            margin-top: 15%;
        }
    </style>


</body>

</html>