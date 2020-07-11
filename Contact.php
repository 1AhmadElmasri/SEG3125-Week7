<?php
    if(isset($_POST['submit'])){
        $full_name = $_POST['sender'];
        $to = "1AhmadElmasri@gmail.com"; 
        $from = $_POST['senderEmail']; 
        
        $subject = "Form submission";
        $message = full_name . " " . " submitted the following : " . "\n\n" . $_POST['message'];
        $_POST['message'];

        $headers = "From:" . $from;
        mail($to,$subject,$message,$headers);
    }
?>
<!DOCTYPE html>
<html>
    
    <head>
        <title>Pantheon</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="navbar.css">
        <link rel="stylesheet" href="IndexBody.css">
        <link rel="stylesheet" href="Contact.css">
        <link rel="icon" href="favicon.ico" type="image/x-icon">
    </head>
    
    
    <body>
        
        <div class="topnav">
            
            <a class = "image-link" href="#">
                <img src="Logo.png" alt="Italian Trulli" width = "50px">
            </a>
            <a class="text-link" href="https://1ahmadelmasri.github.io/SEG3125-Week7/Index.html"><p>Home</p></a>
            <a class = "text-link" href="https://1ahmadelmasri.github.io/SEG3125-Week7/News.html"><p>News</p></a>
            <a class = "active , text-link" href="https://1ahmadelmasri.github.io/SEG3125-Week7/Contact.php"><p>Contact</p></a>
            <a class = "text-link" href="https://1ahmadelmasri.github.io/SEG3125-Week7/About.html"><p>About</p></a>
            
        </div>

        
        
        <div class = "intro-div">
            <form class = "contact-form" method="post" action="">
                <label>Name:</label>
                <input name="sender">

                <label>Email address:</label>
                <input name="senderEmail">

                <label>Message:</label>
                <textarea rows="5" cols="20" name="message"></textarea>

                <input type="submit" name="submit">
            </form>
            
            <img class = "display-image"src="Zeus.jpg" alt="Italian Trulli">
        </div>
    </body>
    
</html>
