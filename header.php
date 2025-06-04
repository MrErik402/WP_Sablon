<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo( 'name' ); ?> | <?php is_front_page() ? bloginfo( 'description' ) : wp_title( '' ); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header>
    <nav class="custom-navbar"> 
    <div class="navbar-container">
        <!-- Logo on right -->
        <div class="navbar-logo">
            <a href="<?php echo get_site_url(); ?>">
                <img style="width: 160px; height: 100px; scale: 1.2;"
                     src="<?php echo get_template_directory_uri(); ?>/Pictures/logo.png" 
                     alt="Logo" class="logo">
            </a>
        </div>
        <!-- Nav items on left -->
        <ul class="navbar-menu">
            <li class="navbar-item<?php if (is_front_page()) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>">FŐOLDAL</a></li>
            <li class="navbar-item<?php if (is_page('blog')) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>/index.php/blog">BLOG</a></li>
            <li class="navbar-item<?php if (is_page('aboutus') || is_page('rolunk')) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>/index.php/aboutus/">RÓLUNK</a></li>
        </ul>

        
    </div>
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
    .custom-navbar .navbar-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar-logo {
    /* Logo stays on the left by default */
}

.navbar-menu {
    display: flex;
    list-style: none;
    margin: 0;
    padding: 0;
    gap: 20px; /* spacing between menu items */
}

    </style>