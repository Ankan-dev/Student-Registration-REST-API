<!DOCTYPE html>
<html lang="en">

<!-- Frontend -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         
         form{
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            border: 2px solid green;
            width: 30vw;
            height: 70vh;
            gap:1rem;
            margin: auto;
            margin-top: 4rem;
         }

        input{
            width: 20rem;
            height:3rem;
            padding-left: 10px;
            border: 2px solid green;
        }
        button{
            border: 2px solid green;
            width: 10rem;  
            height: 2.5rem;
            background-color: transparent;
            color:green;
            font-size: large;
        }
    </style>
</head>
<body>
    <form method="POST">
        <h1>Update the details</h1>
        <input type="text" placeholder="Enter the Id you want to update" name="ID"/>
        <input type="text" placeholder="Enter the updated name" name="Name"/>
        <input type="email" placeholder="Enter the updated email" name="Email"/>
        <input type="phone" placeholder="Enter the updated phone" name="Phone"/>
        <input type="branch" placeholder="Enter the updated branch" name="Branch"/>
        <button name="Submit">Submit</button>
    </form>
</body>
</html>



<?php

//Backend
require "db_connect.php";

if(isset($_POST["Submit"])){

$Id=$_POST["ID"];
$name=$_POST["Name"];
$email=$_POST["Email"];
$phone=$_POST["Phone"];
$branch=$_POST["Branch"];

if(empty($Id)|| empty($name) || empty($email) || empty($phone)|| empty($branch)){
    die("All fields are required");
}

$query="UPDATE Register SET Name='$name',Email='$email',Phone='$phone',branch='$branch' WHERE ID='$Id'";

$result=mysqli_query($connection,$query);

if($result){
    echo " User is updated successfully";
}else{
    die("Internal server error in updating the user");
}


}






?>