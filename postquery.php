<?php
    require('connect.php');

    if(mysqli_connect_error()){  
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());  
    } else {    
        $postquery = mysqli_real_escape_string($con,$_POST['comment']);

        $sql = "INSERT INTO queries (userquery) 
            VALUES('$postquery')";

        if(mysqli_query($con, $sql)){
            echo "<script type=\"text/javascript\">
            alert('Your issue has been posted!');
            window.location='userhomepage.html';
            </script>";      
        }else {
            echo "Error".$sql."<br>".$con->error;
        }  
    }
?>