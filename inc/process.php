<?php
require "connection.php";

 if (isset($_POST["register"])){
    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);

    //CHECK IF USER ALREADY EXISTS

    $sql_check = "SELECT * FROM users WHERE email ='$email'";
    $query_check = mysqli_query($connection, $sql_check);
    if(mysqli_fetch_assoc($query_check)){
        $error = "User already exists!";
    } else {
        $sql = "INSERT INTO users(name, email, password) VALUES('$name', '$email', '$encrypt_password')";
    $query = mysqli_query($connection, $sql) or die("Couldn't connect to server");
    $success = "Registration Completed!";
    }
 }

 if (isset($_POST["login"])){
    $email = $_POST["email"];
    $password = $_POST["password"];
    $encrypt_password = md5($password);

    $sql_check2 = "SELECT * FROM users WHERE email ='$email'";
    $query_check2 = mysqli_query($connection, $sql_check2);
    if(mysqli_fetch_assoc($query_check2)){

        $sql_check = "SELECT * FROM users WHERE email ='$email' AND password ='$encrypt_password'";
    $query_check = mysqli_query($connection, $sql_check);
    if(mysqli_fetch_assoc($query_check)){
        $success = "Login Successful!";
    } else {
            $error = "Incorrect Password!";
    } 
    }else {
            $error = "Incorrect Email Address!";
    
    }
 }
?>
