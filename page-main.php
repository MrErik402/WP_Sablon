<?php
/* Template Name: Main Page Template */
get_header(); ?>

<div class="landing-page">
    <div class="landing-content">
        <div class="logo-container">
            <div class="banner-logo">
                <span class="banner-text">FINOM ÉTTEREM</span>
            </div>
        </div>
        <div class="welcome-text">
            <h1>Üdvözöljük a Finom Étteremben</h1>
            <p>Élvezze a hagyományos magyar ízeket modern megközelítéssel, kiváló minőségű alapanyagokból és kreatív elkészítéssel. Vendéglőnkben minden étel egy különleges élmény, amit szívesen megosztunk Önnel.</p>
        </div>
    </div>
</div>

<style>
.landing-page {
    position: relative;
    width: 100%;
    height: 100vh;
    background-image: url('<?php echo get_template_directory_uri(); ?>/Pictures/fooldal.png');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
}

.landing-content {
    text-align: center;
    color: white;
    padding: 2rem;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 10px;
    max-width: 800px;
    width: 90%;
}

.logo-container {
    margin-bottom: 2rem;
}

.banner-logo {
    display: flex;
    justify-content: center;
    align-items: center;
    position: relative;
    height: 80px;
    margin-bottom: 2rem;
}

.banner-logo .banner-text {
    font-family: 'Montserrat', Arial, sans-serif;
    font-size: 2.5rem;
    font-weight: bold;
    color: #fff;
    letter-spacing: 0.15em;
    padding: 0.5em 2em;
    background: rgba(0,0,0,0.3);
    border-top: 4px solid rgba(255,255,255,0.7);
    border-bottom: 4px solid rgba(255,255,255,0.7);
    position: relative;
    z-index: 1;
}

.banner-logo:before,
.banner-logo:after {
    content: '';
    position: absolute;
    top: 50%;
    width: 60px;
    height: 60px;
    border: 4px solid rgba(255,255,255,0.7);
    border-left: none;
    border-right: none;
    z-index: 0;
}

.banner-logo:before {
    left: 0;
    border-right: 4px solid rgba(255,255,255,0.7);
    border-radius: 0 10px 10px 0;
    transform: translateY(-50%) skew(-20deg);
}

.banner-logo:after {
    right: 0;
    border-left: 4px solid rgba(255,255,255,0.7);
    border-radius: 10px 0 0 10px;
    transform: translateY(-50%) skew(20deg);
}

.welcome-text h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    font-weight: bold;
}

.welcome-text p {
    font-size: 1.2rem;
    line-height: 1.6;
}

@media (max-width: 768px) {
    .welcome-text h1 {
        font-size: 2rem;
    }
    
    .welcome-text p {
        font-size: 1rem;
    }
    
    .banner-logo .banner-text {
        font-size: 1.5rem;
        padding: 0.5em 1em;
    }
    .banner-logo:before,
    .banner-logo:after {
        width: 30px;
        height: 30px;
    }
}
</style>

<?php get_footer(); ?>
