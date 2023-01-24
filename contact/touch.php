<?php
//     $host = "localhost";
//     $user = "root";
//     $password = "";
//     $dbname = "user_data";
    
//     $con = mysqli_connect($host, $user, $password, $dbname);
    
//     if(!$con){
//         die("Connection failed: ".mysqli_connect_error());
//     }

//     $pass = $_POST["pass"];
//     $email = $_POST["email"];
    
//     mysqli_query($con,"INSERT INTO users VALUES('".$email."', '".$pass."')");

//     header("Location: ../login/login.php");
//     exit();
// 



$server = "localhost";
$username = "root";
$password = "";
$dbname = "touch";
$con = mysqli_connect($server, $username,$password,$dbname);

if(isset($_POST['submit'])){
    if(!empty($_POST['firstname']) && !empty($_POST['lastname'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $mail = $_POST['mail'];
    $number = $_POST['number'];
    $address = $_POST['address'];
    $message = $_POST['message'];
    


     $query = "insert into data(firstname, lastname, mail, number,address,message) values('$firstname' ,'$lastname','$mail','$number','$address','$message')";
     $run = mysqli_query($con, $query) or die(mysqli_error());

     if($run){
         echo "details submitted sucessfully";
     } else {
         echo "details is not submitted";
     }
    }
    else 
      echo "all fields required";
}



?> 