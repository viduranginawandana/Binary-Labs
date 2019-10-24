<!DOCTYPE html>
<html>
    <head>
        <title>Binary Labs Login / Registration Form</title>
        <link href="dashboard.css" rel="stylesheet">
    </head>
    
    <body>
    <div class="hero-image">
  <div class="hero-text">
    <h1 style="font-size:80px">Welcome To Binary Labs</h1>
    <p>Click this button to go to commenting area</p>
    <button class="btn warning"><a href="http://localhost/tutorial/comment-system-using-php-and-ajax-demo/">Go </a></button>
  </div>
</div>



    <?php
ob_start();
session_start();
require_once 'inc/dbconnection.php';

if(isset($_SESSION) && $_SESSION["email"]) {
    echo '<a href="logout.php"><span class="glyphicon glyphicon-log-out"></span>Sign Out</a><br>';
    echo  "Welcome ". $_SESSION['email'];
} else {
    header("Location: index.php");

}
?>


    </body>



   
    
    </html>




