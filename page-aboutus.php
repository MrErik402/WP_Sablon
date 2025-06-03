<?php
/* Template Name: About Us Page Template */
get_header(); ?>

<div class="aboutus-perfect-bg">
  <div class="aboutus-perfect-flex">
    <div class="aboutus-perfect-img"></div>
    <div class="aboutus-perfect-text">
      <h2>Rólunk</h2>
      <p>
        Üdvözöljük a Finom Étteremben!<br>
        Éttermünk családi vállalkozásként indult, ahol a minőségi alapanyagok és a vendégszeretet a legfontosabb értékek. Célunk, hogy minden vendégünk otthon érezze magát, és felejthetetlen gasztronómiai élményben részesüljön.
      </p>
      <p>
        Kóstolja meg házi készítésű péksüteményeinket, kenyereinket és különleges kávéinkat!<br>
        Szeretettel várjuk minden nap!
      </p>
    </div>
  </div>

  <div class="aboutus-center-content">
    <div class="aboutus-features-grid">
      <div class="feature-card">
        <div class="feature-icon">🍽️</div>
        <h3>Gasztronómiai Élmény</h3>
        <p>A hagyományok és modern ízek tökéletes harmóniája, ahol minden fogás egy különleges élmény.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">🌱</div>
        <h3>Friss Alapanyagok</h3>
        <p>Kizárólag helyi termelőktől származó, legfrissebb alapanyagokból készítjük ételeinket.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">👨‍🍳</div>
        <h3>Szakértelmünk</h3>
        <p>Évtizedes tapasztalattal rendelkező szakácsaink folyamatosan új recepteket fejlesztenek.</p>
      </div>
      
      <div class="feature-card">
        <div class="feature-icon">❤️</div>
        <h3>Vendégszeretet</h3>
        <p>Minden nap azért dolgozunk, hogy Ön felejthetetlen élményben részesüljön éttermünkben.</p>
      </div>
    </div>
  </div>

  <style>
  .aboutus-center-content {
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 4rem 0;
  }
  .aboutus-features-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 3rem;
    max-width: 1200px;
    margin: 0 auto;
    padding: 0 2rem;
  }
  .feature-card {
    background: #fff;
    padding: 3rem;
    border-radius: 20px;
    text-align: center;
    box-shadow: 0 4px 24px rgba(0,0,0,0.08);
    transition: transform 0.3s ease;
  }
  .feature-card:hover {
    transform: translateY(-5px);
  }
  .feature-icon {
    font-size: 3.5rem;
    margin-bottom: 1.5rem;
  }
  .feature-card h3 {
    font-size: 1.8rem;
    color: #6d4c2a;
    margin-bottom: 1rem;
    font-family: 'Montserrat', Arial, sans-serif;
  }
  .feature-card p {
    font-size: 1.2rem;
    line-height: 1.6;
    color: #666;
    font-family: 'Montserrat', Arial, sans-serif;
  }
  @media (max-width: 900px) {
    .aboutus-features-grid {
      grid-template-columns: 1fr;
      gap: 2rem;
    }
    .feature-card {
      padding: 2rem;
    }
    .feature-icon {
      font-size: 3rem;
    }
    .feature-card h3 {
      font-size: 1.6rem;
    }
    .feature-card p {
      font-size: 1.1rem;
    }
  }
  </style>
</div>

<style>
.aboutus-perfect-bg {
  min-height: 130vh;
  width: 100vw;
  background: #e7ded7; /* marble-like light beige/gray */
  
  box-sizing: border-box;
}
.aboutus-perfect-flex {
  display: flex;
  flex-direction: row;
  height: calc(100vh);
  min-height: 500px;
}
.aboutus-perfect-img {
  flex: 1 1 50%;
  background: url('<?php echo get_template_directory_uri(); ?>/Pictures/left.png') center center/cover no-repeat;
  min-width: 0;
  min-height: 0;
}
.aboutus-perfect-text {
  flex: 1 1 50%;
  display: flex;
  flex-direction: column;
  justify-content: center;
  align-items: flex-start;
  padding: 0 7vw;
  color: #6d4c2a;
  font-family: 'Montserrat', Arial, sans-serif;
  background: transparent;
  min-width: 0;
}
.aboutus-perfect-text h2 {
  font-size: 2.7rem;
  font-weight: bold;
  margin-bottom: 1.5rem;
  letter-spacing: 0.03em;
}
.aboutus-perfect-text p {
  font-size: 1.25rem;
  margin-bottom: 1.2rem;
  line-height: 1.7;
  max-width: 600px;
}
@media (max-width: 900px) {
  .aboutus-perfect-flex {
    flex-direction: column;
    height: auto;
  }
  .aboutus-perfect-img {
    width: 100vw;
    height: 300px;
    min-height: 180px;
  }
  .aboutus-perfect-text {
    padding: 2rem 5vw;
    align-items: center;
    text-align: center;
  }
  .aboutus-perfect-text p {
    max-width: 100%;
  }
}
</style>

<?php get_footer(); ?>
