



<?php
//creating directory to store files
//desining ui
echo "<body style='background-color: #FFFFFF'>";


?>
<!DOCTYPE html>
<html>
 <head>
  <title>admin upload</title>
  <link rel="stylesheet" href="index123.css" >
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
  <h2 class="head" align="center" style="font-size:60px">Upload Files(admin only)</h2>
  <br />
    
<form method="POST" enctype="multipart/form-data" action="upload.php">
    <input type="file" name="file">
    <input type="submit" value="Upload">

</form>

<?php
//creating file to upload
//displaying all files

$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++) {

  // displaying links to download
    ?>
    <p style="text-align:center; font-size:50px ">
         <a download="<?php echo $files[$a] ?>" href="uploads/<?php echo $files[$a] ?>"><?php echo $files[$a] ?>--File Uploaded<img src="113.png" alt="W3Schools" width="104" height="100"></a>
    </p>
    <?php 
}
?>

</body>
</html>



