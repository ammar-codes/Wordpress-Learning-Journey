<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <title><?php bloginfo( 'name' ); ?></title>
    <?php wp_head(); // CRITICAL: This allows plugins to load CSS/JS ?>
</head>
<body <?php body_class(); ?>>
    <nav style="background: #eee; padding: 10px;">
        <strong><?php bloginfo( 'name' ); ?> Navigation</strong>
    </nav>