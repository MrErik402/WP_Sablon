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
            <!-- LOGO -->
            <div class="navbar-logo">
                <a href="<?php echo get_site_url(); ?>">
                    <img style="width: 160px; height: 100px; scale: 1.2;"
                        src="<?php echo get_template_directory_uri(); ?>/Pictures/logo.png" 
                        alt="Logo" class="logo">
                </a>
            </div>

            <!-- HAMBURGER ICON -->
            <div class="hamburger" id="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>

            <!-- MENU -->
            <ul class="navbar-menu" id="navbar-menu">
                <!-- Statikus elemek -->
                <li class="navbar-item<?php if (is_front_page()) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>">FŐOLDAL</a></li>
                <li class="navbar-item<?php if (is_page('blog')) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>/index.php/blog">BLOG</a></li>
                <li class="navbar-item<?php if (is_page('aboutus') || is_page('rolunk')) echo ' active'; ?>"><a href="<?php echo get_site_url(); ?>/index.php/aboutus/">RÓLUNK</a></li>

                <!-- Dinamikus oldalak -->
                <?php
                $static_slugs = array('blog', 'aboutus', 'rolunk');
                $pages = get_pages();
                foreach ( $pages as $page ) {
                    if ( ! in_array( $page->post_name, $static_slugs ) ) {
                        echo '<li class="navbar-item"><a href="' . get_permalink( $page->ID ) . '">' . esc_html( $page->post_title ) . '</a></li>';
                    }
                }
                ?>
            </ul>
        </div>
    </nav>
</header>

<!-- HAMBURGER TOGGLE SCRIPT -->
<script>
        document.addEventListener("DOMContentLoaded", function () {
        const hamburger = document.getElementById("hamburger");
        const menu = document.getElementById("navbar-menu");
        const navbar = document.querySelector(".navbar-container");

        // Hamburger toggle
        hamburger.addEventListener("click", function () {
            menu.classList.toggle("active");
            hamburger.classList.toggle("open");
        });

        // Funkció, amely ellenőrzi, hogy a menü kifér-e
        function checkMenuOverflow() {
            const menuRightEdge = menu.getBoundingClientRect().right;
            const navbarRightEdge = navbar.getBoundingClientRect().right;

            if (menuRightEdge > navbarRightEdge || window.innerWidth <= 768) {
                hamburger.style.display = "flex";
                menu.classList.remove("desktop");
                menu.classList.remove("active"); // Bezárjuk újraszámolásnál
            } else {
                hamburger.style.display = "none";
                menu.classList.remove("active");
                menu.classList.add("desktop");
            }
        }

        window.addEventListener("resize", checkMenuOverflow);
        checkMenuOverflow();
    });
</script>

<!-- STYLES -->
<style>
    header {
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
        padding: 0;
    }

    .navbar-container {
  display: flex;
  justify-content: space-between;
  align-items: center;
  flex-wrap: wrap; /* FONTOS: így tud törni a tartalom */
  max-width: 100%;
  overflow: hidden; /* ne lógjon ki semmi */
}

    .navbar-logo img {
        max-height: 70px;
    }
    .navbar-menu {
  display: flex;
  flex-wrap: wrap;
  justify-content: flex-end;
  align-items: center;
  list-style: none;
  margin: 0;
  padding: 0 3vw;
  height: auto;
  max-width: 100%;
  overflow-x: auto; /* vízszintesen görgethető, ha nagyon sok pont van */
}

    .navbar-item {
        font-family: 'Montserrat', Arial, sans-serif;
  white-space: nowrap; /* ne törjön sorba */
  margin-left: 1.5vw;
  font-size: 1rem;
  flex-shrink: 0; /* ne szűküljön túl kicsire */
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
    }

    .navbar-item a:hover {
        color: #fff;
    }

    /* HAMBURGER ICON */
    .hamburger {
        display: none;
        flex-direction: column;
        cursor: pointer;
        gap: 5px;
    }

    .hamburger span {
        width: 25px;
        height: 3px;
        background: #fff;
        transition: 0.3s;
    }

    .hamburger.open span:nth-child(1) {
        transform: rotate(45deg) translate(5px, 5px);
    }

    .hamburger.open span:nth-child(2) {
        opacity: 0;
    }

    .hamburger.open span:nth-child(3) {
        transform: rotate(-45deg) translate(5px, -5px);
    }
    .navbar-menu.desktop {
    display: flex !important;
    }

    /* RESPONSIVE */
    @media (max-width: 768px) {
        .navbar-menu {
            position: absolute;
            top: 70px;
            right: 0;
            background: rgba(0, 0, 0, 0.95);
            flex-direction: column;
            width: 100%;
            display: none;
            padding: 1rem 2rem;
        }

        .navbar-menu.active {
            display: flex;
        }

        .hamburger {
            display: flex;
        }

        .navbar-item {
            margin: 10px 0;
            text-align: right;
        }

        .navbar-container {
            padding: 0 1rem;
        }
    }

    @media (max-width: 768px) {
    .navbar-menu {
        display: none;
    }

    .navbar-menu.active {
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 70px;
        right: 0;
        width: 100%;
        background-color: rgba(0,0,0,0.95);
        padding: 1rem 2rem;
    }

    .navbar-item {
        margin: 10px 0;
    }
    .navbar-logo img {
  max-width: 100%;
  height: auto;
  object-fit: contain;
}
}

/* Extra – ha túlcsordul desktopon is */
.navbar-menu:not(.desktop) {
    display: none;
}

.navbar-menu.active {
    display: flex !important;
}
</style>

<?php wp_body_open(); ?>
