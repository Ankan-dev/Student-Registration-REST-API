<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form{
            border: 2px solid blueviolet;
            width: 30rem;
            height: 5rem;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 20px;
            margin: auto;
            margin-top: 10rem;
        }
        input{
            width: 13rem;
            height:2rem;
            padding-left: 10px;
            border: 2px solid blueviolet;
        }
        button{
            border: 2px solid blueviolet;
            width: 10rem;  
            height: 2rem;
            background-color: transparent;
            color: blueviolet;
            font-size: large;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <form method="POST">
        <input type="text" placeholder=" Enter the id you want to delete" name="Id"/>
        <button name="submit">Delete</button>
    </form>
</body>
</html>


<?php

//Backend

require 'db_connect.php';

if(isset($_POST['submit'])){
    $ID=$_POST['Id'];

    if (empty($ID)) {
        die("Id is required.");
    }


    $query="DELETE FROM Register WHERE Id='$ID'";

    $result= mysqli_query($connection,$query);
  

    if($result){
        echo "Student is Deleted succesfully";
    }else{
        echo "Student is not Deleted due to internal server error";
    }
}



?>