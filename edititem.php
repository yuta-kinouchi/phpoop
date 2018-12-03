<?php
    require('classes/item/Item.php');
    session_start();
if(empty($_SESSION['userid'])){
    header("location: login.php");
}
    $item = new Item;
    $id = $_GET['id'];
    $row = $item->selectOne($id);

    if(isset($_POST['submit'])){
        $name = $_POST['item_name'];
        $details = $_POST['item_details'];
        $quantity = $_POST['item_quantity'];
        $price = $_POST['item_price'];

        $updateitem = $item->update($id,$name,$details,$quantity,$price);
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
        <div class="card-header">Edit item</div>
        <div class="card-body">
        <form action="" method = "post" class = "form">
        <label>Item</label>
        <input type="text" class = "form-control" name = "item_name" value =<?php echo $row['item_name']?>>
        <label>Details</label>
        <input type="text" class = "form-control" name = "item_details" value =<?php echo $row['item_details']?>>
        <label>Quantity</label>
        <input type="text" class = "form-control" name = "item_quantity" value =<?php echo $row['item_quantity']?>>
        <label>Price</label>
        <input type="text" class = "form-control" name = "item_price" value =<?php echo $row['item_price']?>>
        <button type="submit" name="submit" class="btn btn-primary mt-2">Edit</button>
        </form>
        </div>
        </div>
    </div>
</body>

</html>