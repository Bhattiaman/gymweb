<?php
    $host = "localhost";
    $user = "root";
    $password = "";
    $dbname = "user_data";
    
    $con = mysqli_connect($host, $user, $password, $dbname);
    if($con){
        echo "connection successfuly";
    }
    else{
        echo "no connection";
    }
    
   

    $email = $_POST["email"];
    $pass = $_POST["pass"];
    // $test = mysqli_query($con,"SELECT * FROM users");

    // while($row = mysqli_fetch_assoc($test)){
    //     if($email == $row["email"] and $pass == $row["pass"]){
    //         header("Location: ../index.html");
    //         exit();
    //     }
    // }

    $query = " insert into users(email,pass) 
values('$email','$pass')";

echo $query;

 mysqli_query($con,$query);
?>