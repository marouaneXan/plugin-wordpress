<?php

global $wpdb;
if (isset($_POST['submit'])) {

    $full_name = $_POST['full_name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    $tablename = $wpdb->prefix . "plugin";

    if ($email != '' && $subject != '' && $message != '') {
        $data = $wpdb->get_results("SELECT * FROM " . $tablename . " WHERE email='" . $email . "' ");
        if (count($data) == 0) {
            $insert = "INSERT INTO " . $tablename . "(full_name, email, subject, message) values('" . $full_name . "', '" . $email . "', '" . $subject . "', '" . $message . "') ";
            $wpdb->query($insert);
            echo "Sent sucessfully.";
        }
    }
}

?>
<h1>Add New Message</h1>
<form method='post' action=''>


    <input type='text' id="name" name='full_name' placeholder="Full Name .."> <br><br>

    <input type='email' id="email" name='email' placeholder="Email .."> <br><br>

    <input type='text' id="subject" name='subject' placeholder="Subject .."><br><br>


    <input type='text' id="mssg" name='message' placeholder="Message .."><br><br>

    <span>&nbsp;</span>
    <input type='submit' name='submit' value='Send'>


</form>


<script>
    // full name
    var name = document.getElementById('name');
    // var input_fname = document.getElementById('input_fname');
    const name_display = localStorage['full_name'];
    name.style.display = email_display;
    // email
    var email = document.getElementById('email');
    // var input_fname = document.getElementById('input_fname');
    const email_display = localStorage['email'];
    email.style.display = email_display;
    // input_fname.removeAttribute('required');
    var subject = document.getElementById('subject');
    // var input_fname = document.getElementById('input_fname');
    const sub_display = localStorage['subject'];
    subject.style.display = sub_display;
    var mssg = document.getElementById('mssg');
    // var input_fname = document.getElementById('input_fname');
    const mssg_display = localStorage['message'];
    mssg.style.display = mssg_display;
</script>