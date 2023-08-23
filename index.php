<?php
session_start();
    

    include("connection.php");
    include("functions.php");
    $user_data = check_login($con);

    $_SESSION;


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>my website</title>
    <link rel="stylesheet" href="styles.css">

</head>
<body>

    
    <div class="social-icons">
        
        <a href="https://www.facebook.com" class="social-icon facebook">
            <img src="facebook-logo.png" alt="Facebook Icon">
            
        </a>
        <a href="https://www.instagram.com"  class="social-icon instagram">
            <img src="Instagram-logo.png" alt="Instagram Icon">
           
        </a>
        <a href="https://www.linkedin.com/in/boyana-ivanova-683220272/"  class="social-icon linkedin">
            <img src="linkedin-logo.png" alt="LinkedIn Icon">
            
        </a>
        <a href="https://github.com/BoyanaIvanova7078"  class="social-icon github">
            <img src="github-logo.png" alt="GitHub Icon">
            
        </a>
    </div>
    

    <h1>
    hello, <?php echo $user_data ['user_name']; ?>
</h1>
</body>
</html>