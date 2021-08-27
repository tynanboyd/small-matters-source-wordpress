<?php

    if (!defined('ABSPATH')) {
        exit;
    } // Exit if accessed directly

    get_header();

    $context = Timber::context();
    $post = new TimberPost();
    $context['post'] = $post;
    $context['gatsby_link'] = 'https://smallmatters.ca' . $_SERVER['REQUEST_URI'];

    Timber::render('page.twig', $context);

    get_footer();
