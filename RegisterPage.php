<?php
    include "db.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body {
            height: 100vh;
            background: url('assets/login.jpg') no-repeat center center/cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .register-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 40px;
            border-radius: 10px;
            width: 400px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .register-container h1 {
            margin-bottom: 20px;
            color: #90841c;
        }

        .register-container label{
            text-decoration:none;
            font: size 10px;
            color:rgb(115, 99, 63);
        }

        .register-container input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size:10px;
        }


        .register-container button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #90841c;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
            font-size:14px;
        }

        .register-container button:hover {
            background-color: rgb(58, 44, 10) ;
        }
        .register {
            display: flex;
            justify-content: center;   
            align-items: center;       
            text-align: center;
            margin-top: 20px;
    }
        .register p {
        font-size: 14px;
        color: #565228;
         }

        .register a {
            color: #565228;
            cursor: pointer;
            text-decoration: bold;
            margin-left: 5px;
         }

        .register a:hover {
            text-decoration: underline;
        }
    </style>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
     <script type="text/javascript">
        $(document).ready(function(){
            $("form").submit(function(e){
            let p1 = $("input[name='password1']").val();
            let p2 = $("input[name='password2']").val();

            if(p1!==p2){
                alert("passwords didn't match");
                e.preventDefault();
            }
        });
        });
        
     </script>
</head>
<body>
    <div class="register-container">
        <h1>Register</h1>

        <form action = "register.php" method="POST">
            <label for="first name">Enter your first name:</label><input type="text" name="firstname"  required></br>
            <label for="last name">Enter your last name:</label><input type="text" name="lastname" required></br>
            <label for="town">Enter your home town:</label><input type="text" name="town" required></br>
            <label for="username">Enter your Email address:</label><input type="email" name="username" required></br>
            <label for="password1">Create a password:</label><input type="password" name="password1" required></br>
            <label for="password2">Enter your password again:</label><input type="password" name="password2" required></br>


            <button type="submit">Register</button>
            <div class="register">
                <p>Already user? <a> Login here!</a></p>
            </div>
        </form>
    </div>
    
</body>
</html>