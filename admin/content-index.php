<?php
require_once __DIR__ . '/includes/auth.php';
require_once __DIR__ . '/includes/layout.php';
require_once __DIR__ . '/includes/rich-editor.php';
requireAuth();

function postScalar(string $key, string $default = ''): string {
  return trim($_POST[$key] ?? $default);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  requireCsrf();
  $all = readJson('content.json');

  $values = [];
  foreach ((array)($_POST['value_title'] ?? []) as $i => $t) {
    $values[] = ['title' => trim($t), 'text' => trim($_POST['value_text'][$i] ?? '')];
  }

  $all['index'] = [
    'hero_title' => highlightTitle(postScalar('hero_title'), postScalar('hero_highlight')),
    'hero_desc'  => postScalar('hero_desc'),
    'hero_cta_primary'   => postScalar('hero_cta_primary'),
    'hero_cta_secondary' => postScalar('hero_cta_secondary'),
    'hero_image_url'     => postScalar('hero_image_url'),
    'intro_label' => postScalar('intro_label'),
    'intro_title' => postScalar('intro_title'),
    'intro_lead_html' => postScalar('intro_lead_html'),
    'values_items' => $values,
    'values_link_label' => postScalar('values_link_label'),
    'about_label' => postScalar('about_label'),
    'about_title_html' => linesToBr(postScalar('about_title_html')),
    'about_body_html' => postScalar('about_body_html'),
    'about_image_url' => postScalar('about_image_url'),
    'about_quote_html' => linesToBr(postScalar('about_quote_html')),
  ];

  writeJson('content.json', $all);
  flash('Úvodní stránka byla uložena a je ihned vidět na webu.');
  header('Location: /admin/content-index.php');
  exit;
}

$c = fuContent('index');
adminHeader('Úvodní stránka', 'content-index');
?>

<form method="POST">
  <?= csrfField() ?>

  <div class="card">
    <div class="card__title">Úvodní sekce (hero)</div>
    <div class="form-group">
      <label for="hero_title">Hlavní nadpis</label>
      <input type="text" id="hero_title" name="hero_title" value="<?= htmlspecialchars(html_entity_decode(strip_tags($c['hero_title']), ENT_QUOTES)) ?>">
    </div>
    <div class="form-group">
      <label for="hero_highlight">Zvýrazněná část nadpisu</label>
      <input type="text" id="hero_highlight" name="hero_highlight" value="<?= htmlspecialchars(titleHighlight($c['hero_title'])) ?>">
      <p class="form-hint">Slovo nebo část nadpisu, která se na webu zobrazí barevně. Musí v nadpisu být přesně takto napsaná. Nechte prázdné, pokud nic zvýraznit nechcete.</p>
    </div>
    <div class="form-group">
      <label for="hero_desc">Úvodní text</label>
      <textarea id="hero_desc" name="hero_desc" rows="3"><?= htmlspecialchars($c['hero_desc']) ?></textarea>
    </div>
    <div class="form-grid">
      <div class="form-group">
        <label for="hero_cta_primary">Text hlavního tlačítka</label>
        <input type="text" id="hero_cta_primary" name="hero_cta_primary" value="<?= htmlspecialchars($c['hero_cta_primary']) ?>">
      </div>
      <div class="form-group">
        <label for="hero_cta_secondary">Text druhého tlačítka</label>
        <input type="text" id="hero_cta_secondary" name="hero_cta_secondary" value="<?= htmlspecialchars($c['hero_cta_secondary']) ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="hero_image_url">URL úvodního obrázku</label>
      <input type="text" id="hero_image_url" name="hero_image_url" value="<?= htmlspecialchars($c['hero_image_url']) ?>">
      <p class="form-hint">Nový obrázek nejdřív nahrajte v sekci <a href="/admin/media.php">Média</a> a vložte zkopírovanou cestu.</p>
    </div>
  </div>

  <div class="card">
    <div class="card__title">Sekce „Jak funguje naše úschova“</div>
    <div class="form-grid">
      <div class="form-group">
        <label for="intro_label">Popisek</label>
        <input type="text" id="intro_label" name="intro_label" value="<?= htmlspecialchars($c['intro_label']) ?>">
      </div>
      <div class="form-group">
        <label for="intro_title">Nadpis</label>
        <input type="text" id="intro_title" name="intro_title" value="<?= htmlspecialchars($c['intro_title']) ?>">
      </div>
    </div>
    <div class="form-group">
      <label for="intro_lead_html">Úvodní text</label>
      <textarea id="intro_lead_html" name="intro_lead_html" rows="4"><?= htmlspecialchars($c['intro_lead_html']) ?></textarea>
    </div>
    <?php foreach ($c['values_items'] as $i => $item): ?>
      <div class="form-grid" style="border-top:1px solid var(--border);padding-top:1rem;margin-top:.5rem;">
        <div class="form-group">
          <label>Karta <?= $i + 1 ?> – titulek</label>
          <input type="text" name="value_title[]" value="<?= htmlspecialchars($item['title']) ?>">
        </div>
        <div class="form-group">
          <label>Karta <?= $i + 1 ?> – text</label>
          <input type="text" name="value_text[]" value="<?= htmlspecialchars($item['text']) ?>">
        </div>
      </div>
    <?php endforeach; ?>
    <div class="form-group" style="margin-top:1rem;">
      <label for="values_link_label">Text odkazu pod kartami</label>
      <input type="text" id="values_link_label" name="values_link_label" value="<?= htmlspecialchars($c['values_link_label']) ?>">
    </div>
  </div>

  <div class="card">
    <div class="card__title">Sekce „O nás“</div>
    <div class="form-group">
      <label for="about_label">Popisek</label>
      <input type="text" id="about_label" name="about_label" value="<?= htmlspecialchars($c['about_label']) ?>">
    </div>
    <div class="form-group">
      <label for="about_title_html">Nadpis</label>
      <textarea id="about_title_html" name="about_title_html" rows="3"><?= htmlspecialchars(brToLines($c['about_title_html'])) ?></textarea>
      <p class="form-hint">Každý řádek se na webu zobrazí na novém řádku.</p>
    </div>
    <div class="form-group">
      <label for="about_body_html">Text</label>
      <textarea id="about_body_html" name="about_body_html" rows="10"><?= htmlspecialchars($c['about_body_html']) ?></textarea>
    </div>
    <div class="form-group">
      <label for="about_image_url">URL obrázku</label>
      <input type="text" id="about_image_url" name="about_image_url" value="<?= htmlspecialchars($c['about_image_url']) ?>">
    </div>
    <div class="form-group">
      <label for="about_quote_html">Zvýrazněný citát pod sekcí</label>
      <textarea id="about_quote_html" name="about_quote_html" rows="3"><?= htmlspecialchars(brToLines($c['about_quote_html'])) ?></textarea>
      <p class="form-hint">Každý řádek se na webu zobrazí na novém řádku.</p>
    </div>
  </div>

  <button type="submit" class="btn btn--primary">Uložit a publikovat</button>
</form>

<?php richEditor('#intro_lead_html, #about_body_html', '', 300); ?>
<?php adminFooter(); ?>
