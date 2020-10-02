<?php
include("./templates/header.php");
?>

<div class="row">
    <div class="col-12 col-lg-8 offset-lg-1 order-lg-1">
        <div class="row">
            <div class="col-12">
                <iframe width="100%" height="400" src="https://www.youtube.com/embed/dQw4w9WgXcQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <?php include("./templates/asside.dummy.php"); ?>
</div>
<div class="row">
    <div class="col-12 col-lg-8 offset-lg-4">
        <div class="row">

            <?php for ($i = 0; $i < 6; $i++) { ?>
                <div class="col-12 col-md-6 col-xl-4">
                    <?php include("./templates/card.php") ?>
                </div>
            <?php } ?>

        </div>
    </div>
</div>

<?php
include("./templates/footer.php");
?>