<?php get_header(); ?>

<div class="single-blog-bg">
    <div class="single-blog-container">
        <?php while (have_posts()) : the_post(); ?>
            <article class="single-blog-card">
                <?php if (has_post_thumbnail()) : ?>
                    <div class="single-blog-img-container">
                        <?php the_post_thumbnail('large', ['class' => 'single-blog-img']); ?>
                    </div>
                <?php endif; ?>
                <div class="single-blog-content">
                    <h1 class="single-blog-title"><?php the_title(); ?></h1>
                    <div class="single-blog-meta">
                        <span class="single-blog-date">
                            <?php echo get_the_date('Y.m.d'); ?>
                        </span>
                        <span class="single-blog-author">
                            <?php the_author(); ?>
                        </span>
                    </div>
                    <div class="single-blog-text">
                        <?php the_content(); ?>
                    </div>
                    <div class="single-blog-footer">
                        <div class="single-blog-categories">
                            <?php the_category(', '); ?>
                        </div>
                        <div class="single-blog-tags">
                            <?php the_tags('', ', '); ?>
                        </div>
                    </div>
                </div>
            </article>
            <?php
            the_post_navigation(array(
                'prev_text' => '<span class="nav-arrow">←</span> %title',
                'next_text' => '%title <span class="nav-arrow">→</span>',
            ));
            ?>
            <?php
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
</div>

<style>
.single-blog-bg {
    background: #b87b4a;
    min-height: 100vh;
    width: 100%;
    padding: 100px 20px;
    overflow-x: hidden;
    font-family: 'Montserrat', Arial, sans-serif;
}

.single-blog-container {
    max-width: 900px;
    margin: 0 auto;
    display: flex;
    flex-direction: column;
    gap: 2.5rem;
    position: relative;
    z-index: 2;
}

.single-blog-card {
    background: #6d4c2a;
    border-radius: 30px;
    box-shadow: 0 4px 24px rgba(0,0,0,0.15);
    overflow: hidden;
    display: flex;
    flex-direction: column;
    color: #fff;
}

.single-blog-img-container {
    width: 100%;
    overflow: hidden;
    max-height: 400px;
}

.single-blog-img {
    width: 100%;
    height: 400px;
    object-fit: cover;
    display: block;
    transition: transform 0.5s ease;
}

.single-blog-card:hover .single-blog-img {
    transform: scale(1.03);
}

.single-blog-content {
    padding: 2.5rem 2rem 2rem 2rem;
    display: flex;
    flex-direction: column;
    gap: 1.5rem;
}

.single-blog-title {
    font-size: 2.3rem;
    font-weight: bold;
    margin-bottom: 0.5rem;
    color: #fff;
    letter-spacing: 0.03em;
}

.single-blog-meta {
    display: flex;
    gap: 1.5rem;
    font-size: 1rem;
    color: #e0c9b0;
    margin-bottom: 1rem;
}

.single-blog-date, .single-blog-author {
    background: rgba(0,0,0,0.2);
    padding: 0.4em 1em;
    border-radius: 20px;
}

.single-blog-text {
    font-size: 1.15rem;
    line-height: 1.7;
    color: #fff;
    white-space: pre-line;
    overflow-wrap: break-word;
}

.single-blog-footer {
    display: flex;
    gap: 2rem;
    margin-top: 2rem;
    font-size: 1rem;
    color: #e0c9b0;
}

.single-blog-categories, .single-blog-tags {
    background: #8c6239;
    padding: 0.4em 1em;
    border-radius: 20px;
}

.nav-arrow {
    font-size: 1.3em;
    color: #a97c50;
}

/* Comments Section Styling (themed) */
.comments-section-wrapper {
    margin: 3rem 0;
    text-align: center;
}

.toggle-comments-btn {
    background: #8c6239;
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    font-size: 1.1rem;
    cursor: pointer;
    transition: all 0.3s ease;
    box-shadow: 0 4px 15px rgba(140, 98, 57, 0.2);
    font-family: 'Montserrat', Arial, sans-serif;
}

.toggle-comments-btn:hover {
    background: #a97c50;
    transform: translateY(-2px);
    box-shadow: 0 6px 20px rgba(140, 98, 57, 0.3);
}

.toggle-comments-btn i {
    margin-right: 8px;
}

.comments-container {
    display: none;
    opacity: 0;
    transform: translateX(-100%);
    transition: all 0.5s cubic-bezier(.77,0,.18,1);
    margin-top: 2rem;
}

.comments-container.active {
    display: block;
    opacity: 1;
    transform: translateX(0);
}

.comment-list {
    list-style: none;
    padding: 0;
    margin: 0;
}

.comment {
    background: #fff;
    color: #6d4c2a;
    border-radius: 15px;
    padding: 1.5rem;
    margin-bottom: 1.5rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
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
    color: #6d4c2a;
    font-style: normal;
}

.comment-metadata {
    font-size: 0.9rem;
    color: #8c6239;
    margin-bottom: 1rem;
}

.comment-content {
    color: #6d4c2a;
    line-height: 1.6;
}

.comment-respond {
    background: #fff;
    border-radius: 15px;
    padding: 2rem;
    margin-top: 2rem;
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.08);
}

.comment-respond h3 {
    margin-bottom: 1.5rem;
    color: #6d4c2a;
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
    font-family: 'Montserrat', Arial, sans-serif;
}

.comment-form input[type="text"]:focus,
.comment-form input[type="email"]:focus,
.comment-form input[type="url"]:focus,
.comment-form textarea:focus {
    border-color: #8c6239;
    outline: none;
}

.comment-form .submit {
    background: #8c6239;
    color: white;
    border: none;
    padding: 1rem 2rem;
    border-radius: 50px;
    cursor: pointer;
    transition: all 0.3s ease;
    font-family: 'Montserrat', Arial, sans-serif;
}

.comment-form .submit:hover {
    background: #a97c50;
    transform: translateY(-2px);
}

@media (max-width: 1024px) {
    .single-blog-container {
        padding: 0;
    }
    .single-blog-card {
        border-radius: 20px;
    }
    .single-blog-img {
        height: 250px;
    }
}

@media (max-width: 700px) {
    .single-blog-bg {
        padding: 60px 10px;
    }
    .single-blog-content {
        padding: 1.2rem 0.7rem 1.2rem 0.7rem;
    }
    .single-blog-title {
        font-size: 1.5rem;
    }
    .single-blog-img {
        height: 160px;
    }
}
</style>

<script>
function toggleComments() {
    const commentsContainer = document.getElementById('commentsContainer');
    commentsContainer.classList.toggle('active');
    if (commentsContainer.classList.contains('active')) {
        commentsContainer.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}
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
