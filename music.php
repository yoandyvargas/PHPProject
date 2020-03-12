<?php
    include 'include/header.php';
    $title = "Music News - Forum";
    $category = "Music";
    $rsslink = "http://pitchfork.com/rss/news/";
?>

<div class="image-test2">
    <p class="category"><?php echo $category; ?></p>
    <img class="image-test" src ="./images/musicopacity.jpg" />
</div>

<?php include 'include/newsTemplate.php';
?>

<section class="twitter-content">
<a class="twitter-timeline" data-height="1200" href="https://twitter.com/billboard?ref_src=twsrc%5Etfw">Tweets by billboard</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
</section>

</section>
</main>

<?php
include 'include/footer.php';
?>

</body>
</html>