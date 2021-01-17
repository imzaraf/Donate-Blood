<?php session_start();

?>
<!doctype html>
<html lang="en">
<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>
    
    </title>

    
    <link rel="stylesheet" href="new.css">
    </head>
    <body>
    <div class="container">
        <div class="row">
        <div class="col-sm-4 h" >
        <div class="pic">
         
            </div>
            <div class="col-sm-12 text">
            <h4>blood donor<br>
               <label id="u"> <?php echo ($_SESSION['user']); ?></label> 
                
                </h4>
            </div>
            <div class="information">
            <ul>
                <li>home</li>
                 <li>blood group</li>
                 <li>information</li>
                 <li>contact</li>
                 <li>chating</li>
                </ul>
            </div>
         </div>
          
                
        <div class="col-sm-8 col" >
          
               <label id="op"> information</label>
  <div class="whole">
            <div class="name">
                
          <label id="w">name :</label>     <?php echo ($_SESSION['user']); ?>
               
            </div>
            <div class="email">
              <label id="w">email :</label>  <?php echo  ($_SESSION['email']); ?>
            </div>
            <div class="bloodgroup">
         <label id="w">bloodgroup :</label>           <?php if($_SESSION['blood_group']==null){
    echo "none blood group";
}
     else{
      echo  ($_SESSION['blood_group']);
    }
?>
            </div>
            <div class="yu">
                 <label id="w">address :</label>  <?php echo  ($_SESSION['address']); ?>
            </div>
                  <div class="yu">
                 <label id="w">date_of_birth :</label>  <?php echo  ($_SESSION['date_of_birth']); ?>
            </div>
        </div>
               
           </div>
            </div>
        </div>
        
      
    </body>

</html>