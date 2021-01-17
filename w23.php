<?php

$server="localhost";
$user="root";
$password="";
$database="my_database";
$connection=mysqli_connect($server,$user,$password,$database);

if(!empty($connection)){

    if(isset($_POST['submite'])){
        $first_name=$_POST['first_name'];
        $last_name=$_POST['last_name'];
        $password=$_POST['password'];
        $confirm_password=$_POST['confirm_password'];
        $email=$_POST['email'];
       
        $date_of_birth=$_POST['date_of_birth'];
        $address=$_POST['address'];
        $blood_group=$_POST['blood_group'];
        
        $query="insert into data values(id,'$first_name','$last_name','$password','$confirm_password','$email','$address','$date_of_birth','$blood_group')";
    $fire=mysqli_query($connection,$query);
         if($first_name==null && $password==null){
             echo "please fill the tables";
         }
        else{
        if(!empty($fire)){
            echo "data inserted successfully";
            header('location:numberofdonors.php');
        }
        else{
            echo "data inserted failled";
        }
    
   
        }



}
    }

else
{
    echo " connection lost";
}


    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>