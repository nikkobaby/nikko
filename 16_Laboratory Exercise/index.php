<?php
    $title = 'Index Page';
    require_once 'includes/header.php';
?>
    <div id = "introduction">
    <p>
    Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
</p>
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
</ol>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="image/school.jfif" alt="First slide" width="800" height="600">
</div>
        <div class="carousel-item active">
            <img class="d-block w-100" src="image/study.jfif" alt="First slide" width="500" height="600">
</div>
        <div class="carousel-item active">
            <img class="d-block w-100" src="image/ground.jfif" alt="First slide" width="500" height="600">
</div>
        <div class="carousel-item active">
            <img class="d-block w-100" src="image/playground.jfif" alt="First slide" width="500" height="600">
</div>
</div>
    <a class="carousel-control-prev" href="#courselExampleIndicators" roles="button" data-slide="prev">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
</a>
</div>


<?php require_once 'includes/footer.php'; ?>