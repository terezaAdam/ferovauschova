<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/layout.php';
require_once __DIR__ . '/includes/sections-editor.php';
requireAuth();

function postScalar(string $key, string $default = ''): string {
  return trim($_POST[$key] ?? $default);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  requireCsrf();
  $all = readJson('content.json');

  $all['typy_uschov'] = [
    'hero_title' => postScalar('hero_title'),
    'hero_desc'  => postScalar('hero_desc'),
    'sections'   => sectionsFromPost(),
    'cta_title'  => postScalar('cta_title'),
    'cta_text'   => postScalar('cta_text'),
  ];

  writeJson('content.json', $all);
  flash('Stránka „Typy úschov“ byla uložena a je ihned vidět na webu.');
  header('Location: /admin/content-typy.php');
  exit;
}

$c = fuContent('typy_uschov');
adminHeader('Typy úschov', 'content-typy');
?>

<form method="POST">
  <?= csrfField() ?>

  <div class="card">
    <div class="card__title">Úvodní sekce</div>
    <div class="form-group">
      <label for="hero_title">Nadpis</label>
      <input type="text" id="hero_title" name="hero_title" value="<?= htmlspecialchars($c['hero_title']) ?>">
    </div>
    <div class="form-group">
      <label for="hero_desc">Text</label>
      <textarea id="hero_desc" name="hero_desc" rows="3"><?= htmlspecialchars($c['hero_desc']) ?></textarea>
    </div>
  </div>

  <?php renderSectionsEditor($c['sections']); ?>

  <div class="card">
    <div class="card__title">Závěrečná výzva</div>
    <div class="form-group">
      <label for="cta_title">Nadpis</label>
      <input type="text" id="cta_title" name="cta_title" value="<?= htmlspecialchars($c['cta_title']) ?>">
    </div>
    <div class="form-group">
      <label for="cta_text">Text</label>
      <input type="text" id="cta_text" name="cta_text" value="<?= htmlspecialchars($c['cta_text']) ?>">
    </div>
  </div>

  <button type="submit" class="btn btn--primary">Uložit a publikovat</button>
</form>

<?php sectionsEditorScript('Odstavec=p; Podnadpis=h4'); ?>
<?php adminFooter(); ?>
