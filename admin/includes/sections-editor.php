<?php
// Editable list of page sections (Advokátní úschova, Typy úschov): each section
// has an anchor id, a mobile tab label, a left-menu label, a heading and a body.
// Sections can be added and removed; ids of existing sections are kept so
// links like /typy-uschov#soudni-uschova keep working.

require_once __DIR__ . '/rich-editor.php';

function sectionsFromPost(): array {
  $sections = [];
  $used = [];
  foreach ((array)($_POST['section_title'] ?? []) as $i => $title) {
    $s = [
      'id'        => trim($_POST['section_id'][$i] ?? ''),
      'tab_label' => trim($_POST['section_tab_label'][$i] ?? ''),
      'nav_label' => trim($_POST['section_nav_label'][$i] ?? ''),
      'title'     => trim($title),
      'body_html' => trim($_POST['section_body'][$i] ?? ''),
    ];
    if ($s['title'] === '' && $s['tab_label'] === '' && $s['nav_label'] === '' && trim(strip_tags($s['body_html'])) === '') continue;

    // Labels default to the heading so a new section only needs a title.
    if ($s['nav_label'] === '') $s['nav_label'] = $s['title'];
    if ($s['tab_label'] === '') $s['tab_label'] = $s['nav_label'];

    $id = slugify($s['id'] !== '' ? $s['id'] : ($s['title'] !== '' ? $s['title'] : $s['nav_label']));
    if ($id === '') $id = 'sekce';
    $base = $id;
    for ($n = 2; isset($used[$id]); $n++) $id = $base . '-' . $n;
    $used[$id] = true;
    $s['id'] = $id;

    $sections[] = $s;
  }
  return $sections;
}

function renderSectionFields(array $s, string $num): void {
  ?>
  <div class="card section-row">
    <div class="card__title" style="display:flex;justify-content:space-between;align-items:center;gap:1rem;">
      <span>Sekce <span class="section-num"><?= $num ?></span><?= $s['title'] !== '' ? ' — ' . htmlspecialchars($s['title']) : '' ?></span>
      <button type="button" class="btn btn--danger btn--sm" data-section-remove>Smazat sekci</button>
    </div>
    <input type="hidden" name="section_id[]" value="<?= htmlspecialchars($s['id']) ?>">
    <div class="form-group">
      <label>Nadpis sekce</label>
      <input type="text" name="section_title[]" value="<?= htmlspecialchars($s['title']) ?>">
    </div>
    <div class="form-grid">
      <div class="form-group">
        <label>Název v levém menu</label>
        <input type="text" name="section_nav_label[]" value="<?= htmlspecialchars($s['nav_label']) ?>">
      </div>
      <div class="form-group">
        <label>Krátký název pro záložku (mobil)</label>
        <input type="text" name="section_tab_label[]" value="<?= htmlspecialchars($s['tab_label']) ?>">
      </div>
    </div>
    <div class="form-group">
      <label>Text sekce</label>
      <textarea name="section_body[]" rows="10"><?= htmlspecialchars($s['body_html']) ?></textarea>
    </div>
  </div>
  <?php
}

function renderSectionsEditor(array $sections): void {
  ?>
  <div id="section-list">
    <?php foreach ($sections as $i => $s) renderSectionFields($s, (string)($i + 1)); ?>
  </div>
  <template id="section-template">
    <?php renderSectionFields(['id' => '', 'tab_label' => '', 'nav_label' => '', 'title' => '', 'body_html' => ''], ''); ?>
  </template>
  <div class="card">
    <button type="button" class="btn btn--outline" id="section-add">+ Přidat sekci</button>
    <p class="form-hint">Nová sekce se přidá na konec stránky. Pokud nevyplníte název v menu nebo na záložce, použije se nadpis sekce. Změny se projeví na webu až po kliknutí na „Uložit a publikovat“.</p>
  </div>
  <?php
}

function sectionsEditorScript(string $blockFormats): void {
  $selector = 'textarea[name="section_body[]"]';
  richEditor($selector, $blockFormats, 320);
  ?>
<script>
(function () {
  var list = document.getElementById('section-list');
  var tpl = document.getElementById('section-template');
  var editorSelector = <?= json_encode($selector) ?>;

  function renumber() {
    list.querySelectorAll('.section-row').forEach(function (row, i) {
      row.querySelector('.section-num').textContent = i + 1;
    });
  }

  document.getElementById('section-add').addEventListener('click', function () {
    list.appendChild(tpl.content.cloneNode(true));
    var row = list.lastElementChild;
    renumber();
    if (window.tinymce && window.fuEditorConfigs) {
      tinymce.init(Object.assign({ target: row.querySelector('textarea') }, window.fuEditorConfigs[editorSelector]));
    }
    row.scrollIntoView({ behavior: 'smooth', block: 'start' });
    row.querySelector('input[name="section_title[]"]').focus();
  });

  // Two clicks instead of confirm(): some embedded browsers suppress dialogs.
  list.addEventListener('click', function (e) {
    var btn = e.target.closest('[data-section-remove]');
    if (!btn) return;
    if (!btn.dataset.armed) {
      btn.dataset.armed = '1';
      btn.textContent = 'Opravdu smazat? Klikněte znovu';
      setTimeout(function () {
        delete btn.dataset.armed;
        btn.textContent = 'Smazat sekci';
      }, 4000);
      return;
    }
    var row = btn.closest('.section-row');
    var textarea = row.querySelector('textarea');
    if (window.tinymce && textarea.id && tinymce.get(textarea.id)) tinymce.get(textarea.id).remove();
    row.remove();
    renumber();
  });
})();
</script>
  <?php
}
