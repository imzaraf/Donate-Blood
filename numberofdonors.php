  <?php 
session_start();
?>
  <!doctype html>
<html>
  
<head>
    <style>
        body{
            background-color: rgba(1,0,0,0.2);
        }
    .listh{
        color: white;
        border: 1px solid red;
        width: 20%;
        margin-left: 35%;
        padding: 10px;
        margin-top: 5px;
        border-radius: 10px 10px 10px 10px;
        background-color: rgba(0,0,0,0.3)
        }
        </style>
   
    </head>
<body>
    <div class="num">
    list of donors
    </div>
    
     <?php 
                     $server="localhost";
$user="root";
$password="";
$database="my_database";
$connection=mysqli_connect($server,$user,$password,$database);        
$q="select email,first_name from data";
        $f=mysqli_query($connection,$q);
        
       while($fet=mysqli_fetch_assoc($f)){
         
    ?> 
    
    <div class="listh">
    <label>
        
      
           
            <tr> 
            <td> <?php echo "name  :  " .$fet['first_name']."<br>  " ?> </td>
            <td> <?php echo "email  :  " .$fet['email'] ?> </td>
            
            
          
        
        </label>
         </div>
<?php } ?>    
   
    
    </body>
</html>