<!DOCTYPE html>
<html lang="en">
<head>  
  <title>SOCGENT</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    
    <style type="text/css">
        table {
            border: 2px solid blue;
            background-color: aqua;
        }
        th{
            border-bottom: 5px solid #000;
        }
        td{
            border-bottom: 2px solid #666;
        }
    </style>
    
</head>
<body>
    <h1>Admin Page</h1>

<?php
    
  require('connect.php');
    
    $sqlget = "SELECT * FROM queries";
    $sqldata = mysqli_query($con, $sqlget) or die('error 404');
    
    echo "<table>";
    echo "<tr><th>ID</th><th>Problems prevailing</th></tr>";
    
    while($row = mysqli_fetch_array($sqldata, MYSQL_ASSOC)){
        echo "<tr><td>";
        echo $row['id'];
        echo "</td><td>";
        echo $row['userquery'];
        echo "</td></tr>";
    }
    
    echo "</table>";
    
    
?>    
    
    
    
    
</body>
    
</html>