<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>
        <?php
        /*
         * Print the <title> tag based on what is being viewed.
         */
        global $page, $paged;
    
        wp_title( '|', true, 'right' );
    
        // Add the blog name.
        bloginfo( 'name' );
    
        // Add the blog description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) )
            echo " | $site_description";
    
        // Add a page number if necessary:
        if ( $paged >= 2 || $page >= 2 )
            echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
    
        ?>
    </title>
    <!-- Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/<?php bloginfo('template_url') ?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_url') ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link href="<?php bloginfo('template_url') ?>/css/owl.carousel.min.css" rel="stylesheet" type="text/css" />

    <link href="<?php bloginfo('template_url') ?>/css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <link rel="icon" href="<?php bloginfo('template_url') ?>/img/favicon.png" type="image/png" />

    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCP0SlskY4EhA8ktRTPw5HNz42ipiKGYPk"></script>

    <?php wp_head(); ?>

</head>
<body <?php body_class(); ?>>

<main>
    <!-- Static navbar -->
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php url(); ?>">
                    <img src="<?php bloginfo('template_url') ?>/img/logo.png">
                </a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <?php wp_nav_menu(['menu'=>'MainMenu','container'=>'','menu_class'=>'nav navbar-nav navbar-right']); ?>
            </div>
            <!--/.nav-collapse -->
        </div>
        <!--/.container-fluid -->
    </nav>
