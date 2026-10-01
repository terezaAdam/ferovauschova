<?php
$uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

if ($uri === '/prihlaseni' || $uri === '/prihlaseni/') {
  require __DIR__ . '/admin/login.php';
  return true;
}

// Clean URLs (production: .htaccess)
if (preg_match('#^/(advokatni-uschova|typy-uschov|rady-a-pojmy|kontakty)/?$#', $uri, $m)) {
  require __DIR__ . '/' . $m[1] . '.php';
  return true;
}

return false;
