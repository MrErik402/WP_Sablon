<?php
/* Template Name: Blog Page Template */
get_header(); ?>

<div class="blog-landing-bg">
    <!-- Decorative images -->
    <img src="<?php echo get_template_directory_uri(); ?>/Pictures/decoration1.png" alt="Decoration 1" class="blog-decoration blog-decoration1">
    <img src="<?php echo get_template_directory_uri(); ?>/Pictures/decoration2.png" alt="Decoration 2" class="blog-decoration blog-decoration2">
    <img src="<?php echo get_template_directory_uri(); ?>/Pictures/decoration3.png" alt="Decoration 3" class="blog-decoration blog-decoration3">
    <div class="blog-container">
        <div class="blog-info-box">
            <h2>BLOG</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="blog-cards-grid">
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => 6,
                'orderby' => 'date',
                'order' => 'DESC'
            );
            
            $blog_query = new WP_Query($args);
            
            if ($blog_query->have_posts()) :
                while ($blog_query->have_posts()) : $blog_query->the_post();
                    $featured_img = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    if (!$featured_img) {
                        $featured_img = get_template_directory_uri() . '/Pictures/kenyer.png'; // Fallback image
                    }
            ?>
                <article class="blog-card" onclick="window.location='<?php echo esc_url(get_permalink()); ?>'">
                    <div class="blog-card-img-container">
                        <img src="<?php echo esc_url($featured_img); ?>" alt="<?php echo esc_attr(get_the_title()); ?>">
                        <div class="blog-card-overlay">
                            <span class="blog-card-date"><?php echo get_the_date('Y.m.d'); ?></span>
                            <a href="<?php echo esc_url(get_permalink()); ?>" class="blog-card-btn">
                                OLVASS TOVÁBB <span class="blog-card-btn-icon">→</span>
                            </a>
                        </div>
                    </div>
                    <div class="blog-card-content">
                        <h3 class="blog-card-title"><?php echo esc_html(get_the_title()); ?></h3>
                        <div class="blog-card-excerpt">
                            <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                        </div>
                    </div>
                </article>
            <?php
                endwhile;
                wp_reset_postdata();
            endif;
            ?>
        </div>
    </div>
</div>

<style>
.blog-landing-bg {
    background: #b87b4a;
    min-height: 100vh;
    width: 100%;
    padding: 100px 20px;
    overflow-x: hidden;
    position: relative;
}

.blog-container {
    display: flex;
    flex-direction: row;
    max-width: 1200px;
    margin: 0 auto;
    gap: 2rem;
    align-items: flex-start;
    position: relative;
    z-index: 2;
}

.blog-info-box {
    background: #6d4c2a;
    color: #fff;
    border-radius: 30px;
    padding: 2.5rem;
    width: 340px;
    min-width: 280px;
    max-width: 400px;
    font-family: 'Montserrat', Arial, sans-serif;
    font-size: 1.1rem;
    box-shadow: 0 4px 24px rgba(0,0,0,0.15);
    position: sticky;
    top: 100px;
}

.blog-info-box h2 {
    font-size: 2.3rem;
    font-weight: bold;
    margin-bottom: 1.2rem;
    letter-spacing: 0.03em;
}

.blog-cards-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 2rem;
    flex: 1;
}

.blog-card {
    background: #6d4c2a;
    border-radius: 20px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.1);
    cursor: pointer;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.blog-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 8px 32px rgba(0,0,0,0.15);
}

.blog-card-img-container {
    position: relative;
    overflow: hidden;
}

.blog-card img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.blog-card:hover img {
    transform: scale(1.05);
}

.blog-card-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: linear-gradient(to bottom, rgba(0,0,0,0.2), rgba(0,0,0,0.6));
    opacity: 0;
    transition: opacity 0.3s ease;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
    padding: 1.5rem;
}

.blog-card:hover .blog-card-overlay {
    opacity: 1;
}

.blog-card-date {
    color: #fff;
    font-family: 'Montserrat', Arial, sans-serif;
    font-size: 0.9rem;
    background: rgba(0,0,0,0.5);
    padding: 0.5em 1em;
    border-radius: 20px;
    align-self: flex-start;
}

.blog-card-content {
    padding: 1.5rem;
}

.blog-card-title {
    color: white;
    font-family: 'Montserrat', Arial, sans-serif;
    font-size: 1.2rem;
    font-weight: bold;
    margin-bottom: 0.8rem;
}

.blog-card-excerpt {
    color: white;
    font-size: 0.95rem;
    line-height: 1.5;
}

.blog-card-btn {
    background: #8c6239;
    color: #fff;
    font-family: 'Montserrat', Arial, sans-serif;
    font-weight: bold;
    font-size: 0.9rem;
    text-decoration: none;
    padding: 0.8em 1.5em;
    border-radius: 25px;
    display: inline-flex;
    align-items: center;
    gap: 0.5em;
    transition: background 0.2s ease;
    align-self: flex-end;
}

.blog-card-btn:hover {
    background: #a97c50;
}

.blog-card-btn-icon {
    font-size: 1.2em;
    transition: transform 0.2s ease;
}

.blog-card-btn:hover .blog-card-btn-icon {
    transform: translateX(4px);
}

.blog-decoration {
    position: absolute;
    z-index: 1;
    pointer-events: none;
    user-select: none;
    opacity: 0.85;
}

.blog-decoration1 {
    left: 0;
    bottom: 0;
    width: 320px;
    max-width: 40vw;
    min-width: 120px;
}

.blog-decoration2 {
    right: 0;
    top: 0;
    width: 220px;
    max-width: 25vw;
    min-width: 80px;
}

.blog-decoration3 {
    right: 0;
    bottom: 0;
    width: 180px;
    max-width: 20vw;
    min-width: 60px;
}

@media (max-width: 1024px) {
    .blog-container {
        flex-direction: column;
        align-items: stretch;
        gap: 2rem;
    }
    
    .blog-info-box {
        position: static;
        width: 100%;
        max-width: none;
    }

    .blog-decoration1 { width: 180px; }
    .blog-decoration2 { width: 120px; }
    .blog-decoration3 { width: 90px; }
}

@media (max-width: 700px) {
    .blog-landing-bg {
        padding: 80px 15px;
    }

    .blog-info-box {
        padding: 1.5rem;
        border-radius: 20px;
    }

    .blog-cards-grid {
        gap: 1.5rem;
    }

    .blog-card img {
        height: 200px;
    }

    .blog-decoration1 { width: 90px; }
    .blog-decoration2 { width: 60px; }
    .blog-decoration3 { width: 45px; }
}
</style>

<?php get_footer(); ?>
