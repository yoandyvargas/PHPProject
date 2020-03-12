<?php
    include 'include/header.php';
    $title = "Tech News - Forum";
    $category = "Tech";
    $rsslink = "http://feeds.wired.com/wired/index";
    ?>


<div class="image-test2">
    <p class="category"><?php echo $category; ?></p>
    <img class="image-test" src ="images/techopacity.jpg" />
</div>

<?php include 'include/newsTemplate.php';
?>

<section class="twitter-content">
<a class="twitter-timeline" data-height="1200" href="https://twitter.com/TechCrunch?ref_src=twsrc%5Etfw">Tweets by TechCrunch</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</section>
</main>

<?php
include 'include/footer.php';
?>

</body>
</html>