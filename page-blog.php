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
            <p><strong>Üdvözlünk a Péksütemények világában!</strong>
            Itt minden a friss, illatos, ropogós és puha finomságokról szól, amelyeket a pékség varázsol az asztalodra. Fedezd fel a legjobb recepteket, tippeket és történeteket, hogy otthon is igazi ínyencségeket készíthess! Csatlakozz hozzánk, és süssünk együtt boldogságot!</p>
        </div>
        <div class="blog-cards-grid">
            <div class="blog-card">
                <div class="blog-card-img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/Pictures/vajasCsiga.png" alt="Vajas Csiga">
                    <div class="blog-card-btn-container">
                        <button class="blog-card-btn">
                            OLVASS TOVÁBB <span class="blog-card-btn-icon">📖</span>
                        </button>
                    </div>
                </div>
                <div class="blog-card-label">VAJAS CSIGA</div>
            </div>
            <div class="blog-card">
                <div class="blog-card-img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/Pictures/kenyer.png" alt="Teljeskiörlésű kenyér">
                    <div class="blog-card-btn-container">
                        <button class="blog-card-btn">
                            OLVASS TOVÁBB <span class="blog-card-btn-icon">📖</span>
                        </button>
                    </div>
                </div>
                <div class="blog-card-label">TELJESKIÖRLÉSŰ KENYÉR</div>
            </div>
            <div class="blog-card">
                <div class="blog-card-img-container">
                    <img src="<?php echo get_template_directory_uri(); ?>/Pictures/kenyer.png" alt="Csokis Kifli">
                    <div class="blog-card-btn-container">
                        <button class="blog-card-btn">
                            OLVASS TOVÁBB <span class="blog-card-btn-icon">📖</span>
                        </button>
                    </div>
                </div>
                <div class="blog-card-label">CSOKIS KIFLI</div>
            </div>
            <!-- Add more cards as needed -->
        </div>
    </div>
</div>

<style>
.blog-landing-bg {
    background: #b87b4a;
    min-height: 100vh;
    width: 100vw;
    padding-top: 100px;
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
    border-radius: 60px 60px 60px 60px;
    padding: 2.5rem 2rem 2.5rem 2.5rem;
    width: 340px;
    min-width: 280px;
    max-width: 400px;
    font-family: 'Montserrat', Arial, sans-serif;
    font-size: 1.1rem;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    position: relative;
    z-index: 2;
}
.blog-info-box h2 {
    font-size: 2.3rem;
    font-weight: bold;
    margin-bottom: 1.2rem;
    letter-spacing: 0.03em;
}
.blog-cards-grid {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2rem;
    flex: 1;
}
.blog-card {
    background: transparent;
    border-radius: 30px 30px 30px 30px;
    overflow: hidden;
    box-shadow: 0 4px 24px rgba(0,0,0,0.10);
    display: flex;
    flex-direction: column;
    align-items: stretch;
    position: relative;
    min-width: 220px;
    transition: transform 0.3s ease;
}
.blog-card:hover {
    transform: translateY(-5px);
}
.blog-card img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    display: block;
}
.blog-card-label {
    background: #6d4c2a;
    color: #fff;
    font-weight: bold;
    font-family: 'Montserrat', Arial, sans-serif;
    font-size: 1.1rem;
    text-align: center;
    padding: 0.7em 0;
    border-radius: 0 0 20px 20px;
    margin-top: -5px;
    letter-spacing: 0.04em;
    text-decoration: underline;
}
.blog-card-btn {
    position: absolute;
    top: 18px;
    right: 18px;
    background: #8c6239;
    color: #fff;
    font-family: 'Montserrat', Arial, sans-serif;
    font-weight: bold;
    font-size: 1rem;
    border: none;
    border-radius: 20px;
    padding: 0.6em 1.5em;
    cursor: pointer;
    display: none;
    align-items: center;
    gap: 0.5em;
    box-shadow: 0 2px 8px rgba(0,0,0,0.10);
    transition: background 0.2s;
}
.blog-card:hover .blog-card-btn {
    display: flex;
}
.blog-card-btn:hover {
    background: #a97c50;
}
.blog-card-btn-icon {
    font-size: 1.3em;
    margin-left: 0.3em;
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
    .blog-cards-grid {
        grid-template-columns: 1fr 1fr;
    }
    .blog-decoration1 {
        width: 180px;
    }
    .blog-decoration2 {
        width: 120px;
    }
    .blog-decoration3 {
        width: 90px;
    }
}
@media (max-width: 700px) {
    .blog-info-box {
        width: 100%;
        max-width: 100%;
        border-radius: 30px;
        padding: 1.5rem 1rem;
    }
    .blog-cards-grid {
        grid-template-columns: 1fr;
        gap: 1.2rem;
    }
    .blog-card img {
        height: 180px;
    }
    .blog-decoration1 {
        width: 90px;
    }
    .blog-decoration2 {
        width: 60px;
    }
    .blog-decoration3 {
        width: 45px;
    }
}
</style>

<?php get_footer(); ?>
