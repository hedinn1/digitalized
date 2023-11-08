<?php include '../head.html' ?> 
    <link rel="stylesheet" href="../micestyle.css">
    <title>Mice</title> 
    <meta name="description" content="Articles, rankings, and reviews on mice">
    <link rel="canonical" href="https://digitalized.blog/mice">
    <meta name="robots" content="index, follow" /> 
  </head>
  
<body>



<?php include '../header.php' ?>
  
  

  
<div class="emblemcontainer">
<div class="emblem">
 <?php echo file_get_contents("../images/miceblack.svg"); ?>
</div>
<h2>Mice</h2>
</div>


<main>

<div class="list2 slideup">

<a style="background-image:<?php echo $postgradient ?> url(/images/micephoto.jpg);" class="post radius grid nomargin mainimg" href="/6-best-mice-overall/">
  <div class="twobmargin">
  <h2 class="bold largepostfont">6 Best Mice Overall</h2>
  <div class="flex smallfont">
    <?php echo file_get_contents("../images/clock.svg"); ?>
        <time><?php echo get_timeago(filemtime("../6-best-mice-overall/index.php")); ?></time>
    </div>
  </div>
  <div class="smallfont radius textcenter toplink postbutton">Read More</div>
</a>
<a style="background-image:<?php echo $postgradient ?>url(/images/wip.svg);" class="post radius grid nomargin" href="/work_in_progress/">
  <div class="twobmargin">
  <h2 class="bold postfont">Work in Progress</h2>
  <div class="flex smallfont">
    <?php echo file_get_contents("../images/clock.svg"); ?>
        <time>N/A</time>
    </div>
  </div>
  <div class="smallfont radius textcenter toplink postbutton">Read More</div>
</a>
<a style="background-image:<?php echo $postgradient ?>url(/images/wip.svg);" class="post radius grid nomargin" href="/work_in_progress/">
  <div class="twobmargin">
  <h2 class="bold postfont">Work in Progress</h2>
  <div class="flex smallfont">
    <?php echo file_get_contents("../images/clock.svg"); ?>
        <time>N/A</time>
    </div>
  </div>
  <div class="smallfont radius textcenter toplink postbutton">Read More</div>
</a>

</div>

</main>


  <main class="radius slideup" style="background-color: rgb(255, 150, 0);">
   
<div class="twopadding" style="padding-bottom:0">
  <div class="hugefont bold whitefont">Today's Best Mice</div>
<p class="whitefont" style="cursor: help;" title="<?php echo $aatitle ?>">We may make a commission for purchases made through our links.</p>
</div>
<div id="dealscontainer" class="radius">

<a rel="nofollow noopener" target="_blank" href="https://www.amazon.com/gp/product/B087LXCTFJ/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B087LXCTFJ&linkCode=as2&tag=digitalized-20&linkId=0351f6159734bd762344881ad47fb1b9" class="deals radius nomargin grid">
  <h2 class="largefont">Logitech G Pro X Superlight</h2>
  <div class="dealsdiv">
  <img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B087LXCTFJ&Format=_SL200_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=digitalized-20&language=en_US" >
  </div>
  <div style="margin-left:0;" class="smallfont radius textcenter toplink postbutton whitefont">View on Amazon</div>
</a>
<a rel="nofollow noopener" target="_blank" href="https://www.amazon.com/gp/product/B07S395RWD/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07S395RWD&linkCode=as2&tag=digitalized-20&linkId=8f33e2a60643ec99fee1b7f3f583cf4e" class="deals radius nomargin grid">
  <h2 class="largefont">Logitech MX Master 3</h2>
  <div class="dealsdiv">
  <img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B07S395RWD&Format=_SL200_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=digitalized-20&language=en_US" >
  </div>
  <div style="margin-left:0;" class="smallfont radius textcenter toplink postbutton whitefont">View on Amazon</div>
</a>
</div>

  </main>





  <?php include '../footer.html' ?>
 





  </body>
  </html>