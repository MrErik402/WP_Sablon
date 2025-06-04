<?php get_header(); ?>

<style>
    .not-found-hero {
    background: url('<?php echo get_template_directory_uri(); ?>/Pictures/fooldal.png') no-repeat center center;
    background-size: cover;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    color: white;
    text-align: center;
    position: relative;
    padding: 2rem;
}

.not-found-overlay {
    background-color: rgba(0, 0, 0, 0.6);
    padding: 3rem;
    border-radius: 15px;
    max-width: 600px;
    width: 100%;
    box-sizing: border-box;
}

.not-found-overlay h1 {
    font-size: 3rem;
    margin-bottom: 1rem;
}

.not-found-overlay p {
    font-size: 1.2rem;
}

.not-found-overlay a {
    display: inline-block;
    margin-top: 2rem;
    padding: 0.75rem 1.5rem;
    background-color: #ffffff;
    color: #000000;
    border-radius: 8px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease;
}

.not-found-overlay a:hover {
    background-color: #f0f0f0;
}

/* === RESZPONZÍVÍTÁS === */
@media (max-width: 768px) {
    .not-found-overlay {
        padding: 2rem;
    }

    .not-found-overlay h1 {
        font-size: 2.2rem;
    }

    .not-found-overlay p {
        font-size: 1rem;
    }

    .not-found-overlay a {
        padding: 0.6rem 1.2rem;
        font-size: 0.95rem;
    }
}

@media (max-width: 480px) {
    .not-found-overlay {
        padding: 1.5rem;
    }

    .not-found-overlay h1 {
        font-size: 1.8rem;
    }

    .not-found-overlay p {
        font-size: 0.95rem;
    }

    .not-found-overlay a {
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
    }
}

</style>

<div class="not-found-hero">
    <div class="not-found-overlay">
        <h1>Hibakód: <span style="color: red;">404</span></h1>
        <p>"<i><strong>Ó, kegyelmes látogatónk!</strong><br> Úgy tűnik, e honlapnak ama szeglete, melyet keres vala, bizony elveszett az idő ködében, vagy talán soha nem is volt megteremtve e földi világon. Kérünk, ne búsulj – tárva nyitva áll fogadónk főkapuja, hol sokféle tartalom, ízes gondolat és mennyei falat várja kegyelmedet.Fordulj vissza a főasztalhoz, s nézz körül újra nálunk örömmel!</i>".<br>De van még sok más finomság!</p>
        <a href="<?php echo home_url(); ?>">Visszatérés a főoldalra</a>
    </div>
</div>

<?php get_footer(); ?>