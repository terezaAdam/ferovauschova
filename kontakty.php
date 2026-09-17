<?php
$pageTitle = 'Kontakt – Advokátní úschova';
$pageDesc  = 'Nezávazně poptejte advokátní úschovu při koupi nebo prodeji nemovitosti. Napište nám nebo zavolejte.';
include __DIR__ . '/includes/header.php';
$c = fuContent('kontakty');
?>

<section class="page-hero">
  <div class="container">
    <p class="page-hero__label"><?= htmlspecialchars($c['hero_label']) ?></p>
    <h1 class="page-hero__title"><?= htmlspecialchars($c['hero_title']) ?></h1>
    <p class="page-hero__desc"><?= htmlspecialchars($c['hero_desc']) ?></p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-layout">

      <div>
        <div class="contact-info-card">
          <h3>Naše kancelář</h3>
          <p><?= nl2br(htmlspecialchars($c['office_address'])) ?></p>
        </div>
        <div class="contact-info-card">
          <h3>Telefon</h3>
          <p><a href="tel:<?= htmlspecialchars(preg_replace('/\s+/', '', $c['phone'])) ?>"><?= htmlspecialchars($c['phone']) ?></a></p>
        </div>
        <div class="contact-info-card">
          <h3>E-mail</h3>
          <p><a href="mailto:<?= htmlspecialchars($c['email']) ?>"><?= htmlspecialchars($c['email']) ?></a></p>
        </div>
      </div>

      <div class="contact-form">
        <h2 style="margin-bottom:.5rem;"><?= htmlspecialchars($c['form_title']) ?></h2>
        <p style="margin-bottom:1.75rem;"><?= htmlspecialchars($c['form_lead']) ?></p>
        <form id="contact-form">
          <input type="hidden" name="access_key" value="432b3f16-d270-4900-acec-d87f14b4a5a5">
          <input type="hidden" name="subject" value="Nová poptávka úschovy z webu ferovauschova.cz">
          <input type="hidden" name="from_name" value="Web Férová úschova">
          <input type="text" name="botcheck" id="botcheck" autocomplete="off" tabindex="-1" style="position:absolute;left:-9999px;width:1px;height:1px;opacity:0;">
          <div class="form-group">
            <label for="name">Jméno *</label>
            <input type="text" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="email">E-mailová adresa *</label>
            <input type="email" id="email" name="email" required>
          </div>
          <div class="form-group">
            <label for="message">Zpráva *</label>
            <textarea id="message" name="message" required placeholder="Popište prosím stručně vaši situaci…"></textarea>
          </div>
          <button type="submit" class="btn btn--primary">Odeslat poptávku</button>
          <div id="form-msg" class="form-msg"></div>
        </form>
      </div>

    </div>
  </div>
</section>

<?php include __DIR__ . '/includes/footer.php'; ?>
