<?php

require('classes/Cal.php');
$cal = new Cal;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method = post>
    <input type="int" name = "arg1">
    <input type="int" name = "arg2">
    <select name="ope" id="">
    <option>+</option>
    <option>-</option>
    <option>×</option>
    <option>÷</option>
    </select>
    <button type = "submit" name = "submit">計算</button>
    </form>
    <?php
    if(isset($_POST['submit'])){
        $var1 = $_POST['arg1'];
        $var2 = $_POST['arg2'];
        $ope = $_POST['ope'];
        
        echo $cal->calc($var1,$var2,$ope);
    }
        ?>

</body>
</html>