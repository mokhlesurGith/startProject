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
    <header class="container-fluid slider">

        <div class="row">


        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <?php
                    $x=0;
                    while(have_posts()){ the_post();
                    $x++;
                ?>
                    <div class="carousel-item <?= ($x==1)?'active':''?>">
                        <?php the_post_thumbnail();?>
                        <!-- <img src="..." class="d-block w-100" alt="..."> -->
                    </div>
                <?php }?>
                <!-- <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div> -->
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
            </div>
        </div>

    </header>
    <!-- header part End -->

    <!-- logo part start -->
    <div class="container-fluid">
        <div class="row logo_part">
            <div class="col-lg-6 logo_left">
                <a href="#"><?php the_custom_logo();?></a>
            </div>
            <div class="col-lg-6 logo_right text-end">
                <?php dynamic_sidebar('bdlogo');?>
            </div>
        </div>
    </div>
    <!-- logo part End -->

    <!-- menu part start -->
    <section class="container-fluid main_menu">
        <div class="container menu_1 navbar-expand">
            <?php wp_nav_menu( array(
                'theme_location'=> 'TM',
                'menu_class' => 'navbar-nav',
            ))?>
        </div>
    </section>
    <!-- menu part End -->

    <!-- hero part start -->
    <section class="container hero my-4">
        <div class="row hero_top m-auto w-75 text-center">
            <h1 class="h3 mb-3">Welcome to <span class="text-danger">PADMA MULTIPURPOSE BRIDGE PROJECT</span></h1>
            <p class="text-muted">The Padma Bridge is a multipurpose road-rail bridge across the Padma River to be constructed in Bangladesh. When completed it will be the largest bridge in Bangladesh and the first fixed river crossing for road traffic. It will connect Louhajong, Munshiganj to Shariatpur and Madaripur, linking the south-west of the country, to northern and eastern regions.</p>
        </div>
        <div class="row hero_bottom">
            <div class="col-sm-4">
                <div class="card text-center" style="width: 18rem;">
                    <?php dynamic_sidebar('hbimg');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody');?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width: 18rem;">
                    <?php dynamic_sidebar('hbimg');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody');?>
                    </div>
                </div>
            </div>
            <div class="col-sm-4">
                <div class="card text-center" style="width: 18rem;">
                    <?php dynamic_sidebar('hbimg');?>
                    <!-- <img src="..." class="card-img-top" alt="..."> -->
                    <div class="card-body">
                        <?php dynamic_sidebar('hbbody');?>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- hero part end -->


    <?php wp_footer();?>
</body>
</html>