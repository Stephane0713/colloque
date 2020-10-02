<?php
include("./templates/header.php");
include("./templates/navbar.php");
?>
<div class="container">
    <div class="row">

        <div class="col-12 mt-5 mb-2">
            <div class="custom-icon"><i class="fa fa-microphone"></i></div>
            <h1 class="title h2 custom-title">Nom de la coférence</h1>
        </div>
    </div>

    <div class="row">
        <?php include("./templates/asside.dmmy.php"); ?>

        <div class="col-8 offset-1">
            <div class="row">
                <div class="col-12">
                    <iframe width="100%" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
            <div class="row">
                <?php include("./templates/cards.php") ?>
            </div>
        </div>

    </div>
</div>

<?php
include("./templates/footer.php");
