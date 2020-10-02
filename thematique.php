<?php
include("./templates/header.php");
?>

<div class="row">

    <?php for ($i = 0; $i < 6; $i++) { ?>
        <div class="col-12 col-md-6 col-lg-4 col-xl-3">
            <?php include("./templates/card.php") ?>
        </div>
    <?php } ?>

</div>
<?php
include("./templates/footer.php");
?>