<?php
    include 'connection.php';
  include 'head_section.php';
  
  
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" type="text/css" href="contactstyle.css">
    <script src="contactscript.js"></script>
</head>
<body>
<div class="container">

<?php include 'navbar.php'; ?>

<div id="contact">
    <br><h1 style="text-align: center;"><b>Contact us</b></h1><br>
    
    <div class="contact">
        <form onsubmit="confirmInput()" >
            <label for="Name">Name</label>
            <input type="text" id="name" name="Name" placeholder="Your name.." required="">

            <label for="message">Message</label>
            <input type="text" id="message" name="message" placeholder="type your message here" required="">

            <label for="email">Email</label>
            <input type="email" id="email" name="email" placeholder="email@you.com" required="">

            <label for="number">Phone Number</label>
            <input type="text" id="number" name="number" placeholder="07xxxxxxx" required="">

            <input type="submit" onclick="myFunction()" value="Submit">
        </form>
    </div>
</div>
<?php 
        include 'footer.php';
    ?>
    </div>
</body>
</html>