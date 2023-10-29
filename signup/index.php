<?php
include("connection.php");
include("signup.php");
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>sign up </title>
</head>
<style>
    body {
        background: 1877F2;
        text-align: center;
    }

    #form {
        width: 500px;
        margin: 0 auto;
        background: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    }


    #btn {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 10px 20px;
        border-radius: 5px;
        cursor: pointer;
    }

    #btn:hover {
        background-color: #0056b3;
    }
</style>

<body>
    <div id="form">
        <h1 id="heading">SignUp</h1><br>
        <form name="form" action="signup.php" method="POST">
            <i class="fa fa-user fa-lg"></i>
            <input type="text" id="user" name="user" placeholder="Enter Username" required></br></br>
            <i class="fa-solid fa-envelope fa-lg"></i>
            <input type="email" id="email" name="email" placeholder="Enter Email" required></br></br>
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="password" id="pass" name="pass" placeholder="Create Password" required></br></br>
            <i class="fa-solid fa-lock fa-lg"></i>
            <input type="password" id="cpass" name="cpass" placeholder="Retype Password" required></br></br>
            <i class="fa-solid fa-calendar fa-lg"></i>
            <input type="date" id="dob" name="dob" required></br><br>
            <label for="male">Male</label>
            <input type="radio" id="male" name="gender" value="male"><br><br>
            <label for="female">Female</label>
            <input type="radio" id="female" name="gender" value="female"></br><br>
            <input type="submit" id="btn" value="SignUp" name="submit" /><br>
        </form>
    </div>
</body>

</html>