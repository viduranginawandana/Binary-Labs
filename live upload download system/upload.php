<?php
// getting admin uploaded files


$file = $_FILES["file"];

//saving files in the uploads folder

move_uploaded_file($file["tmp_name"], "uploads/" . $file["name"]);

//redirecting back to home

header("Location: index.php");