<?php
   session_start();
   include_once "./config/dbconnect.php";

?>
       
 <!-- nav -->
 <nav  class="navbar navbar-expand-lg navbar-light px-5" style="background-color: rgb(57, 97, 143);">
     
    <a class="navbar-brand ml-5" href="./admin_page.php">
        <img src="./assets/images/logo.png" width="80" height="80" alt="Swiss Collection" style="background-color: rgb(57, 97, 143);">
    </a>
    <h4 style="color:white; font-size: 23px; padding-top:5px; padding-left:50px;">Sportethics Dashboard</h4>
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0"></ul>
    
    <div class="user-cart">  
        <?php           
        if(isset($_SESSION['user_id'])){
          ?>
          <a href="" style="text-decoration:none;">
            <i class="fa fa-user mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
         </a>
          <?php
        } else {
            ?>
            <a href="login_form.php" style="text-decoration:none;">
                    <i class="fa fa-sign-in mr-5" style="font-size:30px; color:#fff;" aria-hidden="true"></i>
            </a>

            <?php
        } ?>
    </div>  
</nav>
