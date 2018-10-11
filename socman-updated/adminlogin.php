<?php
$email=$_POST['adminEmail'];
$password=$_POST['adminPassword'];

if($email=='admin@email.com' && $password==admin){
    header('Location: http://localhost/socman/adminpage.php');
}
else{
    header('Location: http://localhost/socman/index.html');
}
?>