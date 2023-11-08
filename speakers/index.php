<?php include '../head.html' ?>
    <link rel="stylesheet" href="../speakersstyle.css">
    <title>Speakers</title> 
    <meta name="description" content="Articles, rankings, and reviews on speakers">
    <link rel="canonical" href="https://digitalized.blog/speakers">
    <meta name="robots" content="index, follow" /> 
  </head>
  
<body>
<?php include '../header.php' ?>
  
  
  
  
<div class="emblemcontainer">
<div class="emblem">
 <?php echo file_get_contents("../images/speakersblack.svg"); ?>
</div>
<h2>Speakers</h2>
</div>


<main>

<div class="list2 slideup">

<a style="background-image:<?php echo $postgradient ?> url(/images/speakerphoto.jpg);" class="post radius grid nomargin mainimg" href="/6-best-speakers-overall/">
  <div class="twobmargin">
  <h2 class="bold largepostfont">6 Best Speakers Overall</h2>
  <div class="flex smallfont">
    <?php echo file_get_contents("../images/clock.svg"); ?>
        <time><?php echo get_timeago(filemtime("../6-best-speakers-overall/index.php")); ?></time>
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
  <div class="hugefont bold whitefont">Today's Best Speakers</div>
<p class="whitefont" style="cursor: help;" title="<?php echo $aatitle ?>">We may make a commission for purchases made through our links.</p>
</div>
<div id="dealscontainer" class="radius">

<a rel="nofollow noopener" target="_blank" href="https://www.amazon.com/gp/product/B07B4Q5587/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B07B4Q5587&linkCode=as2&tag=digitalized-20&linkId=e8af15679e96d97a838be359052a97e5" class="deals radius nomargin grid">
  <h2 class="largefont">Elac Debut 2.0 B6.2</h2>
  <div class="dealsdiv">
  <img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B07B4Q5587&Format=_SL200_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=digitalized-20&language=en_US" >
  </div>
  <div style="margin-left:0;" class="smallfont radius textcenter toplink postbutton whitefont">View on Amazon</div>
</a>
<a rel="nofollow noopener" target="_blank" href="https://www.amazon.com/gp/product/B08JQPPB9F/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B08JQPPB9F&linkCode=as2&tag=digitalized-20&linkId=663584358b4c8649beb2945562d0d2d4" class="deals radius nomargin grid">
  <h2 class="largefont">KEF LS50 Wireless II</h2>
  <div class="dealsdiv">
  <img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B08JQPPB9F&Format=_SL200_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=digitalized-20&language=en_US" >
  </div>
  <div style="margin-left:0;" class="smallfont radius textcenter toplink postbutton whitefont">View on Amazon</div>
</a>
</div>

  </main>





  <?php include '../footer.html' ?>
 





  </body>
  </html>