<?php
// Visual (WYSIWYG) editor for long HTML content fields, so editors don't have
// to write HTML tags by hand (same setup as the Equity Legal admin).
// Turns the textareas matching $selector into TinyMCE editors. Without the
// CDN the plain textarea still works. Pass an empty $blockFormats to hide the
// paragraph/heading picker; $withImages adds a button for inserting images.

function richEditor(string $selector, string $blockFormats = 'Odstavec=p; Nadpis=h2; Podnadpis=h3', int $height = 450, bool $withImages = false): void {
  $toolbar = ($blockFormats !== '' ? 'blocks | ' : '') . 'bold italic | bullist numlist | link' . ($withImages ? ' image' : '') . ' | undo redo | removeformat';
  static $loaded = false;
  if (!$loaded) {
    $loaded = true;
    ?>
<script src="https://cdn.jsdelivr.net/npm/tinymce@7.9.3/tinymce.min.js" referrerpolicy="origin"></script>
<script src="https://cdn.jsdelivr.net/npm/tinymce-i18n@26.9.21/langs7/cs.js"></script>
<script>
document.querySelectorAll('form[method="POST"]').forEach(function (form) {
  form.addEventListener('submit', function () { if (window.tinymce) tinymce.triggerSave(); });
});
</script>
    <?php
  }
  ?>
<script>
// Config kept by selector so textareas added later (new sections) can get the same editor.
window.fuEditorConfigs = window.fuEditorConfigs || {};
window.fuEditorConfigs[<?= json_encode($selector) ?>] = {
    license_key: 'gpl',
    language: 'cs',
    height: <?= $height ?>,
    menubar: false,
    branding: false,
    promotion: false,
    plugins: <?= json_encode('lists link' . ($withImages ? ' image' : '')) ?>,
    toolbar: <?= json_encode($toolbar) ?>,
    block_formats: <?= json_encode($blockFormats ?: 'Odstavec=p') ?>,
    link_default_target: '_blank',
    image_dimensions: false,
    // Keep the site's own markup (pros/cons columns, image frames) intact.
    extended_valid_elements: 'div[class|style],img[src|alt|style|class],p[style|class],ul[class],h4',
    entity_encoding: 'raw',
    content_style: 'body { font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; font-size: 15px; line-height: 1.6; color: #222; max-width: 760px; margin: 1rem auto; padding: 0 1rem; } h2 { font-size: 1.25rem; margin: 1.5rem 0 .5rem; } h3, h4 { font-size: 1.05rem; margin: 1.25rem 0 .4rem; } img { max-width: 100%; height: auto !important; } .type-card__cols { display: grid; grid-template-columns: 1fr 1fr; gap: 1.5rem; }'
};
if (window.tinymce) {
  tinymce.init(Object.assign({ selector: <?= json_encode($selector) ?> }, window.fuEditorConfigs[<?= json_encode($selector) ?>]));
}
</script>
  <?php
}

// Short fields where a line break is the only formatting: the editor sees plain
// lines, the site gets <br>.
function brToLines(string $html): string {
  return html_entity_decode(strip_tags(preg_replace('#<br\s*/?>\s*#i', "\n", $html)), ENT_QUOTES);
}

function linesToBr(string $text): string {
  $lines = array_filter(array_map('trim', explode("\n", str_replace("\r", '', $text))), 'strlen');
  return implode('<br>', array_map(fn($l) => htmlspecialchars($l, ENT_NOQUOTES), $lines));
}

// Headings with one accent-coloured part: the editor types the plain title and,
// separately, the part to highlight; the site gets "… <em>part</em> …".
function highlightTitle(string $title, string $highlight): string {
  $title = htmlspecialchars($title, ENT_NOQUOTES);
  $highlight = htmlspecialchars(trim($highlight), ENT_NOQUOTES);
  if ($highlight === '' || ($pos = mb_strpos($title, $highlight)) === false) return $title;
  return mb_substr($title, 0, $pos) . '<em>' . $highlight . '</em>' . mb_substr($title, $pos + mb_strlen($highlight));
}

function titleHighlight(string $html): string {
  return preg_match('#<em>(.*?)</em>#s', $html, $m) ? html_entity_decode(strip_tags($m[1]), ENT_QUOTES) : '';
}
