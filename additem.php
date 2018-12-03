<?php
    require('classes/item/Item.php');
    session_start();
if(empty($_SESSION['userid'])){
    header("location: login.php");
}
    $item = new Item;
    if(isset($_POST['submit'])){
        $name = $_POST['name'];
        $details = $_POST['details'];
        $quantity = $_POST['quantity'];
        $price = $_POST['price'];


    $additem = $item->store($name,$details,$quantity,$price);

    if($additem == FALSE){
        echo "This item is already taken.";
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
        <div class="card-header bg-dark text-light">Add Item</div>
        <div class="container">
            <form method="post">
                <div class="form-group">
                    <p class="mt-3 ml-3">Item name</p>
                    <input type="text" class="form-control " name="name">
                </div>
                <div class="form-group">
                    <p class="mt-3 ml-3">Item details</p>
                    <input type="text" class="form-control " name="details">
                </div>
                <div class="form-group">
                    <p class="mt-3 ml-3">Item quantity</p>
                    <input type="text" class="form-control " name="quantity">
                </div>
                <div class="form-group">
                    <p class="mt-3 ml-3">Item price</p>
                    <input type="text" class="form-control " name="price">
                </div>
                <button type="submit" class="btn btn-primary mb-3" name="submit">Submit</button>
            </form>
            <?php

            ?>
        </div>
    </div>
</div>