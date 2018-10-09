<?php    
    $con = mysqli_connect('fdb23.your-hosting.net', '2846452_society', 'Society123', '2846452_society');

    if(mysqli_connect_error()){  
        die('Connect Error('.mysqli_connect_errno().')'.mysqli_connect_error());  
    } else {    
        $name=mysqli_real_escape_string($con,$_POST['name']);
        $email=mysqli_real_escape_string($con,$_POST['email']);
        $password=mysqli_real_escape_string($con,$_POST['password']);
        $age=mysqli_real_escape_string($con,$_POST['age']);
        $building=mysqli_real_escape_string($con,$_POST['bldgname']);
        $flatno=mysqli_real_escape_string($con,$_POST['flat']);
        $phoneno=mysqli_real_escape_string($con,$_POST['phone']);

        $sql = "INSERT INTO users (name,email,password,age,bldgname,flatno,phoneno) 
            VALUES('$name','$email','$password','$age','$building','$flatno','$phoneno')";

        if(mysqli_query($con, $sql)){
            echo "<script type=\"text/javascript\">
            alert('Your issue has been posted!');
            window.location='registrationpage.html';
            </script>";      
        }else {
            echo "Error".$sql."<br>".$conn->error;
        }  
    }
?>