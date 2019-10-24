<?php
//dd
//dd
echo "<body style='background-color: #FFFFFF'>";


?>
<!DOCTYPE html>
<html>
 <head>
  <title>Download</title>
  <link rel="stylesheet" href="index123.css" />
 </head>
<body> <ul>
                    <li><a href="file:///C:/Users/ashin/Desktop/webfinal/index.html">Home</a></li>
                    <li><a href="http://localhost/test12/download.php">Downloads</a></li>
           
                  
            </ul>
            <div class="bg-image"></div>

            <div class="bg-text">
  <h2></h2>
  <h1 style="font-size:150px">Binary Labs</h1>
  <p style="font-size:30px">Simple Solutions For Complex Connections</p>
</div>

  <br />
  <h2 class="head" align="center" style="font-size:60px">Download Your File</h2>
  <br />

  
  
  <?php

$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++) {

    ?>
    <p  style="text-align:; font-size:30px; ">
         <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?> --Download and use the password that we provided<img src="112.png" alt="W3Schools" width="104" height="100"> </a>
    </p>
    <?php 
}
?>

</body>
</html>
