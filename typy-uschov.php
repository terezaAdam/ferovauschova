<?php
$pageTitle = 'Typy úschov – soudní, bankovní, realitní';
$pageDesc  = 'Přehled typů úschov peněz při koupi a prodeji nemovitosti: soudní úschova, úschova u realitní kanceláře, bankovní úschova a na co si dát pozor.';
include 'includes/header.php';
$c = fuContent('typy_uschov');
?>

<section class="page-hero">
  <div class="container">
    <h1 class="page-hero__title"><?= htmlspecialchars($c['hero_title']) ?></h1>
    <p class="page-hero__desc"><?= htmlspecialchars($c['hero_desc']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container">

    <div class="services-mobile-tabs">
      <div class="services-mobile-tabs__scroll">
        <?php foreach ($c['sections'] as $i => $s): ?>
        <button class="smt-btn<?= $i === 0 ? ' active' : '' ?>" data-target="<?= htmlspecialchars($s['id']) ?>"><?= htmlspecialchars($s['tab_label']) ?></button>
        <?php endforeach; ?>
      </div>
    </div>

    <div class="services-layout">

      <nav class="services-nav" aria-label="Obsah stránky">
        <ul>
          <?php foreach ($c['sections'] as $s): ?>
          <li><a href="#<?= htmlspecialchars($s['id']) ?>"><?= htmlspecialchars($s['nav_label']) ?></a></li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <div>
        <?php foreach ($c['sections'] as $i => $s): ?>
        <div id="<?= htmlspecialchars($s['id']) ?>" class="service-section<?= $i === 0 ? ' active' : '' ?>">
          <h2><?= htmlspecialchars($s['title']) ?></h2>
          <?= $s['body_html'] ?>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <h2><?= htmlspecialchars($c['cta_title']) ?></h2>
    <p><?= htmlspecialchars($c['cta_text']) ?></p>
    <a href="/kontakty.php" class="btn btn--primary">Nezávazně poptat úschovu</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
