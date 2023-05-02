 <!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
   <!-- <title> Responsive Contact Us Form  | CodingLab </title>-->
    <link rel="stylesheet" href="contact_us.css">
    <!-- Fontawesome CDN Link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <style>
      body{
       background-image: linear-gradient(-225deg, #2CD8D5 0%, #C5C1FF 56%, #FFBAC3 100%);
      }
     </style>
   </head>

<body>


<?php
// define variables and set to empty values
$nameErr = $emailErr = $feedbackErr = "";
$name = $email = $feedback = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
  }
    
  if (empty($_POST["feedback"])) {
    $website = "";
  } else {
    $feedback = test_input($_POST["feedback"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>




<nav style="color: rgba(24, 115, 168, 0.549);">
         <img src="images/logo.png" class="logo">
         <ul>
            <li><a href="home_page.php">Home</a></li>
            <li class="dropdown">
                <a href="javascript:void(0)" class="dropbtn">Categories</a>
                <div class="dropdownlist">
                    <a href="yoga.php">Yoga</a>
                    <a href="athletics.php">Athletics</a>
                    <a href="treking.php">Trekking</a>
                    <a href="football.php">Football</a>
                    <a href="cricket.php">Cricket</a>
                </div>
            </li>
            <li><a href="contactus.php">Feedback Us</a></li>
            <li><a href="cart.php">Cart</a></li>
            <li><a href="login_form.php">Register/Login</a></li>
         </ul>
      </nav>



  <div class="container" >
    <div class="content">
      <div class="left-side">
        <div class="address details">
          <i class="fas fa-map-marker-alt"></i>
          <div class="topic">Address</div>
          <div class="text-one">B-102, Mondeal Heights, Besides Novotel Hotel, S.G. Highway, Ahmedabad-380015</div>
        </div>
        <div class="phone details">
          <i class="fas fa-phone-alt"></i>
          <div class="topic">Phone</div>
          <div class="text-one">+91 989893 5647</div>
          <div class="text-two">+91 963434 5678</div>
        </div>
        <div class="email details">
          <i class="fas fa-envelope"></i>
          <div class="topic">Email</div>
          <div class="text-one">pateldhruvi@gmail.com</div>
          <div class="text-two">purv123@gmail.com</div>
        </div>
      </div>
      <div class="right-side">
        <div class="topic-text">Send us your feedback</div>
      <form action="#">

        <div class="input-box">
          <input type="text" placeholder="Your name" name="name">
          <span class="error"> <?php echo $nameErr;?></span>
        </div>
        <div class="input-box">
          <input type="text" placeholder="Your email" name="email">
          <span class="error"> <?php echo $emailErr;?></span>
        </div>
        <div class="input-box">
        <textarea id="textarea" name="feedback" rows="10" cols="10" color="#646469" placeholder="Your Feedback"  ></textarea>
        <span class="error"><?php echo $feedbackErr;?></span>
        </div>
        <div class="button">
          <input type="submit" value="Send Now"  >
        </div>
      </form>
    </div>
    </div>
  </div>
</body>
</html>
