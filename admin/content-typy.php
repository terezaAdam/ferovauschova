<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/layout.php';
requireAuth();

function postScalar(string $key, string $default = ''): string {
  return trim($_POST[$key] ?? $default);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  requireCsrf();
  $all = readJson('content.json');
  $defaults = fuContent('typy_uschov');

  $sections = [];
  foreach ((array)($_POST['section_id'] ?? []) as $i => $id) {
    $sections[] = [
      'id' => $defaults['sections'][$i]['id'] ?? trim($id),
      'tab_label' => trim($_POST['section_tab_label'][$i] ?? ''),
      'nav_label' => trim($_POST['section_nav_label'][$i] ?? ''),
      'title'     => trim($_POST['section_title'][$i] ?? ''),
      'body_html' => trim($_POST['section_body'][$i] ?? ''),
    ];
  }

  $all['typy_uschov'] = [
    'hero_title' => postScalar('hero_title'),
    'hero_desc'  => postScalar('hero_desc'),
    'sections'   => $sections,
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

  <?php foreach ($c['sections'] as $i => $s): ?>
  <div class="card">
    <div class="card__title">Sekce <?= $i + 1 ?> — <?= htmlspecialchars($s['title']) ?></div>
    <input type="hidden" name="section_id[]" value="<?= htmlspecialchars($s['id']) ?>">
    <div class="form-grid">
      <div class="form-group">
        <label>Krátký název pro záložku (mobil)</label>
        <input type="text" name="section_tab_label[]" value="<?= htmlspecialchars($s['tab_label']) ?>">
      </div>
      <div class="form-group">
        <label>Název v levém menu</label>
        <input type="text" name="section_nav_label[]" value="<?= htmlspecialchars($s['nav_label']) ?>">
      </div>
    </div>
    <div class="form-group">
      <label>Nadpis sekce (H2)</label>
      <input type="text" name="section_title[]" value="<?= htmlspecialchars($s['title']) ?>">
    </div>
    <div class="form-group">
      <label>Text sekce (HTML — odstavce &lt;p&gt;, seznamy &lt;ul&gt;&lt;li&gt;, zvýraznění &lt;strong&gt;)</label>
      <textarea name="section_body[]" rows="10"><?= htmlspecialchars($s['body_html']) ?></textarea>
    </div>
  </div>
  <?php endforeach; ?>

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

<?php adminFooter(); ?>
