<?php get_header(); ?>

<main class="single-blog-container">
    <div class="container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="single-blog-post">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="featured-image">
                        <?php the_post_thumbnail('large', ['class' => 'img-fluid']); ?>
                    </div>
                <?php endif; ?>

                <div class=""
                style="
                max-width: 100vw !important;
                white-space: pre-line !important;
                overflow-wrap: break-word !important;
                "
                >
                    <?php the_content(); ?>
                </div>

                <footer class="blog-footer">
                    <div class="post-categories">
                        <i class="fas fa-folder"></i>
                        <?php the_category(', '); ?>
                    </div>
                    <div class="post-tags">
                        <i class="fas fa-tags"></i>
                        <?php the_tags('', ', '); ?>
                    </div>
                </footer>
            </article>

            <?php
            // Previous/Next post navigation
            the_post_navigation(array(
                'prev_text' => '<i class="fas fa-arrow-left"></i> %title',
                'next_text' => '%title <i class="fas fa-arrow-right"></i>',
            ));
            ?>

            <?php
            // If comments are open or we have at least one comment, load up the comment template.
            if (comments_open() || get_comments_number()) :
                comments_template();
            endif;
            ?>

        <?php endwhile; ?>
    </div>
</main>

<style>
.single-blog-container {
    padding: 4rem 0;
    background-color: #f8f9fa;
}

.single-blog-post {
    background: #fff;
    border-radius: 10px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
    padding: 2rem;
    margin-bottom: 2rem;
}

.blog-header {
    margin-bottom: 2rem;
    text-align: center;
}

.blog-title {
    font-size: 2.5rem;
    color: #333;
    margin-bottom: 1rem;
}

.blog-meta {
    color: #666;
    font-size: 0.9rem;
}

.blog-meta span {
    margin: 0 1rem;
}

.featured-image {
    margin: 2rem 0;
    border-radius: 8px;
    overflow: hidden;
}

.featured-image img {
    width: 100%;
    height: auto;
    object-fit: cover;
}

.blog-content {
    font-size: 1.1rem;
    line-height: 1.8;
    color: #444;
}

.blog-content p {
    margin-bottom: 1.5rem;
}

.blog-footer {
    margin-top: 3rem;
    padding-top: 1.5rem;
    border-top: 1px solid #eee;
    color: #666;
}

.post-categories, .post-tags {
    margin: 0.5rem 0;
}

.post-navigation {
    margin: 2rem 0;
    padding: 1rem;
    background: #fff;
    border-radius: 8px;
    box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);
}

.post-navigation a {
    color: #333;
    text-decoration: none;
    transition: color 0.3s ease;
}

.post-navigation a:hover {
    color: #007bff;
}

@media (max-width: 768px) {
    .single-blog-container {
        padding: 2rem 0;
    }

    .blog-title {
        font-size: 2rem;
    }

    .blog-meta span {
        display: block;
        margin: 0.5rem 0;
    }
}
</style>

<?php get_footer(); ?>
