<?php include '../head.html' ?>
    <title>Contact Us</title>
    <meta name="description" content="contact@digitalized.blog">
    <link rel="canonical" href="https://digitalized.blog/contact">
    <meta name="robots" content="index, follow" /> 
</head>
<body>

<?php include "../header.php" ?>

<div class="emblemcontainer">
<div class="emblem">
 <?php echo file_get_contents("../images/email.svg"); ?>
</div>
<h2 style="font-size: 2.5em;">Contact Us</h2>
</div>


  
    <main class="obr radius slideup">
    
    <form class="grid twopadding" action="contactform.php" method="post">
        <input class="mediumfont radius contactform borderbutton" type="email" name="mail" placeholder="Your e-mail"><br>
        <textarea style="height:5em" class="mediumfont radius borderbutton contactform" name="message" placeholder="Enter your message"></textarea><br>
        <button style="cursor: pointer;" class="mediumfont radius borderbutton contactform"  type="submit" name="submit">Send e-mail</button>
    </form>
    
    
    </main>


<?php include "../footer.html" ?>
</body>

</html>