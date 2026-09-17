<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/layout.php';
requireAuth();

$media = readJson('media.json');

adminHeader('Dashboard', 'dashboard');
?>

<div class="stats-grid">
  <div class="stat-card">
    <div class="stat-card__num">5</div>
    <div class="stat-card__label">Stránek webu</div>
  </div>
  <div class="stat-card">
    <div class="stat-card__num"><?= count($media) ?></div>
    <div class="stat-card__label">Obrázky v médiích</div>
  </div>
</div>

<div class="card">
  <div class="card__title">Rychlé akce</div>
  <div style="display:flex;flex-wrap:wrap;gap:.75rem;">
    <a href="/admin/content-index.php" class="btn btn--primary">Upravit úvodní stránku</a>
    <a href="/admin/content-kontakty.php" class="btn btn--outline">Upravit kontakty</a>
    <a href="/admin/media.php" class="btn btn--outline">Nahrát obrázek</a>
    <a href="/" target="_blank" class="btn btn--outline">Zobrazit web →</a>
  </div>
</div>

<?php adminFooter(); ?>
