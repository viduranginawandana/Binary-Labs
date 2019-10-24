<?php
ob_start();
require_once 'inc/dbconnection.php';
    if(isset($_POST["forget-password"])){
        if(!empty($_POST["user-email"])){
            $email = trim($_POST["user-email"]);
        } else {
            $error_message = "<li>Email is required</li>";
        }
        if(empty($error_message)){
            $query = $db->prepare("SELECT name, email FROM users WHERE email =?");
            $query->execute(array($email));
            $user = $query->fetchAll(PDO::FETCH_ASSOC);
        }
        if(!empty($user)){
//            $msg='yes';
//            echo "<script type='text/javascript'>alert('$msg');</script>";
            require_once ("forget-password-mail.php");
        } else {
            $error_message = 'No Email Found';
        }
    }

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Binary Labs Login / Registration Form</title>
        <link href="style1.css" rel="stylesheet">
        
    </head>
    <body>
        <div id="wrapper">
            <div id="loginContainer">
                <form id="frmForget" name="frmForget" method="post">
                    <h3 tyle="text-align:center; font-size:20px">Forget Password ? </h3>
                    <?php if(!empty($success_message)) { ?>
                    <div class="success_message"><?php echo $success_message ?>
                    <?php } ?>
                    <?php if(isset($error_message)) { ?> 
                    <div class="error_message"><?php echo $error_message; ?></div>
                    <?php } ?>
                    <input type="email" name="user-email" placeholder="Enter a valid email" required>
                    <input type="submit" value="Submit" name="forget-password" id="forget-password">
                </form>
            </div>
        </div>

        <div class="bg-image"></div>

<div class="bg-text">
  <h2>Reset Your Password</h2>
  <h1 style="font-size:80px">Binary Labs</h1>
  <p></p>
</div>
        
    </body>
</html>

