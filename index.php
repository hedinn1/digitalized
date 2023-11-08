<?php include './head.html' ?>
    <meta name="robots" content="index, follow" /> 
    <title>Digitalized</title> 
    <meta name="description" content="Reviews & ratings on input & output devices such as headphones, mice, monitors, and speakers.">
    <link rel="canonical" href="https://digitalized.blog">
</head>

<body>

<?php
$postgradient= "linear-gradient(0deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,1) 100%), ";
$aatitle = "Digitalized is a participant in the Amazon Services
LLC Associates Program, an affiliate advertising 
program designed to provide a means for us to earn 
fees by linking to Amazon.com and affiliated sites.";
/*
$server = "localhost";
$username = "root";
$password = "";
$dbname = "dbphpsearch";

$conn = mysqli_connect($server, $username, $password, $dbname);

*/
function get_timeago( $ptime )
{
$etime = time() - $ptime;

if( $etime < 1 )
{
    return 'less than '.$etime.' second ago';
}

$a = array( 12 * 30 * 24 * 60 * 60  =>  'year',
            30 * 24 * 60 * 60       =>  'month',
            24 * 60 * 60            =>  'day',
            60 * 60             =>  'hour',
            60                  =>  'minute',
            1                   =>  'second'
);

foreach( $a as $secs => $str )
{
    $d = $etime / $secs;

    if( $d >= 1 )
    {
        $r = round( $d );
        return 'Updated '. $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
    }
}
}

?>

<header>
    <div class="headerdiv">
        <a href="#" class="digit"  >
          <img src="/images/digitalizedwhite.svg"alt="logo for digitalized">
        </a>
        <div class="flex headerbuttons">
        <a style="padding: 0 1em;margin-right:0.8em" class="textcenter borderbutton flexcenter radius regular smallfont disappear" href="/about/">About Us</a>
        <a style="padding: 0 1em;margin-right:0.8em" class="textcenter borderbutton flexcenter radius regular smallfont disappear" href="/contact/">Contact Us</a>
        <form class="flex" style="justify-content:flex-end;margin-left: auto;" action="/search/index.php" method="POST">
    <input style="padding:0 0.5em 0 1em;border-radius: 0.6cm 0 0 0.6cm;" class="borderbutton search" type="search" name="search" placeholder="Search">
    <button style="padding:0 1em;border-radius: 0 0.6cm 0.6cm 0;cursor:pointer;" class="borderbutton"  type="submit" name="submit-search"><img class="searchimg" src="/images/search.svg" alt=""></button>
</form>
</div>
      </header>
      <div class="filler"></div>

</div>

<div class="introimg">
<?php echo file_get_contents("./images/digitalized.svg"); ?>
</div>

  <main>

<div class="category radius slideup">
      
  <a href="/headphones/" >
    <div >
    <?php echo file_get_contents("./images/headphonesblack.svg"); ?>
    </div>
    <h2>Headphones</h2>
  </a>
  <a href="/earbuds/" >
    <div>
    <?php echo file_get_contents("./images/earbudsblack.svg"); ?>
    </div>
    <h2>Earbuds</h2>
  </a>
  <a href="/speakers" >
    <div>
    <?php echo file_get_contents("./images/speakersblack.svg"); ?>
    </div>
    <h2>Speakers</h2>
  </a>
  <a href="/mice" >
    <div>
    <?php echo file_get_contents("./images/miceblack.svg"); ?>
    </div>
    <h2>Mice</h2>
  </a>
  <a href="/keyboards" >
    <div>
    <?php echo file_get_contents("./images/keyboardsblack.svg"); ?>
    </div>
    <h2>Keyboards</h2>
  </a>
  <a href="/monitors" >
    <div>
    <?php echo file_get_contents("./images/monitorsblack.svg"); ?>
    </div>
    <h2>Monitors</h2>
  </a>
</div>



  </main>
  
 
  
  <main>

<div class="list slideup">

<a style="background-image:<?php echo $postgradient ?>url(/images/headset.jpg);" class="post postwidth radius grid nomargin" href="./6-best-headphones-overall/">
<div class="twobmargin">
  <h2 class="bold postfont">6 Best Headphones Overall</h2>
  <div class="flex smallfont">
    <?php echo file_get_contents("./images/clock.svg"); ?>
        <time><?php echo get_timeago(filemtime("6-best-headphones-overall/index.php")); ?></time>
    </div>
  </div>
  <div class="smallfont radius textcenter toplink postbutton">Read More</div>
</a>

<a style="background-image:<?php echo $postgradient ?>url(/images/earbudsphoto.jpg);" class="post postwidth radius grid nomargin" href="/6-best-earbuds-overall/">
<div class="twobmargin">
  <h2 class="bold postfont">6 Best Earbuds Overall</h2>
  <div class="flex smallfont">
    <?php echo file_get_contents("./images/clock.svg"); ?>
        <time><?php echo get_timeago(filemtime("6-best-earbuds-overall/index.php")); ?></time>
    </div>
  </div>
  <div class="smallfont radius textcenter toplink postbutton">Read More</div>
</a>

<a style="background-image:<?php echo $postgradient ?>url(/images/speakerphoto.jpg);" class="post postwidth radius grid nomargin" href="/6-best-speakers-overall/">
  <div class="twobmargin">
  <h2 class="bold postfont">6 Best Speakers Overall</h2>
  <div class="flex smallfont">
    <?php echo file_get_contents("./images/clock.svg"); ?>
        <time><?php echo get_timeago(filemtime("6-best-speakers-overall/index.php")); ?></time>
    </div>
  </div>
  <div class="smallfont radius textcenter toplink postbutton">Read More</div>
</a>

</div>

</main>


  
  <main class="radius slideup" style="background-color: rgb(255, 150, 0);">
   
<div class="twopadding" style="padding-bottom:0">
  <div class="hugefont bold whitefont">Today's Best Deals</div>
<p class="whitefont" style="cursor: help;" title="<?php echo $aatitle ?>">We may make a commission for purchases made through our links.</p>
</div>
<div id="dealscontainer" class="radius">

<a rel="nofollow noopener" target="_blank" href="https://www.amazon.com/Bluetooth-Speakers-Portable-Wireless-Waterproof/dp/B087Q9YVDX?&linkCode=ll1&tag=digitalized-20&linkId=d02946399cbf36dd98c4f4588337e63a&language=en_US&ref_=as_li_ss_tl" class="deals radius nomargin grid">
  <h2 class="largefont">Vanzon X5 Pro</h2>
  <div class="dealsdiv">
  <img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B087Q9YVDX&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=digitalized-20&language=en_US" >
  </div>
  <div style="margin-left:0;" class="smallfont radius textcenter toplink postbutton whitefont">View on Amazon <b>74% off</b></div>
</a>
<a rel="nofollow noopener" target="_blank" href="https://www.amazon.com/TOZO-T6-Bluetooth-Headphones-Waterproof/dp/B08F263NLG?&linkCode=ll1&tag=digitalized-20&linkId=c6d56fe43875d4c500e66d4718eee0b0&language=en_US&ref_=as_li_ss_tl" class="deals radius nomargin grid">
  <h2 class="largefont">TOZO T6</h2>
  <div class="dealsdiv">
  <img border="0" src="//ws-na.amazon-adsystem.com/widgets/q?_encoding=UTF8&ASIN=B08F263NLG&Format=_SL250_&ID=AsinImage&MarketPlace=US&ServiceVersion=20070822&WS=1&tag=digitalized-20&language=en_US" >
  </div>
  <div style="margin-left:0;" class="smallfont radius textcenter toplink postbutton whitefont">View on Amazon <b>43% off</b></div>
</a>
</div>

  </main>

</div>





<?php
  include 'footer.html'
?>
















</body>
</html>