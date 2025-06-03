<?php get_header(); ?>

<div class="main-content">
    <div class="content-area">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <aside>
           
        </aside>
            <main>
                <article class="post-card">
                    <h2 class="post-title"><?php the_title(); ?> - <?php the_author(); ?></h2>

                    <div class="post-thumbnail">
                        <?php if (has_post_thumbnail()) : ?>
                            <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                        <?php else : ?>
                            <div class="no-thumbnail"></div>
                        <?php endif; ?>
                    </div>

                    <div class="post-content">
                        <?php the_content(); ?>
                    </div>
                </article>
            </main>
        <?php endwhile; else : ?>
            <p>Nem található tartalom.</p>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>