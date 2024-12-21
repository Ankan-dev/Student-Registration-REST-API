<!DOCTYPE html>
<html lang="en">

<!-- Frontend -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    
    <form method="post">
        <h2>Registration</h2>
        <input type="text" placeholder="Enter your ID" name="Id"/>
        <input type="text" placeholder="Enter your name" name="Name"/>
        <input type="email" placeholder="Enter your email" name="Email"/>
        <input type="text" placeholder="Enter your phone" name="phone"/>
        <input type="text" placeholder="Enter Your branch" name="branch"/>
        <button  id="submit-button" name="submit">Submit</button>
    </form>

    

  
</body>
</html>

<?php

//Backend

require 'db_connect.php';

if(isset($_POST['submit'])){
    $ID=$_POST['Id'];
    $name=$_POST['Name'];
    $email=$_POST['Email'];
    $phone=$_POST['phone'];
    $branch=$_POST['branch'];

    if (empty($name) || empty($email) || empty($phone) || empty($branch)) {
        die("All fields are required.");
    }


    $query="INSERT INTO Register (Id,Name,Email,Phone,branch) VALUES('$ID','$name','$email','$phone','$branch')";

    $result= mysqli_query($connection,$query);
  

    if($result){
        echo "Student is registered succesfully";
    }else{
        echo "Student is not registerd due to internal server error";
    }
}



?>