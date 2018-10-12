<!-- The template for displaying the header -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS and style.css-->
        <?php wp_head() ?>
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
        <!-- Style CSS -->


    </head>
    <body>
        <!-- Nav Bars -->
        <div class="container-fluid nav-background" >
            <!-- Nav Bar info contact an search-->
            <nav class="navbar navbar-light nav-var-info pull-right">
                <form class="desktop-region-info form-inline flex-column flex-sm-row ml-auto">

                    <a class="a-contact" href="mailto:info@thebusinessdoc.com"><i class="fa fa-envelope mr-sm-3" aria-hidden="true"><span  class="pl-1 info-contact-home">info@thebusinessdoc.com</span></i></a>
                    <a class="a-contact" href="tel:(586) 977-7930"><i class="fa fa-phone mr-sm-3" aria-hidden="true" ><span  class="pl-1 info-contact-home">(586) 977-7930</span></i></a>
                    <i class="fa fa-search" aria-hidden="true"></i>
                </form>
            </nav>
            <!-- Main Nav Bar -->
            <nav class="navbar navbar-toggleable-md navbar-inverse ">

                <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <a class="navbar-brand logo-relative" href="<?php bloginfo('url');?>">
                    <img src="<?= get_template_directory_uri() ?>/images/the_business_doctor_logo.png" width="140" height="70" alt="">
                </a>
                <!-- Itemmenu Nav Bar -->

                <?php
                wp_nav_menu(array(
                    'theme_location' => 'main_menu',
                    'container' => 'div',
                    'container_class' => 'collapse navbar-collapse',
                    'container_id' => 'navbarSupportedContent',
                    'items_wrap' => '<ul class="navbar-nav ml-auto">%3$s</ul>',
                    'menu_class' => 'nav-item'
                ));
                ?>
            </nav>

        </div>

        <!-- Title Header-->
        <div class="container-fluid header-titles py-4 px-5" >
            <!-- Loop when send  posts -->

            <?php if (is_category()): ?>
                <h1 class="display-4"> <?php echo single_cat_title() ?></h1>
            <?php else: ?>
                <h1 class="display-4"> <?php the_title(); ?></h1>
            <?php endif ?>


        </div>
