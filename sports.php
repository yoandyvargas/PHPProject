
<?php
    include 'include/header.php';
    $title = "Sports News - Forum";
    $category = "Sports";
    $rsslink = "https://www.espn.com/espn/rss/news";
?>

<div class="image-test2">
    <p class="category"><?php echo $category; ?></p>
    <img class="image-test" src ="images/sportsopacity.jpg" />
</div>

<?php include 'include/newsTemplate.php';
?>


<section class="twitter-content">
<a class="twitter-timeline" data-height="1200" href="https://twitter.com/BleacherReport?ref_src=twsrc%5Etfw">Tweets by BleacherReport</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</section>
</main>

<?php
include 'include/footer.php';
?>

</body>
</html>