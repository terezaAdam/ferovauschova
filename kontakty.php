<?php
$pageTitle = 'Kontakt – Advokátní úschova';
$pageDesc  = 'Nezávazně poptejte advokátní úschovu při koupi nebo prodeji nemovitosti. Napište nám nebo zavolejte.';
include __DIR__ . '/includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <p class="page-hero__label">Kontakt</p>
    <h1 class="page-hero__title">Potřebujete poradit s advokátní úschovou?</h1>
    <p class="page-hero__desc">Máte jakýkoliv dotaz? Jsme tu, abychom vám pomohli. Kontaktujte nás kdykoliv a získejte právní poradenství na dosah ruky.</p>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="contact-layout">

      <div>
        <div class="contact-info-card">
          <h3>Naše kancelář</h3>
          <p>Chrudimská 1418/2, Vinohrady<br>130 00 Praha 3<br>Česká republika</p>
        </div>
        <div class="contact-info-card">
          <h3>Telefon</h3>
          <p><a href="tel:+420799901699">+420 799 901 699</a></p>
        </div>
        <div class="contact-info-card">
          <h3>E-mail</h3>
          <p><a href="mailto:kancelar@equitylegal.cz">kancelar@equitylegal.cz</a></p>
        </div>
      </div>

      <div class="contact-form">
        <h2 style="margin-bottom:.5rem;">Napište nám</h2>
        <p style="margin-bottom:1.75rem;">Máte-li otázky nebo si chcete domluvit schůzku, neváhejte využít náš kontaktní formulář níže. Rádi se vám co nejdříve ozveme.</p>
        <form id="contact-form">
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
