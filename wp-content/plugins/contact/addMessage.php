<?php

global $wpdb;
if(isset($_POST['submit'])){

  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];
  $tablename = $wpdb->prefix."plugin";

     $data = $wpdb->get_results("SELECT * FROM ".$tablename." WHERE email='".$email."' ");
     if(count($data) == 0){
       $insert = "INSERT INTO ".$tablename."(email,subject,message) values('".$email."','".$subject."','".$message."') ";
       $wpdb->query($insert);
       echo "Sent sucessfully.";
     }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>addMessage</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
  
</body>
</html>

<!-- <style>
  .title{
    text-align: center;
  }
</style> -->
<h2 class="text-center">Add New Message</h1>
<form method='post' class="d-flex flex-column align-items-center px-4">
  

      <input type='email' id="email" name='email' placeholder="Email .." class="form-control"> 
    
    <input type='text' id="subject" name='subject' placeholder="Subject .." class="form-control">
 
 
    <input type='text' id="mssg" name='message' placeholder="Message .." class="form-control">

     <span>&nbsp;</span>
     <input type='submit' name='submit' value='Send'>
 

</form>

<!-- Option 1: Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

<script >
  // email
  var email = document.getElementById('email');
  const email_display = localStorage['email'];
  email.style.display = email_display;
  var subject = document.getElementById('subject');
  const sub_display = localStorage['subject'];
  subject.style.display = sub_display;
  var mssg = document.getElementById('mssg');
  const mssg_display = localStorage['message'];
  mssg.style.display = mssg_display;
</script>