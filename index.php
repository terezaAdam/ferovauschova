<?php
$pageTitle = 'Advokátní úschova – úschova, která chrání víc než jen vaše peníze';
$pageDesc  = 'Advokátní úschova při koupi a prodeji nemovitostí. Vaše transakce? V naprostém pořádku. Právně, finančně i lidsky.';
include 'includes/header.php';
$c = fuContent('index');
?>

<section class="hero" aria-label="Úvod">
  <div class="hero__image-side">
    <img src="<?= htmlspecialchars($c['hero_image_url']) ?>" alt="Klíče od nemovitosti" loading="eager">
    <div class="hero__overlay"></div>
  </div>
  <div class="hero__content-side">
    <div class="container">
      <h1 class="hero__title"><?= $c['hero_title'] ?></h1>
      <div class="hero__desc">
        <p><?= htmlspecialchars($c['hero_desc']) ?></p>
      </div>
      <div class="hero__cta">
        <a href="/kontakty.php" class="btn btn--primary"><?= htmlspecialchars($c['hero_cta_primary']) ?></a>
        <a href="/advokatni-uschova.php" class="btn btn--outline-white"><?= htmlspecialchars($c['hero_cta_secondary']) ?></a>
      </div>
    </div>
  </div>
</section>

<section class="section" aria-labelledby="co-je-heading">
  <div class="container">
    <p class="section-label"><?= htmlspecialchars($c['intro_label']) ?></p>
    <h2 class="section-title" id="co-je-heading"><?= htmlspecialchars($c['intro_title']) ?></h2>
    <div class="divider"></div>
    <div class="intro-text"><?= $c['intro_lead_html'] ?></div>
    <div class="values__grid">
      <?php
      $valueIcons = [
        '<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>',
        '<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/><polyline points="14 2 14 8 20 8"/><line x1="9" y1="13" x2="15" y2="13"/><line x1="9" y1="17" x2="15" y2="17"/>',
        '<path d="M12 3v18"/><path d="M5 7l-3 6a3 3 0 0 0 6 0z"/><path d="M19 7l-3 6a3 3 0 0 0 6 0z"/><path d="M5 7h14"/><path d="M9 21h6"/>',
        '<circle cx="12" cy="12" r="9"/><path d="M9 12l2 2 4-4"/>',
      ];
      foreach ($c['values_items'] as $i => $item): ?>
      <div class="value-card fade-in">
        <div class="value-card__icon"><svg viewBox="0 0 24 24"><?= $valueIcons[$i] ?? $valueIcons[0] ?></svg></div>
        <div class="value-card__title"><?= htmlspecialchars($item['title']) ?></div>
        <p><?= htmlspecialchars($item['text']) ?></p>
      </div>
      <?php endforeach; ?>
    </div>
    <div style="text-align:center;margin-top:3rem;">
      <a href="/advokatni-uschova.php" class="btn btn--outline"><?= htmlspecialchars($c['values_link_label']) ?></a>
    </div>
  </div>
</section>

<section class="section section--alt" aria-labelledby="about-heading">
  <div class="container">
    <div class="about__grid">
      <div>
        <p class="section-label"><?= htmlspecialchars($c['about_label']) ?></p>
        <h2 class="section-title" id="about-heading"><?= $c['about_title_html'] ?></h2>
        <div class="divider"></div>
        <?= $c['about_body_html'] ?>
      </div>
      <div class="about__image fade-in">
        <img src="<?= htmlspecialchars($c['about_image_url']) ?>" alt="Konzultace advokátní úschovy">
        <div class="about__accent"></div>
      </div>
    </div>
    <p style="text-align:center;margin-top:2.5rem;font-family:var(--font-h);font-weight:600;color:var(--forest);"><?= $c['about_quote_html'] ?></p>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
