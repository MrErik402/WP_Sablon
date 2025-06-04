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
                echo '<div class="comments-section-wrapper">';
                echo '<button class="toggle-comments-btn" onclick="toggleComments()">';
                echo '<i class="fas fa-comments"></i> Megjegyzések';
                echo '</button>';
                echo '<div class="comments-container" id="commentsContainer">';
                comments_template();
                echo '</div>';
                echo '</div>';
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

/* Comments Section Styling */
.comments-section-wrapper {
    margin: 3rem 0;
    text-align: center;
}

.toggle-comments-btn {
    background: #007bff;
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(0, 123, 255, 0.2);
}

.toggle-comments-btn:hover {
    background: #0056b3;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(0, 123, 255, 0.3);
}

.toggle-comments-btn i {
    margin-right: 8px;
}

.comments-container {
    display: none;
    opacity: 0;
    transform: translateX(-100%);
    transition: all 0.5s ease;
    margin-top: 2rem;
}

.comments-container.active {
    display: block;
    opacity: 1;
    transform: translateX(0);
}

/* WordPress Comments Styling */
.comment-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.comment {
    background: white;
    border-radius: 10px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
    transition: transform 0.3s ease;
}

.comment:hover {
    transform: translateY(-3px);
}

.comment-author {
    display: flex;
    align-items: center;
    margin-bottom: 1rem;
}

.comment-author img {
    width: 50px;
    height: 50px;
    border-radius: 50%;
    margin-right: 1rem;
}

.comment-author .fn {
    font-weight: bold;
    color: #333;
    font-style: normal;
}

.comment-metadata {
    font-size: 0.9rem;
    color: #666;
    margin-bottom: 1rem;
}

.comment-content {
    color: #444;
    line-height: 1.6;
}

.comment-respond {
    background: white;
    border-radius: 10px;
    padding: 2rem;
    margin-top: 2rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.comment-respond h3 {
    margin-bottom: 1.5rem;
    color: #333;
}

.comment-form {
    display: grid;
    gap: 1rem;
}

.comment-form input[type="text"],
.comment-form input[type="email"],
.comment-form input[type="url"],
.comment-form textarea {
    width: 100%;
    padding: 0.8rem;
    border: 1px solid #ddd;
    border-radius: 5px;
    transition: border-color 0.3s ease;
}

.comment-form input[type="text"]:focus,
.comment-form input[type="email"]:focus,
.comment-form input[type="url"]:focus,
.comment-form textarea:focus {
    border-color: #007bff;
    outline: none;
}

.comment-form .submit {
    background: #007bff;
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
}

.comment-form .submit:hover {
    background: #0056b3;
    transform: translateY(-2px);
}

@media (max-width: 768px) {
    .comment-author {
        flex-direction: column;
        text-align: center;
    }
    
    .comment-author img {
        margin-right: 0;
        margin-bottom: 0.5rem;
    }
}
</style>

<script>
function toggleComments() {
    const commentsContainer = document.getElementById('commentsContainer');
    commentsContainer.classList.toggle('active');
    
    // Smooth scroll to comments when opening
    if (commentsContainer.classList.contains('active')) {
        commentsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

// Add animation to comments when they appear
document.addEventListener('DOMContentLoaded', function() {
    const comments = document.querySelectorAll('.comment');
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.style.opacity = '1';
                entry.target.style.transform = 'translateY(0)';
            }
        });
    });

    comments.forEach(comment => {
        comment.style.opacity = '0';
        comment.style.transform = 'translateY(20px)';
        comment.style.transition = 'all 0.5s ease';
        observer.observe(comment);
    });
});
</script>

<?php get_footer(); ?>
