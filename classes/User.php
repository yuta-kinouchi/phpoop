<?php
require('Database.php');
class User extends Database{

    public function select(){
        $sql = "SELECT * FROM user_name";
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

      

    public function store($user,$pass,$first,$last){
        $sql = "SELECT * FROM user_name WHERE username = '$user'";
        $result = $this->conn->query($sql);
        if($result->num_rows >0){
            return false;
        }
        else{
            $pass = md5($pass);
            $sql = "INSERT INTO user_name(username,password,firstname,lastname)VALUES('$user','$pass','$first','$last')";
            $result = $this->conn->query($sql);
            if($result){
                header("location: users.php");
            }
            else{
                return $conn->error;
            }
        }
    }

    public function selectOne($id){
        $sql = "SELECT * FROM user_name WHERE user_id = $id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            $row = $result->fetch_assoc();
            return $row;
        }
        else{
            return false;
        }
    }

    public function update($id,$username,$firstname,$lastname){
        $sql = "SELECT * FROM user_name WHERE username = $user AND user_id != $id";
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            return false;
        }
        else{
            $sql = "UPDATE user_name SET username = '$username', firstname ='$firstname',lastname = '$lastname'WHERE user_id = $id ";
            $result = $this->conn->query($sql);
            if($result){
                header ('location: users.php');
            }
            else{
                echo $this->conn->error;
            }
        }
        $this->conn->close();
    }

    public function delete($id){
        $sql = "DELETE FROM user_name WHERE user_id = $id";
        $result = $this->conn->query($sql);
        if($result){
            header("location: users.php");
        }
        else{
            echo $this->conn->error;
        }
        $this->conn->close();
    }

    public function check($name,$pass){
        $pass = md5($pass);
        $sql = "SELECT * FROM user_name WHERE username = '$name' AND password = '$pass' "; 
        $result = $this->conn->query($sql);
        if($result->num_rows > 0){
            session_start();
            $row = $result->fetch_assoc();
            $_SESSION['userid'] = $row['user_id'];
            header('location: item.php');
        }
        else{
            echo "<p class = 'text-danger'> Invalid Username or Password</p>" ;
        }
    }
}
