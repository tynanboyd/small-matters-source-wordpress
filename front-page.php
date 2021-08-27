<?php

    if (!defined('ABSPATH')) {
        exit;
    } // Exit if accessed directly

    get_header();

    $context = Timber::context();
    $context['post'] = new TimberPost();

    $context['hero'] = get_field('hero');
    $context['page_for_posts'] = get_permalink(get_option('page_for_posts'));

    $context['gatsby_link'] = 'https://smallmatters.ca' . $_SERVER['REQUEST_URI'];

    Timber::render('front-page.twig', $context);

    get_footer();
