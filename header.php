<header>
    <div class="headerdiv">
        <a href="/" class="digit"  >
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
      <div class="tescontainer">
        <div class="testest obr">
        <a class="borderbutton radius" id="headphones" href="../headphones/" ><figcaption style="margin: auto ;">Headphones</figcaption><div class="tesbutton"><?php echo file_get_contents("../images/headphonesblack.svg"); ?></div></a>
        <a class="borderbutton radius" id="earbuds" href="../earbuds/" ><figcaption style="margin: auto;">Earbuds</figcaption><div class="tesbutton"><?php echo file_get_contents("../images/earbudsblack.svg"); ?></div></a>
        <a class="borderbutton radius" id="speakers" href="/speakers" ><figcaption style="margin: auto;">Speakers</figcaption><div class="tesbutton"><?php echo file_get_contents("../images/speakersblack.svg"); ?></div></a>
        <a class="borderbutton radius" id="mice" href="/mice" ><figcaption style="margin: auto;">Mice</figcaption><div class="tesbutton"><?php echo file_get_contents("../images/miceblack.svg"); ?></div></a>
        <a class="borderbutton radius" id="keyboards" href="/keyboards" ><figcaption style="margin: auto;">Keyboards</figcaption><div class="tesbutton"><?php echo file_get_contents("../images/keyboardsblack.svg"); ?></div></a>
        <a class="borderbutton radius" id="monitors" href="/monitors" ><figcaption style="margin: auto;">Monitors</figcaption><div class="tesbutton"><?php echo file_get_contents("../images/monitorsblack.svg"); ?></div></a>
        </div>
      </div>
        
      

      <?php


$aatitle= "Digitalized is a participant in the Amazon Services
LLC Associates Program, an affiliate advertising 
program designed to provide a means for us to earn 
fees by linking to Amazon.com and affiliated sites.";

$postgradient= "linear-gradient(0deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,1) 100%), ";

$articlegradient= "linear-gradient(180deg, rgba(0,0,0,0.1) 0%, rgba(0,0,0,1) 100%), ";


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
        return 'Updated'. ' '. $r . ' ' . $str . ( $r > 1 ? 's' : '' ) . ' ago';
    }
}
}


$server = "localhost";
$username = "digitzed";
$password = "k32vRFZy2pSR";
$dbname = "digitzed_post";

$conn = mysqli_connect($server, $username, $password, $dbname);

?>