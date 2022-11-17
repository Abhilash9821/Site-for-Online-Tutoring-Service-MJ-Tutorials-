<html>
    <head>
        <title>contact</title>
        <link rel="stylesheet" href="style.css"> 
    </head>
    <body>
        <div class="contact-form">
        <h2>contact us</h2>
        <form method="post" action="">
            <input type="text" name="name" placeholder="your name" required>
            <input type="text" name="phoone" placeholder="Phone no" required>
            <input type="email" name="email" placeholder="your Email" required>
            <textarea name="message" placeholder="your message" required></textarea>
            <input type="submit" name="submit" value="send message">
         </form>
         <div class="status">
          <?php
          if(isset($_POST['submit']))
          {
            $user_name =$_POST['name'];
            $phone = $_POST['phone'];
            $user_email = $_POST['email'];
            $user_message = $_post['meassage'];


            $email_from = 'noreply@ab01289hi.com';
            $email_subject = "new form submission";
            $email_body = "Name: $user_name.\n".
                           "Phone_no: $phone.\n".
                           "Email id: $user_email.\n".
                           "User Message: $user_message.\ n";
 
            $to_email = "ab01289hi@gmail.com";
            $headers = "FROM: $email_from \r\n";
            $headers = "Reply-To: $user_email \r\n";   
            


                mail($to_email,$email_subject,$email_body,$headers);
                echo "Message sent successfully";
            
            


          }
          ?>
         </div>
        </div>
    </body>
</html>