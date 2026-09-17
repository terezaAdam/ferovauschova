<footer class="footer">
  <div class="container">
    <div class="footer__grid">
      <div>
        <p><?= htmlspecialchars($footerContent['tagline']) ?></p>
      </div>
      <div>
        <h4>Navigace</h4>
        <ul class="footer__links">
          <li><a href="/advokatni-uschova.php">Advokátní úschova</a></li>
          <li><a href="/rady-a-pojmy.php">Rady a pojmy</a></li>
          <li><a href="/typy-uschov.php">Typy úschov</a></li>
        </ul>
      </div>
      <div>
        <h4>Společnost</h4>
        <ul class="footer__links">
          <li><a href="/kontakty.php">Kontakt</a></li>
          <li><a href="/ochrana-osobnich-udaju.php">Ochrana osobních údajů</a></li>
          <li><a href="https://www.equitylegal.cz" target="_blank" rel="noopener">Equity Legal</a></li>
        </ul>
      </div>
      <div>
        <h4>Kontakt</h4>
        <ul class="footer__links">
          <?php foreach (explode("\n", $footerContent['address']) as $line): ?>
          <li><?= htmlspecialchars($line) ?></li>
          <?php endforeach; ?>
          <li><a href="mailto:<?= htmlspecialchars($footerContent['email']) ?>"><?= htmlspecialchars($footerContent['email']) ?></a></li>
          <li><a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $footerContent['phone'])) ?>"><?= htmlspecialchars($footerContent['phone']) ?></a></li>
        </ul>
      </div>
    </div>
    <div class="footer__bottom">
      <span>&copy; <?= date('Y') ?> <?= htmlspecialchars($footerContent['copy']) ?></span>
      <span>Součást <a href="https://www.equitylegal.cz" target="_blank" rel="noopener">Equity Legal</a>, <?= htmlspecialchars($footerContent['partner_text']) ?></span>
    </div>
  </div>
</footer>

<script src="/assets/js/main.js"></script>
</body>
</html>
