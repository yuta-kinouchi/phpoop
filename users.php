<?php

require('classes/User.php');
session_start();
if(empty($_SESSION['userid'])){
    header("location: login.php");
}
$user = new User;
$result = $user->select(); ?>

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

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="item.php">Item</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">Logout</a>
      </li>
    </ul>
  </div>
</nav>
<div class = container>
    <table class="table">
        <thead>
            <tr>
                <th>user_id</th>
                <th>username</th>
                <th>firstname</th>
                <th>lastname</th>
                <th>button</th>
            </tr>
        </thead>
        <tbody>
        <?php
        if($result){
foreach($result as $key=>$row){
    echo "<tr>";
    echo "<td>".$row['user_id']."</td>";
    echo "<td>".$row['username']."</td>";
    echo "<td>".$row['firstname']."</td>";
    echo "<td>".$row['lastname']."</td>";
    echo "<td><a href = edituser.php?id=".$row['user_id']." class = 'btn btn-primary btn-sm'>Edit</a><a href = deleteuser.php?id=".$row['user_id']." class = 'btn btn-danger btn-sm ml-1' >Delete</a></td>";
    echo "</tr>";
}
}
else{
    echo "<tr><td colspan= '4'>No data </td><tr>";
}

?>
        </tbody>
        <a href = adduser.php class = "btn btn-info m-3">Add</a>
</body>

</html>