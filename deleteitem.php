<?php
require("classes/item/Item.php");
$item = new Item;
$id = $_GET['id'];
$deleteitem = $item->delete($id);