<!doctype html>

<html class="no-js" <?php language_attributes(); ?> >

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">

    <?php $faviconPath = get_stylesheet_directory_uri() . '/public/images/favicons/' ;?>

    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="<?php echo $faviconPath; ?>apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="<?php echo $faviconPath; ?>apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="<?php echo $faviconPath; ?>apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="<?php echo $faviconPath; ?>apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="<?php echo $faviconPath; ?>apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="<?php echo $faviconPath; ?>apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="<?php echo $faviconPath; ?>apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="<?php echo $faviconPath; ?>apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="<?php echo $faviconPath; ?>favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="<?php echo $faviconPath; ?>favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="<?php echo $faviconPath; ?>favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="<?php echo $faviconPath; ?>favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="<?php echo $faviconPath; ?>favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;"/>
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="<?php echo $faviconPath; ?>mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="<?php echo $faviconPath; ?>mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="<?php echo $faviconPath; ?>mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="<?php echo $faviconPath; ?>mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="<?php echo $faviconPath; ?>mstile-310x310.png" />

    <meta name="msapplication-TileColor" content="#00ffd3">
    <meta name="theme-color" content="#00ffd3">

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <?php
        $context = Timber::context();
        Timber::render('header.twig', $context);
    ?>
