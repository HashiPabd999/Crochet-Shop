<?php
    include "db.php";

    $fname = $_POST['firstname'];
    $lname = $_POST['lastname'];
    $town = $_POST['town'];
    $username = $_POST['username'];
    $password = $_POST['password1'];

    $user = $conn->query("SELECT * FROM users WHERE username='$username'");

    if ($user->num_rows > 0){
        die("user already exists");

    }

    $hashedpassword = password_hash($password,PASSWORD_DEFAULT);

    $insert_user="INSERT INTO users(first_name,last_name,town,username,password)
                  VALUES ('$fname','$lname','$town','$username','$hashedpassword')";

    if($conn->query($insert_user)){
         echo "registered successfully";
    }else{
        die("failed registration").$conn->connect_error;
    }