<?php

function insert(){
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $name = $_POST["name"];
        $email=$_POST["email"];
        $gender=$_POST["gender"];
        $city=$_POST["city"];
    }
    
    
    $pdo = mysqli_connect("localhost", "root", "", "submission01");
    
    if($pdo){
        echo"Connected";
        $sql="insert into `form`(name,email,gender,city)values('$name','$email','$gender','$city')";
        $result=mysqli_query($pdo,$sql);
        if($result){
            echo ' data inserted';
        }else{
            die(mysqli_connect($pdo));
        }
    }else{
        die(mysqli_connect($pdo));
    }
}

?>