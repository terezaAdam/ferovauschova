<?php
$pageTitle = 'Rady a pojmy – advokátní úschova srozumitelně';
$pageDesc  = 'Kdo platí advokátní úschovu, co je depozitní účet, jistotní účet a jaký je mezi nimi rozdíl.';
include 'includes/header.php';
$c = fuContent('rady_a_pojmy');
?>

<section class="page-hero">
  <div class="container">
    <h1 class="page-hero__title"><?= htmlspecialchars($c['hero_title']) ?></h1>
    <p class="page-hero__desc"><?= htmlspecialchars($c['hero_desc']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="article-body">
      <?= $c['body_html'] ?>
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
