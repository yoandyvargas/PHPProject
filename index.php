<?php
    include 'include/header.php';
    $title = "Home - Forum";
    $category = "Music";
?>


<script>
function openPage(){

    window.open("http://www.google.com")
}
    </script>
<div class="background">
<main class="landing-grid">
<section class="landing-title">
<h1>Forum.<br> News that matters to you. <br>Ad-free. Distraction-free.</h1>
<hr>
</section>
<section class="landing-content">
<p>Forum, a news hub built just for you. Minimal, ad-free, curated and focused on being your daily information companion. So that you don’t have to go anywhere else for the latest news on music, tech, and sports. Check out news from all your favorite sources.
    <br><br><button class="click" onclick="window.location.href = 'login.php';">Sign in</button>
</p>
</section>
</main>
</div>


<?php
include 'include/footer.php';
?>
</body>


</html>