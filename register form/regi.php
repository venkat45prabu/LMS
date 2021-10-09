<?php
include 'conn.php';


    $fname=$_POST['first_name'];
    $lname=$_POST['last_name'];
    $pass=$_POST['password'];
    $dob=$_POST['birthday'];
    $gender=$_POST['gender'];
    $mail=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $status=1;
    $role=2;

    $user="INSERT INTO user (name,phone,mail,status) VALUES ('$fname','$phone','$mail','$status')";
    $user_query=mysqli_query($conn,$user);
    
    if(!$user_query)
        echo "Not Inserted";


    $reg="INSERT INTO register (fname,lname,password,dob,gender,mail,phone,address,role) VALUES ('$fname','$lname','$pass','$dob','$gender','$mail','$phone','$address','$role')";
    $regis=mysqli_query($conn,$reg);

    if(!$regis)
        echo "Not Inserted";
    else 
        header('Location: ../login.php');

    


?>