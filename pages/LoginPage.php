<?php
    include "db.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>

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

        .login-container {
            background: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 10px;
            width: 300px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0,0,0,0.2);
        }

        .login-container h1 {
            margin-bottom: 20px;
            color: #90841c;
        }

        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .login-container .options {
            display: flex;
            justify-content: space-between;
            font-size: 14px;
            margin: 10px 0;
            color: #565228;
        }

        .login-container a {
            text-decoration: none;
            color: #565228;
        }

        .login-container a:hover {
            text-decoration: underline;
        }

        .login-container button {
            width: 100%;
            padding: 10px;
            border: none;
            background-color: #90841c;
            color: white;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 10px;
        }

        .login-container button:hover {
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
            $(".login-container").hide().fadeIn(1000);
            $("form").submit(function(e){
                let username = $("input[name='username']").val();
                let password = $("input[name='password']").val();

                if(username === "" || password === "" ){
                    alert("fill all the fields");
                    e.preventDefault();
                }
            });
             

        $("input").on("keyup",function(){
            let username = $("input[name='username']").val();
            let password = $("input[name='password']").val();

            if(username !== "" || password!== "" ){
                $("button").prop("disabled",false);
            }else{
                $("button").prop("disabled",true);
            }

        });

        });

       

    </script>
    
</head>

<body>

    <div class="login-container">
        <h1>Login</h1>

        <form>
            <input type="text" name="username" placeholder="Enter your username" >
            <input type="password" name="password" placeholder="Enter your password">

            <div class="options">
                <label>
                    <input type="checkbox" name="remember"> Remember me
                </label>
                <a href="#">Forgot password?</a>
            </div>

            <button type="submit">Login</button>
            <div class="register">
                <p>new user? <a> Register here!</a></p>
            </div>
        </form>
    </div>

</body>
</html>