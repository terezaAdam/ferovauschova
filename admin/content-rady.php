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

  $all['rady_a_pojmy'] = [
    'hero_title' => postScalar('hero_title'),
    'hero_desc'  => postScalar('hero_desc'),
    'body_html'  => postScalar('body_html'),
    'cta_title'  => postScalar('cta_title'),
    'cta_text'   => postScalar('cta_text'),
  ];

  writeJson('content.json', $all);
  flash('Stránka „Rady a pojmy“ byla uložena a je ihned vidět na webu.');
  header('Location: /admin/content-rady.php');
  exit;
}

$c = fuContent('rady_a_pojmy');
adminHeader('Rady a pojmy', 'content-rady');
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

  <div class="card">
    <div class="card__title">Obsah článku</div>
    <div class="form-group">
      <label for="body_html">Celý text stránky (HTML — nadpisy &lt;h2&gt;, odstavce &lt;p&gt;, seznamy &lt;ul&gt;&lt;li&gt;, obrázky &lt;img&gt;)</label>
      <textarea id="body_html" name="body_html" rows="26" style="font-family:monospace;font-size:.82rem;"><?= htmlspecialchars($c['body_html']) ?></textarea>
      <p class="form-hint">Cesty k obrázkům nahraným v sekci <a href="/admin/media.php">Média</a> vložte do atributu <code>src="…"</code>.</p>
    </div>
  </div>

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
