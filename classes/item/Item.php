<?php
require('Database.php');
class Item extends Database{

    public function select(){
        $sql = "SELECT * FROM items";
        $result =$this->conn->query($sql);
        $rows = array();
        if($result->num_rows > 0){
            while($row = $result->fetch_assoc()){
                $rows[] = $row;
            }
            return $rows;
        }
        else{
            return false;
        }
    }

    
    public function store($name,$details,$quantity,$price){
        $sql = "SELECT * FROM items WHERE item_name = '$name'";
        $result = $this->conn->query($sql);
        if($result->num_rows >0){
            return false;
        }
        else{
            $sql = "INSERT INTO items(item_name,item_details,item_quantity,item_price)VALUES('$name','$details','$quantity','$price')";
            $result = $this->conn->query($sql);
            if($result){
                header("location: item.php");
            }
            else{
                return $conn->error;
            }
        }
    }

    public function selectOne($id){
        $sql = "SELECT * FROM items WHERE item_id = $id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
        }
        else{
            return false;
        }
    }

    public function update($id,$name,$details,$quantity,$price){
        
        $sql = "SELECT * FROM items WHERE item_name = $name AND item_id != $id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return false;
        }
        else{
            $sql = "UPDATE items SET item_name = '$name', item_details ='$details', item_quantity = '$quantity', item_price = '$price' WHERE item_id = $id ";
            $result = $this->conn->query($sql);
            if($result){
                header ('location: item.php');
            }
            else{
                echo $this->conn->error;
            }
        }
        $this->conn->close();
    }

    public function delete($id){
        $sql = "DELETE FROM items WHERE item_id = $id";
        $result = $this->conn->query($sql);
        if($result){
            header("location: item.php");
        }
        else{
            echo $this->conn->error;
        }
        $this->conn->close();
    }

}