<?php
    require('classes/User.php');
    session_start();
if(empty($_SESSION['userid'])){
    header("location: login.php");
}
    $user = new User;
    $id = $_GET['id'];
    $row = $user->selectOne($id);

    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];

        $updateuser = $user->update($id,$username,$firstname,$lastname);
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

<body>
    <div class="container mt-5">
        <div class="card">
        <div class="card-header">Edit user</div>
        <div class="card-body">
        <form action="" method = "post" class = "form">
        <label>Username</label>
        <input type="text" class = "form-control" name = "username" value =<?php echo $row['username']?>>
        <label>Firstname</label>
        <input type="text" class = "form-control" name = "firstname" value =<?php echo $row['firstname']?>>
        <label>Lastname</label>
        <input type="text" class = "form-control" name = "lastname" value =<?php echo $row['lastname']?>>
        <button type="submit" name="submit" class="btn btn-primary mt-2">Edit</button>
        </form>
        </div>
        </div>
    </div>
</body>

</html>