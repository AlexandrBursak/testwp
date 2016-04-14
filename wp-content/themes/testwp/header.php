<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 4/13/16
 * Time: 3:23 AM
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/css/reset.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <?php wp_head(); ?>
</head>

<body>
<div>
    <header class="site-header">
        <div class="logo">
            <h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php
            $description = get_bloginfo( 'description', 'display' );
            if ( $description ) : ?>
                <p class="site-description"><?php echo $description; ?></p>
            <?php endif; ?>
        </div>
        <div id="site-header-menu" class="site-header-menu">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                    ) );
                ?>
            <?php endif; ?>
        </div>
        <div class="clear"></div>
    </header>