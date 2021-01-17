<?php

$server="localhost";
$user="root";
$password="";
$database="my_database";
$connection=mysqli_connect($server,$user,$password,$database);
session_start();
if(isset($_POST['login'])){
    $name=$_POST['name'];
    $password=$_POST['password'];
    
   $qure="select first_name,password,blood_group,email,date_of_birth,address from data where first_name='$name' and password='$password' ";
    $fire=mysqli_query($connection,$qure);
    $fetch=mysqli_fetch_assoc($fire);
   
    if($fetch['first_name']==$name && $fetch['password']==$password && $fetch['first_name']==!null && $fetch['password']==!null){
     $_SESSION['user']=$fetch['first_name'];
     $_SESSION['email']=$fetch['email'];
     $_SESSION['blood_group']=$fetch['blood_group'];
     $_SESSION['address']=$fetch['address'];
     $_SESSION['date_of_birth']=$fetch['date_of_birth'];
    header('location:pro.php');
    }
    else {
        echo "invalid username" ;
        header('location:donor.html');    
    }
}
?>
    