<?php
//index.php


?>
<!DOCTYPE html>
<html>
 <head>
  <title>Commenting Area</title>
  <script src="jquery.min.js"></script>
  <link rel="stylesheet" href="bootstrap.min.css" />
  <link rel="stylesheet" href="index.css" >
  <script src="bootstrap.min.js"></script>
 </head>
 <body style="background-color:#4A4747;">
 
             <ul>
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
  <h2 class="head" align="center" style="font-size:60px">Share Your Knowledge</h2>
  <br />

  
  <div class="container">
   <form method="POST" id="comment_form">
    <div class="form-group">
     <input type="text" name="comment_name" id="comment_name" class="form-control" placeholder="Enter Name" />
    </div>
    <div class="form-group">
     <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter Comment" rows="5"></textarea>
    </div>
    <div class="form-group">
     <input type="hidden" name="comment_id" id="comment_id" value="0" />
     <input type="submit" name="submit" id="submit" class="btn btn-info" value="Submit" />
    </div>
   </form>
   <span id="comment_message"></span>
   <br />
   <div id="display_comment"></div>
  </div>
 </body>
</html>

<script>
$(document).ready(function(){
 
 $('#comment_form').on('submit', function(event){
  event.preventDefault();
  var form_data = $(this).serialize();
  $.ajax({
   url:"add_comment.php",
   method:"POST",
   data:form_data,
   dataType:"JSON",
   success:function(data)
   {
    if(data.error != '')
    {
     $('#comment_form')[0].reset();
     $('#comment_message').html(data.error);
     $('#comment_id').val('0');
     load_comment();
    }
   }
  })
 });

 load_comment();

 function load_comment()
 {
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('#display_comment').html(data);
   }
  })
 }

 $(document).on('click', '.reply', function(){
  var comment_id = $(this).attr("id");
  $('#comment_id').val(comment_id);
  $('#comment_name').focus();
 });
 
});
</script>

