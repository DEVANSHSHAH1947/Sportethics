<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>user page</title>

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

   <style>
      .form-btn{
         height: 50px;
         width: 100px;
      }
   </style>

</head>
<body>
   
<div class="container" style="background-image: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);">


   <div class="form-container" style="background-image: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);">

   <form action="" method="post" style="background-image: linear-gradient(-20deg, #e9defa 0%, #fbfcdb 100%);">
   <h3>hi, <span>user</span></h3>
      <h1>welcome <span><?php echo $_SESSION['user_name'] ?></span></h1>
      <p style="font-size:large;">This is an user page Please enter following details</p>
      <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
         };
      };
      ?>
      <input type="text" name="name" required placeholder="enter your name" >
      <input type="text" name="phone" required placeholder="enter your phone number">
      <input type="textarea" name="address" required placeholder="enter your shipping address">
      <input type="submit" name="submit" value="Submit" class="form-btn">  
      <input type="submit" name="submit" value="Home" class="form-btn">  <input type="submit" name="submit" value="Log Out" class="form-btn">
    
   </form>

</div>

</div>

</body>
</html>