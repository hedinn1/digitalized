<?php include '../head.html' ?>
    <title>Search</title>
    <meta name="robots" content="noindex, nofollow" />
</head>

<?php include '../header.php' ?>

<div class="emblemcontainer">
<div class="emblem">
 <?php echo file_get_contents("../images/search.svg"); ?>
</div>
<h2 style="font-size: 2.5em;">Search</h2>
</div>

<main class="obr radius slideup">
<div class="twopadding">

<form style="grid-template-columns:6fr 1fr;" class="grid" action="index.php" method="POST">
    <input style="border-radius: 0.6cm 0 0 0.6cm;" class="mediumfont borderbutton contactform" type="search" name="search" placeholder="What are you looking for?">
    <button style="cursor: pointer;border-radius:0 0.6cm 0.6cm 0;" class="mediumfont borderbutton contactform"  type="submit" name="submit-search">Search</button>
</form>
<div class="list3" style="margin:2em 0">
    <?php
        if (isset($_POST['submit-search'])) {
            $search = mysqli_real_escape_string($conn, $_POST['search']);
            $sql = "SELECT * FROM post WHERE a_title LIKE '%$search%'";
            $result=mysqli_query($conn, $sql);
            $queryResult=mysqli_num_rows($result);

            if ($queryResult > 0) {
                while ($row = mysqli_fetch_assoc($result)) {$time = get_timeago(filemtime("".$row['a_link']."index.php"));
                    echo "<a style='grid-gap: 0.6em;' class='dealslink radius grid' href='".$row['a_link']."".$row['a_rank']."'>
                    <div class='mediumfont'>".$row['a_title']."</div>
                    <div class='verysmallfont'>
                    <b>$time</b> • ".$row['a_info']."
                    </div>
                    </a>";
                }
            } else {
                echo "There are no results matching your search";
            }
        }
    ?>
</div>
</div>
    </main>
    
    <?php
  include '../footer.html'
?>