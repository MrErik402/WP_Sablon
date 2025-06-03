<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	$url = get_site_url();
    <header>
        <nav class="custom-navbar">
            <ul class="navbar-menu">
                <li class="navbar-item<?php if (is_front_page()) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>">FŐOLDAL</a></li>
                <li class="navbar-item<?php if (is_page('blog')) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>/blog">BLOG</a></li>
                <li class="navbar-item<?php if (is_page('aboutus') || is_page('rolunk')) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>/aboutus">RÓLUNK</a></li>
            </ul>
        </nav>
    </header>
    <style>
        header{
            background-color: transparent;
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            z-index: 100;
        }
    .custom-navbar {
        width: 100%;
        background: rgba(20, 20, 20, 0.7);
        position: absolute;
        top: 0;
        left: 0;
        z-index: 10;
        padding: 0;
    }
    .navbar-menu {
        display: flex;
        justify-content: flex-end;
        align-items: center;
        list-style: none;
        margin: 0;
        padding: 0 3vw;
        height: 70px;
    }
    .navbar-item {
        margin-left: 2.5vw;
        font-family: 'Montserrat', Arial, sans-serif;
        font-size: 1.3rem;
        letter-spacing: 0.08em;
        display: flex;
        align-items: center;
    }
    .navbar-item a {
        color: #bfc2c7;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.2s;
        padding-bottom: 2px;
    }
    .navbar-item.active a {
        color: #fff;
        font-weight: bold;
        border-bottom: 4px solid #fff;
        text-decoration: none;
    }
    .navbar-item a:hover {
        color: #fff;
    }
    @media (max-width: 768px) {
        .navbar-menu {
            height: 50px;
            padding: 0 1vw;
        }
        .navbar-item {
            font-size: 1rem;
            margin-left: 1vw;
        }
    }
    </style>