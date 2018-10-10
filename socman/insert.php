<?php    
    require('connect.php');
    session_start();

    $errors = array();

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
        
        if(empty($name)){
            array_push($errors, "Name is required");
        }
        if(empty($email)){
            array_push($errors, "Email is required");
        }
        if(empty($password)){
            array_push($errors, "Password is required");
        }
        if(empty($age)){
            array_push($errors, "Age is required");
        }
        if(empty($building)){
            array_push($errors, "Building name is required");
        }
        if(empty($flatno)){
            array_push($errors, "Flat number is required");
        }
        if(empty($phoneno)){
            array_push($errors, "Phone number is required");
        }
        
        
        if(count($errors) == 0){
        $sql = "INSERT INTO players (name,email,password,age,bldgname,flatno,phoneno) 
            VALUES('$name','$email','$password','$age','$building','$flatno','$phoneno')";
            

        if(mysqli_query($con, $sql)){
            echo "<script type=\"text/javascript\">
            alert('Registration Successful');
            window.location='userhomepage.html';
            </script>";      
        }else {
            echo "Error".$sql."<br>".$con->error;
        }  
        }
    }

?>