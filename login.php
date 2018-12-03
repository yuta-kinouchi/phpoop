<?php
        require('classes/User.php');
        $user = new User;
        if(isset($_POST['submit'])){
            $name = $_POST['name'];
            $pass = $_POST['pass'];
            $check = $user->check($name,$pass);
        }
        ?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO"
        crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="container mt-5">
        <div class="card">
        <div class="card-header">Login</div>
        <div class="card-body">
        <form action="" method = "post" class = "form">
        <label>Username</label>
        <input type="text" class = "form-control" name = "name" >
        <label>Password</label>
        <input type="password" class = "form-control" name = "pass">
        <button type="submit" name="submit" class="btn btn-primary mt-2">Edit</button>
        </form>

        </div>
        </div>
    </div>
</body>

</html>