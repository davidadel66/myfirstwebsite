<!DOCTYPE html>
<?php
echo "<pre>";

    print_r($_POST);

echo '</pre>';
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="./contact_2.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="app.js"></script>

</head>
<body>
    <div id="myMenu" class="dropdown">
        <a href="javascript: void(0)" class="buttonX" onclick="closeMenu()">&times;</a>
    <div class="dropdown-lists">
        <a href="./home.html">home.</a>
        <a href="./contact_2.html">contact.</a>
        <a href="./loki.html">loki.</a>
    </div>
    </div>
    

    <span class="hamburger" onclick="openMenu()">&#9776;</span>

    
    <div class="container">
        <form action="contact.php" method="POST" class="form">
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Full Name" tabindex="1" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" tabindex="2" required>
            </div>
            <div class="form-group">
                <label for="subject" class="form-label">Subject</label>
                <input type="subject" class="form-control" id="subject" name="subject" placeholder="Subject Title" tabindex="3" required>
            </div>
            <div class="form-group">
                <label for="" class="form-label">Message</label>
                <textarea class="form-control" rows="5" cols="50" id="message" name="message" placeholder="Enter message" tabindex="4"></textarea>
                <button type="submit" class="btn"> Send message!</button>
            </div>
        </form>
    </div> 
</body>
</html>