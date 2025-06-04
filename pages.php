<?php
/**
 * Template Name: Oldalak listája
 */

get_header(); ?>

<main class="page-listing">
    <section class="container">
        <h1 class="page-title">Oldalaink</h1>
        <ul class="page-list">
            <?php
            $pages = get_pages([
                'sort_column' => 'menu_order, post_title',
                'sort_order' => 'ASC',
            ]);

            foreach ( $pages as $page ) :
                // Skip the current page if you want
                if ( $page->ID === get_the_ID() ) continue;
            ?>
                <li class="page-list-item">
                    <a href="<?php echo get_permalink($page->ID); ?>">
                        <?php echo esc_html($page->post_title); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </section>
</main>

<style>
.page-listing {
    padding: 100px 20px;
    background-color: #f5f5f5;
    min-height: 100vh;
}

.page-title {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    text-align: center;
}

.page-list {
    list-style: none;
    padding: 0;
    max-width: 600px;
    margin: 0 auto;
}

.page-list-item {
    margin: 10px 0;
    text-align: center;
}

.page-list-item a {
    text-decoration: none;
    color: #222;
    font-size: 1.2rem;
    font-weight: 500;
    transition: color 0.3s;
}

.page-list-item a:hover {
    color: #cc0000;
}


</style>

<?php get_footer(); ?>
