<?php
$navItems = [
  '/advokatni-uschova.php' => 'Advokátní úschova',
  '/typy-uschov.php'       => 'Typy úschov',
  '/rady-a-pojmy.php'      => 'Rady a pojmy',
  '/kontakty.php'          => 'Kontakt',
];
$navLeft  = array_slice($navItems, 0, 2, true);
$navRight = array_slice($navItems, 2, null, true);
$currentPath = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
if ($currentPath === '/index.php') $currentPath = '/';
?><!DOCTYPE html>
<html lang="cs">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?= htmlspecialchars($pageTitle ?? 'Advokátní úschova – advokátní úschova při koupi a prodeji nemovitostí') ?></title>
<meta name="description" content="<?= htmlspecialchars($pageDesc ?? 'Advokátní úschova – bezpečná advokátní úschova peněz a dokumentů při koupi a prodeji nemovitostí. Transparentně, rychle a s plnou právní odpovědností.') ?>">
<link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><rect width=%22100%22 height=%22100%22 rx=%2220%22 fill=%22%231E2941%22/><text x=%2250%22 y=%2266%22 font-size=%2255%22 text-anchor=%22middle%22 fill=%22%23904E55%22 font-family=%22Arial%22>A</text></svg>">
<link rel="stylesheet" href="/assets/css/style.css">
</head>
<body>

<nav class="nav">
  <div class="nav__inner">
    <div class="nav__links nav__links--left">
      <?php foreach ($navLeft as $href => $label): ?>
        <a href="<?= $href ?>" class="nav__link<?= $currentPath === $href ? ' active' : '' ?>"><?= $label ?></a>
      <?php endforeach; ?>
    </div>

    <a href="/" class="nav__logo">Advokátní<span>úschova</span></a>

    <div class="nav__links nav__links--right">
      <?php foreach ($navRight as $href => $label): ?>
        <a href="<?= $href ?>" class="nav__link<?= $currentPath === $href ? ' active' : '' ?>"><?= $label ?></a>
      <?php endforeach; ?>
    </div>

    <div class="nav__hamburger" aria-label="Menu"><span></span><span></span><span></span></div>
  </div>
  <div class="nav__mobile">
    <?php foreach ($navItems as $href => $label): ?>
      <a href="<?= $href ?>" class="nav__link<?= $currentPath === $href ? ' active' : '' ?>"><?= $label ?></a>
    <?php endforeach; ?>
  </div>
</nav>
