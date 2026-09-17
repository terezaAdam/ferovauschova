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

  $email = postScalar('email');
  if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    flash('E-mail nemá platný formát.', 'error');
    header('Location: /admin/content-kontakty.php');
    exit;
  }

  $all['kontakty'] = [
    'hero_label' => postScalar('hero_label'),
    'hero_title' => postScalar('hero_title'),
    'hero_desc'  => postScalar('hero_desc'),
    'office_address' => str_replace("\r", '', postScalar('office_address')),
    'phone' => postScalar('phone'),
    'email' => $email,
    'form_title' => postScalar('form_title'),
    'form_lead'  => postScalar('form_lead'),
  ];

  writeJson('content.json', $all);
  flash('Kontakty byly uloženy a jsou ihned vidět na webu.');
  header('Location: /admin/content-kontakty.php');
  exit;
}

$c = fuContent('kontakty');
adminHeader('Kontakty', 'content-kontakty');
?>

<form method="POST">
  <?= csrfField() ?>

  <div class="card">
    <div class="card__title">Úvodní sekce</div>
    <div class="form-group">
      <label for="hero_label">Popisek</label>
      <input type="text" id="hero_label" name="hero_label" value="<?= htmlspecialchars($c['hero_label']) ?>">
    </div>
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
    <div class="card__title">Kontaktní údaje</div>
    <div class="form-group">
      <label for="office_address">Adresa kanceláře (každý řádek samostatně)</label>
      <textarea id="office_address" name="office_address" rows="3"><?= htmlspecialchars($c['office_address']) ?></textarea>
    </div>
    <div class="form-grid">
      <div class="form-group">
        <label for="phone">Telefon</label>
        <input type="text" id="phone" name="phone" value="<?= htmlspecialchars($c['phone']) ?>">
      </div>
      <div class="form-group">
        <label for="email">E-mail</label>
        <input type="email" id="email" name="email" value="<?= htmlspecialchars($c['email']) ?>">
      </div>
    </div>
  </div>

  <div class="card">
    <div class="card__title">Kontaktní formulář</div>
    <div class="form-group">
      <label for="form_title">Nadpis formuláře</label>
      <input type="text" id="form_title" name="form_title" value="<?= htmlspecialchars($c['form_title']) ?>">
    </div>
    <div class="form-group">
      <label for="form_lead">Úvodní text formuláře</label>
      <textarea id="form_lead" name="form_lead" rows="3"><?= htmlspecialchars($c['form_lead']) ?></textarea>
    </div>
  </div>

  <button type="submit" class="btn btn--primary">Uložit a publikovat</button>
</form>

<?php adminFooter(); ?>
