<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>


    <style>
        body{
            display:flex;
            flex-direction:column;
            justify-content:center;
            align-items:center;
        }
        table{
            border: 2px solid black;
            width: 40rem;
        }
        th{
            border:2px solid black;
            text-align:center;
        }

        td{
            border:2px solid black;
            text-align:center;
        }
    </style>
</head>
<body>
    <h1>Here are the full details</h1>


   <table>

    <tr >
        <th>Id</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone</th>
        <th>Branch</th>
    </tr>

    <?php

        require "db_connect.php";

        $query="SELECT * FROM Register";

        $res=mysqli_query($connection,$query);

        if($res){
        while($i=mysqli_fetch_array($res)){
            echo "<tr>
                <td>{$i['Id']}</td>
                <td>{$i['Name']}</td>
                <td>{$i['Email']}</td>
                <td>{$i['Phone']}</td>
                <td>{$i['branch']}</td>
            </tr>";
        }
        }else{
            echo "Data is not found";
        }

?>
    

   </table>






</body>
</html>




