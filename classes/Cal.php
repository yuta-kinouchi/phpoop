<?php

class Cal{  
    
    public function __construct(){
        echo "helloWorld";
    }
    public function calc($arg1,$arg2,$ope){

        if($ope == "+"){
            $total = $arg1 + $arg2;
            return $total;
        }elseif($ope == "-"){
            $total = $arg1 - $arg2;
        return $total;
        }elseif($ope == "×"){
            $total = $arg1 * $arg2;
        return $total;
        }elseif($ope == "÷"){
            $total = $arg1 / $arg2;
        return $total;
        }
    }
}
?>