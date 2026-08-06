<?php
// ── send-contact.php ──
// Zpracování kontaktního formuláře
header('Content-Type: application/json; charset=utf-8');

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
  http_response_code(405);
  echo json_encode(['ok' => false, 'msg' => 'Method not allowed']);
  exit;
}

$name    = trim(strip_tags($_POST['name']    ?? ''));
$email   = trim(strip_tags($_POST['email']   ?? ''));
$message = trim(strip_tags($_POST['message'] ?? ''));

if (!$name || !$email || !$message) {
  echo json_encode(['ok' => false, 'msg' => 'Vyplňte prosím všechna povinná pole.']);
  exit;
}
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  echo json_encode(['ok' => false, 'msg' => 'Neplatná e-mailová adresa.']);
  exit;
}

$to      = 'kancelar@equitylegal.cz';
$subject = 'Nová poptávka úschovy z webu';
$headers = implode("\r\n", [
  'From: Web Advokátní úschova <noreply@ferovauschova.cz>',
  'Reply-To: ' . $name . ' <' . $email . '>',
  'Content-Type: text/plain; charset=UTF-8',
  'MIME-Version: 1.0',
]);

$body  = "Nová poptávka z webu ferovauschova.cz\n";
$body .= str_repeat('=', 50) . "\n\n";
$body .= "Jméno:   $name\n";
$body .= "E-mail:  $email\n";
$body .= "\nZpráva:\n$message\n\n";
$body .= str_repeat('-', 50) . "\n";
$body .= "Odesláno: " . date('j. n. Y H:i') . "\n";

$sent = mail($to, $subject, $body, $headers);

echo json_encode(['ok' => $sent]);
