<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
</head>
<body>
    <?php wp_head();?>

    <!-- header part start -->
    <!-- header part End -->

    <!-- logo part start -->
    <div class="container">
        <div class="row logo_part">
            <div class="col-lg-6 logo_left">
                <a href="#"><?php the_custom_logo();?></a>
            </div>
            <div class="col-lg-6 logo_right">
            </div>
        </div>
    </div>
    <!-- logo part End -->


    <?php wp_footer();?>
</body>
</html>