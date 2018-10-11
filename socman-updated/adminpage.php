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
            text-align: center;
            font-family: sans-serif;
            padding-left: 150px;
        }
        th{
            border-bottom: 5px solid #000;
            text-align: center;
            font-family: sans-serif;
        }
        td{
            border-bottom: 2px solid #666;
            text-align: center;
            font-family: sans-serif;
        }
        h1{
            text-align: center;
            font-family: sans-serif;
        }
        
        a{
            text-align: center;
            font-family: sans-serif;
        }
        
        
    </style>
    
</head>
<body>
    <h1>Committee Member's Page</h1>

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
    
    
    <a type="button" role="button" href="index.html" class="btn btn-info">Sign Out</a>
    
</body>
    
</html>