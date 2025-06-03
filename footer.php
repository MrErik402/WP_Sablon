<footer class="custom-footer-img">
  <div class="footer-img-overlay">
    <div class="footer-img-content">
      <div class="footer-box">
        <h3>„A jó kenyér időt, törődést és szeretetet kíván.”</h3>
        <p>Nálunk a kenyér több mint étel - ez egy történet, amit minden szelet mesél el.</p>
      </div>
      <div class="footer-box">
        <h3>Tudtad, hogy a kovászos kenyér emésztése könnyebb a szervezetnek?</h3>
        <p>Fedezd fel a kenyér történetét és egészségre gyakorolt hatásait nálunk!</p>
      </div>
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>

<style>



.custom-footer-img {
  background: url('<?php echo get_template_directory_uri(); ?>/Pictures/footer.png') center center/cover no-repeat;
  position: relative;
  overflow-x: hidden;
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: flex-end;
  background-size: auto;
  background-color: #c07c54;
}
.footer-img-overlay {
  width: 50%;
  height: 100%;
  background: rgba(0,0,0,0.00);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  z-index: 2;
  padding: 2.5rem 0;
}
.footer-img-content {
  width: 99vw;
  display: flex;
  flex-direction: row;
  align-items: center;
  justify-content: center;
  gap: 4vw;
}
.footer-box {
  background: rgba(169, 124, 80, 0.95);
  color: #fff;
  border-radius: 30px;
  padding: 2rem 2.2rem;
  max-width: 350px;
  min-width: 220px;
  font-family: 'Montserrat', Arial, sans-serif;
  font-size: 1rem;
  box-shadow: 0 4px 24px rgba(0,0,0,0.10);
  text-align: left;
}
@media (max-width: 900px) {
  .footer-img-content {
    gap: 2vw;
  }
  .footer-box {
    padding: 1.2rem 1rem;
    font-size: 0.95rem;
    max-width: 220px;
  }
}
@media (max-width: 600px) {
  .footer-img-content {
    flex-direction: column;
    gap: 1.2rem;
    width: 100vw;
    align-items: center;
  }
  .footer-box {
    max-width: 90vw;
    min-width: 0;
    padding: 1rem 0.5rem;
    font-size: 0.92rem;
  }
}
</style>