<?php
    include 'include/header.php';
    $title = "News For You - Forum";
    include "include/news.css";
    $rsslink = "https://www.espn.com/espn/rss/news";


   /* if (!isset($_SESSION["loggedIn"])) {
        header('Refresh:0.2; url=login.php', true, 303);
    } else { */
        include "include/db_connection.php";

        $id = $_SESSION["userID"];

        $query = "SELECT tag_id FROM user_tag WHERE user_ID = '$id'";
        $result = mysqli_query($connect, $query) or die("SQL Error @tags");

       if (mysqli_num_rows($result) > 0) {
           while ($row = mysqli_fetch_assoc($result)) {
               if ($row["tag_id"] == "1") {
                   $sportsNews = true;
                   $tagCounter = 1;
               }
               if ($row["tag_id"] == "2") {
                   $techNews = true;
                   $tagCounter = 2;
               }
               if ($row["tag_id"] == "3") {
                   $musicNews = true;
                   $tagCounter = 3;
               }
               if ($sportsNews == true && $techNews == true) {
                   $sportsTechNews = true;
                   $tagCounter = 7;
               }
               if ($sportsNews == true && $musicNews == true) {
                   $sportsMusicNews = true;
                   $tagCounter = 4;
               }
               if ($techNews == true && $musicNews == true) {
                   $techMusicNews = true;
                   $tagCounter = 5;
               }
               if ($techNews == true && $sportsNews == true && $musicNews == true) {
                   $allNews = true;
                   $tagCounter = 6;
               }
           }
       } else {
           echo "0 results";
       }

       if ($tagCounter == 6) {
           $urlOne = "consequenceofsound.net/feed";
           $urlTwo = "http://feeds.feedburner.com/TechCrunch";
           $urlThree = "http://api.foxsports.com/v1/rss?partnerKey=zBaFxRyGKCfxBagJG9b8pqLyndmvo7UU";
       }
        if ($tagCounter == 5) {
            $urlOne = "http://www.music-news.com/rss/UK/news?includeCover=true";
            $urlTwo = "http://feeds.feedburner.com/TechCrunch";
            $urlThree = "consequenceofsound.net/feed";
        }

        if ($tagCounter == 4) {
            $urlOne = "http://www.music-news.com/rss/UK/news?includeCover=true";
            $urlTwo = "http://www.cbssports.com/rss/headlines";
            $urlThree = "http://rssfeeds.usatoday.com/UsatodaycomSports-TopStories";
        }

        if ($tagCounter == 3) {
            $urlOne = "consequenceofsound.net/feed";
            $urlTwo = "http://rssfeeds.usatoday.com/UsatodaycomMusic-TopStories";
            $urlThree = "http://www.music-news.com/rss/UK/news?includeCover=true";
        }

        if ($tagCounter == 2) {
            $urlOne = "http://rssfeeds.usatoday.com/usatoday-TechTopStories";
            $urlTwo = "http://feeds.feedburner.com/TechCrunch";
            $urlThree = "https://www.theverge.com/rss/index.xml";
        }

        if ($tagCounter == 1){
            $urlOne = "http://api.foxsports.com/v1/rss?partnerKey=zBaFxRyGKCfxBagJG9b8pqLyndmvo7UU";
            $urlTwo = "http://rssfeeds.usatoday.com/UsatodaycomSports-TopStories";
            $urlThree = "https://rss.nytimes.com/services/xml/rss/nyt/Sports.xml";
   
        }

        if ($tagCounter ==7){
            $urlOne = "http://feeds.feedburner.com/TechCrunch";
            $urlTwo = "http://rssfeeds.usatoday.com/UsatodaycomSports-TopStories";
            $urlThree = "http://www.cbssports.com/rss/headlines";

        }

?>


    <head><link rel="stylesheet" href="css/news.css"></head>

    <body>
<main class="news-wrapper"> 

<section class="content-1">
    <p><blockquote class="embedly-card" data-card-key="ebb7de6b6ca24fff80d7dd010fad7fee" data-card-controls="0"><h4><a href="
    <?php echo $urlOne; ?>
    "></a></h4><p></p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script></p>
</section>

<section class="content-2">
    <p><blockquote class="embedly-card" data-card-key="ebb7de6b6ca24fff80d7dd010fad7fee" data-card-controls="0"><h4><a href="
    <?php echo $urlTwo; ?>"
    ></a></h4><p></p></blockquote>

<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script></p>
</section>

<section class="content-3">
    <p><blockquote class="embedly-card" data-card-key="ebb7de6b6ca24fff80d7dd010fad7fee" data-card-controls="0"><h4><a href="
    <?php echo $urlThree; ?>
    "></a></h4><p></p></blockquote>
<script async src="//cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script></p>
</section>

</main>





<?php
include 'include/footer.php';
?>

</body>
</html>