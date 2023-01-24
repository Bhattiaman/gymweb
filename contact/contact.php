<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up</title>

</head>

<body>

    <div class="signup">
        <form action="touch.php" method="post">
            <h4>Get in Touch</h4>

            <p><input class="btn1" type="text" name="firstname" placeholder="first name" required></p>
            <p><input class="btn1" type="text" name="lastname" placeholder="last name" required></p>
            <p><input class="btn1" type="email" name="mail" id="email" placeholder="email address" required></p>

            <p><input class="btn1" type="number" name="number" id="number" placeholder="Number" required></p>

            <p><textarea class="btn1" name="Address" name="address" id="address" cols="50" rows="1" required placeholder="Address"></textarea></p>

            <p><textarea class="btn2" name="massage" id="msg" cols="50" rows="2.5" required placeholder="Type your message here"></textarea></p>
            <p><input type="checkbox" id="terms" name="terms" value="term">
                <label class="check" for="terms"> <b>I agree to the Terms of User</b></label><br></p>
            <input class="btn3" type="reset" value="Reset">

            <input class="btn3" type="submit" value="Submit">
        </form>
    </div>
    <style>
        a {
            margin: 2px;
        }
        
        .btn1 {
            border-radius: 22px;
        }
        
        .btn2 {
            border-radius: 19px;
        }
        
        .terms {
            color: white;
        }
        
        body {
            background-image: url("contact.jpg");
            background-size: cover;
            background-position: center;
        }
        
        .btn3 {
            border-radius: 22px;
            margin: 4px;
        }
        
        .btn3:hover {
            color: #f9004d;
            transition: 1s;
            transform: scale(1.2);
        }
        
        .signup {
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