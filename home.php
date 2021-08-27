<?php

    if (!defined('ABSPATH')) {
        exit;
    } // Exit if accessed directly

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();
    $context['posts'] = new Timber\PostQuery();

    $context['gatsby_link'] = 'https://smallmatters.ca' . $_SERVER['REQUEST_URI'];

    Timber::render( 'home.twig', $context );

    get_footer();
