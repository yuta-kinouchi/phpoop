<?php
    require('classes/User.php');
    session_start();
if(empty($_SESSION['userid'])){
    header("location: login.php");
}
    $user = new User;
    if(isset($_POST['submit'])){
    $username = $_POST['user'];
    $pass = $_POST['pass'];
    $first = $_POST['first'];
    $last = $_POST['last'];

    $adduser = $user->store($username,$pass,$first,$last);

    if($adduser == FALSE){
        echo "Username is already taken.";
    }
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>Document</title>
</head>
<div class="container">
    <div class="card mt-3 ">
        <div class="card-header bg-dark text-light">Add User</div>
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <p class="mt-3 ml-3">Username</p>
                    <input type="text" class="form-control " name="user">
                </div>
                <div class="form-group">
                    <p class="mt-3 ml-3">Password</p>
                    <input type="password" class="form-control " name="pass">
                </div>
                <div class="form-group">
                    <p class="mt-3 ml-3">Firstname</p>
                    <input type="text" class="form-control " name="first">
                </div>
                <div class="form-group">
                    <p class="mt-3 ml-3">Lastname</p>
                    <input type="text" class="form-control " name="last">
                </div>
                <button type="submit" class="btn btn-primary mb-3" name="submit">Submit</button>
            </form>
            <?php

            ?>
        </div>
    </div>
</div>