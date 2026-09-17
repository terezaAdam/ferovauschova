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
    header('Location: /admin/content-footer.php');
    exit;
  }

  $all['footer'] = [
    'tagline' => postScalar('tagline'),
    'address' => str_replace("\r", '', postScalar('address')),
    'phone' => postScalar('phone'),
    'email' => $email,
    'copy'  => postScalar('copy'),
    'partner_text' => postScalar('partner_text'),
  ];

  writeJson('content.json', $all);
  flash('Patička byla uložena a je ihned vidět na webu.');
  header('Location: /admin/content-footer.php');
  exit;
}

$c = fuContent('footer');
adminHeader('Patička', 'content-footer');
?>

<form method="POST">
  <?= csrfField() ?>

  <div class="card">
    <div class="card__title">Patička webu</div>
    <div class="form-group">
      <label for="tagline">Popisek firmy</label>
      <textarea id="tagline" name="tagline" rows="3"><?= htmlspecialchars($c['tagline']) ?></textarea>
    </div>
    <div class="form-group">
      <label for="address">Adresa (každý řádek samostatně)</label>
      <textarea id="address" name="address" rows="3"><?= htmlspecialchars($c['address']) ?></textarea>
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
    <div class="form-group">
      <label for="copy">Text za rokem v copyrightu</label>
      <input type="text" id="copy" name="copy" value="<?= htmlspecialchars($c['copy']) ?>">
    </div>
    <div class="form-group">
      <label for="partner_text">Text za „Součást Equity Legal,“</label>
      <input type="text" id="partner_text" name="partner_text" value="<?= htmlspecialchars($c['partner_text']) ?>">
    </div>
  </div>

  <button type="submit" class="btn btn--primary">Uložit a publikovat</button>
</form>

<?php adminFooter(); ?>
