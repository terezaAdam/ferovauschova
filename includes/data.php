<?php
define('FU_DATA_DIR', __DIR__ . '/../data/');

function fuReadJson(string $file): array {
  $path = FU_DATA_DIR . basename($file);
  if (!file_exists($path)) return [];
  $data = json_decode(file_get_contents($path), true);
  return is_array($data) ? $data : [];
}

function fuWriteJson(string $file, array $data): bool {
  $path = FU_DATA_DIR . basename($file);
  $tmp  = $path . '.tmp';
  if (file_put_contents($tmp, json_encode($data, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT)) === false) {
    return false;
  }
  return rename($tmp, $path);
}

function fuDefaults(): array {
  return [
    'index' => [
      'hero_title' => 'Finanční úschova pro bezpečný <em>nákup</em> a prodej nemovitostí',
      'hero_desc'  => 'Maximální ochrana financí při převodu nemovitosti. Mějte jistotu, že je váš obchod bezpečný. Právně, finančně i lidsky.',
      'hero_cta_primary'   => 'Nezávazně poptat úschovu',
      'hero_cta_secondary' => 'Advokátní úschova',
      'intro_label' => 'Úvodem',
      'intro_title' => 'Jak funguje naše úschova a proč ji využít?',
      'intro_lead_html' => "<p>Při převodu nemovitosti, obchodního podílu nebo jiné významné transakci je klíčové, aby vše proběhlo bezpečně, bez zbytečných rizik a s právní jistotou. Férová úschova je spolehlivý právní nástroj, díky kterému jsou peníze i dokumenty po celou dobu pod kontrolou — až do chvíle, kdy dojde ke splnění všech dohodnutých podmínek.</p>\n<p>Je to služba, která chrání obě strany a zajišťuje:</p>",
      'values_items' => [
        ['title' => 'Bezpečné uložení financí',     'text' => 'Na samostatném úschovním účtu, odděleném od jiných prostředků.'],
        ['title' => 'Přesně definovaný postup',      'text' => 'Na základě smlouvy dle závazných pravidel.'],
        ['title' => 'Rovnováhu a důvěru',            'text' => 'Mezi smluvními stranami po celou dobu transakce.'],
        ['title' => 'Ochranu po celou dobu',         'text' => 'Od podpisu smlouvy až po samotný převod.'],
      ],
      'values_link_label' => 'Vše o advokátní úschově',
      'about_label' => 'O nás',
      'about_title_html' => '20+ let zkušeností.<br>100% odpovědnost.<br>Právní klid pro vás.',
      'about_body_html' => "<p>V Equity Legal se advokátním úschovám věnujeme již více než 20 let. Každý převod řešíme s maximální péčí, důsledností a prověřeným přístupem.</p>\n<p><strong>Proč klienti volí právě nás?</strong></p>\n<ul class=\"check-list\">\n<li>Dlouholetá praxe a zkušený tým advokátů</li>\n<li>Pojištění profesní odpovědnosti do výše 100 milionů Kč</li>\n<li>Úschova na odděleném účtu vedeném výhradně pro klienta</li>\n<li>Pravidelné a srozumitelné informování o každém kroku</li>\n<li>Komunikujeme plynně v angličtině, němčině, francouzštině, polštině.</li>\n<li>Plná právní odpovědnost a naprostá transparentnost</li>\n</ul>",
      'about_image_url' => 'https://images.unsplash.com/photo-1554469384-e58fac16e23a?auto=format&fit=crop&w=1200&q=80',
      'about_quote_html' => 'Žádné spekulace. Žádná nejistota. Jen právně podložený a zabezpečený postup.<br>Equity Legal. Úschova, která chrání víc - peníze, listiny i bezpečný převod nemovitosti.',
      'hero_image_url' => 'https://images.unsplash.com/photo-1560518883-ce09059eeffa?auto=format&fit=crop&w=1920&q=80',
    ],

    'advokatni_uschova' => [
      'hero_title' => 'Úschova Equity legal',
      'hero_desc'  => 'Prodáváte / kupujete nemovitost nebo uzavíráte důležitou transakční smlouvu. Peníze i dokumenty, které mají změnit majitele, musí být v naprostém bezpečí. A přesně to zajišťuje úschova Equity legal.',
      'sections' => [
        [
          'id' => 'co-je-advokatni-uschova', 'tab_label' => 'Co je úschova Equity legal', 'nav_label' => 'Co je úschova Equity legal',
          'title' => 'Co je úschova Equity legal',
          'body_html' => "<p>Naše úschova je speciální právní služba, při které advokátní kancelář Equity legal bezpečně spravuje a uchovává finanční prostředky nebo listiny až do okamžiku, kdy jsou splněny všechny podmínky sjednané ve smlouvě. Funguje jako právně podložená pojistka, která chrání všechny zúčastněné strany.</p>\n<p><strong>Proč je naše úschova tou nejlepší volbou?</strong></p>\n<ul>\n<li><strong>Bezpečnost nade vše</strong> – peněžní či jiné prostředky jsou uloženy na speciálním úschovním účtu vedeném u renomované banky, odděleném od jakýchkoliv jiných financí. Úschova je navíc pod regulovaným dohledem a krytá infomační povinností, což zajišťuje maximální míru kontroly a transparentnosti.</li>\n<li><strong>Právní jistota a transparentnost</strong> – celý proces se řídí podle jasných pravidel a smluvních podmínek. Žádná strana nemůže uvolnit peníze bez souhlasu druhé. Všechny kroky jsou dokumentované a klienti jsou průběžně informováni o stavu úschovy.</li>\n<li><strong>Ochrana pro obě strany</strong> – prodávající dostane peníze až tehdy, když jsou splněny všechny podmínky, a kupující má jistotu, že peníze neodejdou dříve, než vše proběhne podle plánu.</li>\n<li><strong>Eliminace rizika</strong> – úschova zabezpečuje jistotu procesu vypořádání a eliminuje nesplnění smlouvy nebo nejasnosti v transakci.</li>\n<li><strong>Variabilita a profesionalita</strong> – uschováváme peníze, smlouvy, dokumenty i cennosti, ať už jde o obchodní transakce, převody podílů či nemovitostí.</li>\n</ul>",
        ],
        [
          'id' => 'priklad-z-praxe', 'tab_label' => 'Příklad z praxe', 'nav_label' => 'Příklad z praxe',
          'title' => 'Příklad z praxe – jak advokátní úschova skutečně funguje',
          'body_html' => "<p>Pan Novák se rozhodl prodat rodinný dům. Kupující, paní Svobodová, chtěla mít jistotu, že pan Novák dostane peníze, až když bude vše právně vyřešené a dům převedený do jejího vlastnictví. Pan Novák naopak potřeboval garanci, že na peníze uvidí dřív než dá změnu na katastr a tak má jistotu, že mu peníze přijdou, jakmile proběhne převod.</p>\n<p>Oba klienti si zvolili advokátní úschovu u Equity Legal. Paní Svobodová složila kupní cenu na námi speciálně zřízený účet, který je chráněný a pojištěný. My jsme průběžně informovali obě strany o stavu úschovy a postupu převodu nemovitosti.</p>\n<p>Jakmile byl dům úředně převeden na paní Svobodovou, uvolnili jsme peníze a poslali je panu Novákovi. Celý proces byl transparentní, bezpečný a bez starostí. Ani jedna strana nepodstoupila žádné riziko a transakce proběhla hladce.</p>\n<p>Advokátní úschova u Equity Legal je vaše nejbezpečnější cesta k jistotě a klidu v každém obchodě.</p>",
        ],
        [
          'id' => 'uschova-penez', 'tab_label' => 'Úschova peněz', 'nav_label' => 'Úschova peněz',
          'title' => 'Úschova peněz',
          'body_html' => "<p>Úschova peněz je bezpečný a spolehlivý způsob, jak zajistit, že finanční prostředky budou uloženy odděleně a uvolněny až ve chvíli, kdy jsou splněny všechny podmínky smlouvy. Tím chráníme zájmy všech zúčastněných stran - ať už jde o prodej nemovitosti, obchodní transakci nebo jiný důležitý převod.</p>\n<p><strong>Jak celý proces vypadá?</strong></p>\n<ul>\n<li><strong>Složení peněz na speciálně vytvořený účet</strong> – kupující nebo jiná strana vloží peníze na speciálně vytvořený účet, vedený renomovanou bankou. Tento účet je pojištěný a maximálně zabezpečený.</li>\n<li><strong>Průběžná kontrola a komunikace</strong> – Equity legal průběžně sleduje, zda jsou plněny všechny podmínky dané smlouvy, a informuje obě strany o stavu úschovy.</li>\n<li><strong>Uvolnění peněz</strong> – jakmile jsou všechny podmínky smlouvy splněny, peníze jsou bezpečně a okamžitě převedeny na účet prodávajícího.</li>\n</ul>",
        ],
        [
          'id' => 'smlouva-o-uschove', 'tab_label' => 'Smlouva o úschově', 'nav_label' => 'Smlouva o advokátní úschově',
          'title' => 'Smlouva o advokátní úschově',
          'body_html' => "<p>Smlouva o advokátní úschově je základním právním dokumentem, který stanovuje pravidla a podmínky, za nichž Equity legal spravuje a uchovává finanční prostředky nebo jiné hodnoty v úschově. Tato smlouva je zárukou bezpečí a transparentnosti pro všechny zúčastněné strany.</p>\n<p><strong>Kdo smlouvu uzavírá?</strong> Smlouva o advokátní úschově se uzavírá mezi Equity legal, která bude úschovu provádět, a účastníky úschovy, tedy kupujícím a prodávajícím nebo jinými smluvními stranami, které chtějí svěřit peníze, dokumenty či další cennosti do bezpečné správy.</p>\n<p><strong>Co musí smlouva obsahovat?</strong></p>\n<ul>\n<li><strong>Identifikace smluvních stran</strong> – jména, adresy a další identifikační údaje advokátní kanceláře a všech účastníků úschovy.</li>\n<li><strong>Předmět úschovy</strong> – podrobný popis toho, co je do úschovy uloženo (peněžní částky, smlouvy, cenné papíry, listiny či jiné hodnoty).</li>\n<li><strong>Podmínky úschovy</strong> – specifikace, za jakých podmínek a kdy se uvolní uložené prostředky jednotlivým stranám.</li>\n<li><strong>Poplatek za službu</strong> – výše a způsob úhrady advokátní odměny za poskytnutí úschovy.</li>\n<li><strong>Další ujednání</strong> – např. možnost prodloužení úschovy, komunikace v různých jazycích nebo zachování mlčenlivosti.</li>\n</ul>\n<p><strong>Proč je smlouva o advokátní úschově důležitá?</strong> Zajišťuje právní jistotu, bezpečí, transparentnost a důvěru mezi klienty, kteří mají jistotu, že proces proběhne podle přesně dohodnutých pravidel.</p>",
        ],
        [
          'id' => 'advokatni-uschova-penez', 'tab_label' => 'Úschova peněz u advokáta', 'nav_label' => 'Férová úschova peněz',
          'title' => 'Férová úschova peněz',
          'body_html' => "<p>Při převodu nemovitosti, podílu ve firmě nebo uzavírání důležité smlouvy je jednou z nejzásadnějších otázek: „Kdy a komu odejdou peníze - a je to bezpečné?“ Právě na tuto otázku odpovídá férová úschova peněz od Equity legal. Kupující má jistotu, že jeho peníze neodejdou dříve, než dojde k převodu. Prodávající zase ví, že kupní cena už je připravena - a bude vyplacena ve chvíli, kdy splní všechny podmínky.</p>\n<p><strong>Jak úschova peněz funguje?</strong></p>\n<ul>\n<li>Kupující složí finanční prostředky na speciálně vytvořený samostatný účet.</li>\n<li>Všechny podmínky výplaty jsou jasně stanoveny ve smlouvě úschově, podepsané všemi stranami.</li>\n<li>Jakmile jsou smluvní podmínky naplněny, Equity legal peníze bezpečně uvolní oprávněné straně.</li>\n</ul>\n<p><strong>Kdy úschovu využít?</strong> Při koupi nebo prodeji nemovitosti, při převodu obchodního podílu nebo firmy, při vyrovnání mezi více stranami, když si strany navzájem nevěří nebo chtějí mít 100% právní jistotu.</p>",
        ],
        [
          'id' => 'koupe-nemovitosti', 'tab_label' => 'Při koupi nemovitosti', 'nav_label' => 'Úschova při koupi nemovitosti',
          'title' => 'Úschova peněz při koupi nemovitosti',
          'body_html' => "<p>Koupě nemovitosti je pro většinu lidí jednou z největších životních investic. Úschova peněz při koupi nemovitosti je právně ošetřený způsob, jak ochránit jak kupujícího, tak prodávajícího. Pomáhá zajistit, že žádná ze stran nepřijde k újmě - ani finančně, ani právně.</p>\n<p><strong>Jak úschova funguje?</strong></p>\n<ul>\n<li>Kupující a prodávající uzavírají smlouvu o převodu nemovitosti.</li>\n<li>Současně se podepisuje smlouva, která přesně stanoví, kdy a za jakých podmínek dojde k uvolnění peněz.</li>\n<li>Peníze putují na speciálně vytvořený účet, který slouží výhradně pro tuto transakci.</li>\n<li>Equity legal nebo klient podá návrh na vklad vlastnického práva do katastru nemovitostí.</li>\n<li>Jakmile je nový vlastník zapsán v katastru, Equity legal peníze uvolní prodávajícímu.</li>\n</ul>\n<p><strong>Proč je to důležité?</strong> Chrání obě strany, zabraňuje podvodům a zneužití, vše je právně ošetřeno, účet je samostatný a nedotknutelný a celý proces je transparentní a dohledatelný.</p>",
        ],
        [
          'id' => 'uschova-kupni-ceny', 'tab_label' => 'Úschova kupní ceny', 'nav_label' => 'Úschova kupní ceny',
          'title' => 'Úschova kupní ceny',
          'body_html' => "<p>Úschova kupní ceny je právní nástroj, který zajišťuje bezpečný průběh transakce mezi kupujícím a prodávajícím. Používá se především při převodech nemovitostí, ale i u jiných citlivých obchodních operací, kde hraje roli důvěra, velká částka a právní jistota.</p>\n<p><strong>Jak úschova kupní ceny funguje?</strong></p>\n<ul>\n<li>Po podpisu kupní smlouvy se uzavírá také smlouva o úschově s Equity legal.</li>\n<li>Kupující složí celou (nebo sjednanou) kupní cenu na zvláštní úschovní účet.</li>\n<li>Jakmile je např. prodávající zapsán jako vlastník do katastru, peníze se uvolní.</li>\n<li>Peníze jsou vyplaceny prodávajícímu přesně podle dohodnutých podmínek.</li>\n</ul>\n<p><strong>Výhody:</strong> ochrana obou stran, právní jistota a transparentní pravidla, dohled Equity legal a plná odpovědnost, dokumentace a průběžná informovanost, možnost přizpůsobení podmínek konkrétní situaci.</p>",
        ],
        [
          'id' => 'prodej-nemovitosti', 'tab_label' => 'Při prodeji nemovitosti', 'nav_label' => 'Úschova při prodeji nemovitosti',
          'title' => 'Úschova peněz při prodeji nemovitosti',
          'body_html' => "<p>Prodej nemovitosti je významný krok. Ať už jde o byt, dům nebo pozemek, jedna věc je vždy stejná: chcete mít jistotu, že za svou nemovitost opravdu dostanete zaplaceno – a že vše proběhne bezpečně a bez komplikací.</p>\n<p><strong>Jak úschova peněz funguje z pohledu prodávajícího?</strong></p>\n<ul>\n<li>Podpis kupní smlouvy a zároveň smlouvy s Equity legal, která přesně určuje, za jakých podmínek vám budou peníze uvolněny.</li>\n<li>Kupující složí celou kupní cenu do úschovy, na samostatný účet vedený Equity legal. Jste informováni o tom, kdy a v jaké výši byly prostředky složeny.</li>\n<li>Podání návrhu na vklad do katastru a čekání na zapsání nového vlastníka.</li>\n<li>Po zapsání nového vlastníka v katastru nemovitostí Equity legal bezodkladně uvolní složenou kupní cenu přímo na váš účet.</li>\n</ul>\n<p><strong>Proč je úschova při prodeji tak důležitá?</strong> Chrání vás před rizikem nezaplacení, průběh máte pod kontrolou a jistotu peněz po celou dobu transakce.</p>",
        ],
      ],
      'cta_title' => 'Máte podobnou transakci před sebou?',
      'cta_text'  => 'Probereme s vámi konkrétní podmínky a připravíme smlouvu o úschově na míru.',
    ],

    'typy_uschov' => [
      'hero_title' => 'Typy úschov',
      'hero_desc'  => 'Úschovu dnes nabízí soudy, realitní kanceláře i banky. Podívejte se, jak jednotlivé druhy fungují a na co si dát pozor.',
      'sections' => [
        [
          'id' => 'soudni-uschova', 'tab_label' => 'Soudní', 'nav_label' => 'Soudní úschova',
          'title' => 'Soudní úschova',
          'body_html' => "<p>Soudní úschova je specifická forma uložení peněz, listin nebo jiných cenností u soudu. Využívá se zejména v případech, kdy si složitel není jistý, komu má být plnění správně poskytnuto, nebo kdy druhá strana bezdůvodně odmítá plnění převzít. Typicky se jedná o složité právní nebo majetkové situace, kdy panuje spor nebo hrozba z prodlení.</p>\n<p>Tento způsob úschovy je upraven v občanském zákoníku (§ 335 a násl.) a představuje spíše procesní nástroj než běžné řešení pro každodenní právní a obchodní transakce. I když je soudní úschova bezpečná a garantovaná státem, má svá značná omezení – je zdlouhavá, neosobní a zatížená složitou administrativou. Právě proto ji v praxi převyšují modernější formy úschovy, především úschova advokátní, která nabízí nejen bezpečnost, ale i vysokou míru flexibility, právního servisu a osobního přístupu.</p>\n<p><strong>Jak soudní úschova funguje?</strong></p>\n<ul>\n<li><strong>Návrh soudu</strong> – osoba, která chce složit peníze (nebo jinou majetkovou hodnotu), podává návrh k příslušnému soudu. V návrhu musí být jasně popsáno, komu je částka určena a za jakých podmínek má být vydána.</li>\n<li><strong>Rozhodnutí a složení částky</strong> – pokud soud návrhu vyhoví, vydá rozhodnutí a umožní složení prostředků na účet soudu.</li>\n<li><strong>Výdej složené částky</strong> – peníze soud vydá příjemci, jakmile jsou splněny podmínky uvedené v rozhodnutí, nebo pokud je příjemce zcela nepochybně určen.</li>\n</ul>",
        ],
        [
          'id' => 'realitni-kancelar', 'tab_label' => 'U realitní kanceláře', 'nav_label' => 'Úschova u realitní kanceláře',
          'title' => 'Úschova peněz u realitní kanceláře',
          'body_html' => "<p>Častá praxe, která ale není vždy právně bezpečná. Úschova kupní ceny prostřednictvím realitní kanceláře se v minulosti často využívala při převodech nemovitostí, zejména tam, kde kancelář zprostředkovávala celý obchod. V některých případech mohla být rychlá a pohodlná.</p>\n<p>Přesto je třeba zdůraznit, že se nejednalo o úschovu chráněnou, a klientům tak chyběly právní záruky, které by měli například při advokátní nebo notářské úschově. Realitní kancelář totiž není ze zákona povinna mít právnické vzdělání ani pojištění odpovědnosti ve výši srovnatelné s advokátem.</p>\n<p><strong>Jak probíhá úschova peněz u realitní kanceláře?</strong></p>\n<ul>\n<li><strong>Písemná dohoda o úschově</strong> – klient podepisuje dohodu s realitní kanceláří. Její kvalita se může lišit. Kancelář ji může nabídnout jen na výslovné přání klienta.</li>\n<li><strong>Převod peněz</strong> – peníze se převádějí na účet vytvořený kanceláří, který je ale vedený u banky nebo jiné finanční instituce se sídlem v České republice.</li>\n<li><strong>Podání na katastr</strong> – návrh na vklad podává obvykle kancelář sama, bez právníka.</li>\n<li><strong>Výplata prodávajícímu</strong> – po přepisu nemovitosti jsou peníze vyplaceny. Podmínky výplaty však bývají stejné a bez dostatečných pojistek.</li>\n</ul>",
        ],
        [
          'id' => 'bankovni-uschova', 'tab_label' => 'Bankovní', 'nav_label' => 'Bankovní úschova',
          'title' => 'Bankovní úschova',
          'body_html' => "<p>Varianta s důrazem na bankovní procesy. Bankovní úschova je způsob, jak zajistit výplatu peněz prostřednictvím banky, nejčastěji formou vázaného účtu. Banka v tomto procesu vystupuje jako prostředník, který hlídá předem stanovené podmínky transakce.</p>\n<p><strong>Jak bankovní úschova obvykle funguje?</strong></p>\n<ul>\n<li><strong>Založení vázaného účtu</strong> – na základě dohody mezi kupujícím a prodávajícím je u banky založen tzv. vázaný účet.</li>\n<li><strong>Složení kupní ceny</strong> – kupující (nebo banka, pokud poskytuje úvěr) složí finanční prostředky na tento účet. Částka je zde zablokována až do splnění podmínek.</li>\n<li><strong>Uvolnění peněz prodávajícímu</strong> – jakmile jsou naplněny předem dohodnuté podmínky (např. zápis do katastru), banka částku uvolní ve prospěch prodávajícího.</li>\n</ul>\n<div class=\"type-card__cols\" style=\"margin-top:1.5rem;\">\n<div class=\"type-card__cols--cons\">\n<h4>Nevýhody bankovní úschovy</h4>\n<ul>\n<li>Méně flexibility – banky postupují podle striktních vnitřních pravidel, úprava smluv na míru je často nemožná.</li>\n<li>Delší schvalovací procesy – založení účtu, schvalování podmínek a výplata peněz mohou trvat déle.</li>\n<li>Omezený kontakt – komunikace probíhá přes standardní klientská centra nebo formuláře, individuální poradenství či flexibilní úpravy smluv nebývají běžné.</li>\n</ul>\n</div>\n</div>",
        ],
        [
          'id' => 'na-co-si-dat-pozor', 'tab_label' => 'Na co si dát pozor', 'nav_label' => 'Na co si dát pozor',
          'title' => 'Na co si dát pozor',
          'body_html' => "<p>Bezpečí vašich peněz začíná u správně zvoleného poskytovatele. Úschova peněz při koupi nemovitosti nebo jiných důležitých transakcích je dnes běžná praxe. Bohužel ale zároveň také oblast, kde se může stát mnoho chyb - často nevratných. A právě proto je důležité vědět, komu své peníze svěřujete a za jakých podmínek.</p>\n<p><strong>Kdo úschovu poskytuje</strong></p>\n<p>Ne každý, kdo nabízí úschovu, je k tomu odborně i právně způsobilý. Úschovu dnes nabízí realitní kanceláře, banky, notáři, soudy a advokáti, nebo i různí „zprostředkovatelé“. Vždy se proto ptejte:</p>\n<ul>\n<li>Má ten, kdo úschovu drží, zákonnou odpovědnost?</li>\n<li>Je jeho činnost pojištěna?</li>\n<li>Má ten, kdo úschovu drží, právní vzdělání?</li>\n<li>Je jeho činnost pod dohledem vyššího, nestranného orgánu?</li>\n</ul>\n<p>Výhodou může být i podepsání mlčenlivosti uschovatelem.</p>\n<p><strong>Oddělený účet je základ</strong></p>\n<p>Peníze v úschově musí být vedeny na odděleném, speciálně zřízeném účtu, ideálně výlučně na vaše jméno nebo na konkrétní úschovu. Pokud se vám někdo nabídne, že peníze složí na svůj běžný provozní účet, nebo že je tento postup běžný, buďte opatrní.</p>\n<p><strong>Jasně sepsaná smlouva</strong></p>\n<p>Ústní dohoda nebo nejasný dokument? Nikdy. Každá úschova by měla být podložena kvalitní písemnou smlouvou, která přesně stanoví:</p>\n<ul>\n<li>kdo úschovu poskytuje a kdo do ní vkládá prostředky;</li>\n<li>výše prostředků;</li>\n<li>jaké jsou podmínky výplaty prostředků, komu mají být vyplaceny;</li>\n<li>co se stane v případě sporu - zda dojde k vyplacení nebo nevyplacení prostředků.</li>\n</ul>\n<p><strong>Informovanost v průběhu úschovy</strong></p>\n<p>Klient by měl mít vždy přehled o tom, co se s jeho prostředky děje - kdy byly připsány, zda byly splněny podmínky výplaty, kdy a komu budou odeslány.</p>\n<p><strong>Právní a finanční jistota</strong></p>\n<p>Právní a finanční jistota není samozřejmostí - jen správně nastavená úschova vám zaručí, že vaše prostředky jsou skutečně chráněny. Poskytovatel úschovy by měl mít právnické vzdělání a pojištění - každý advokát musí být pojištěn minimálně na pět milionů korun, v případě vyšších úschov je možnost připojištění.</p>",
        ],
      ],
      'cta_title' => 'Nevíte, který typ úschovy je pro vás nejvhodnější?',
      'cta_text'  => 'Poradíme vám zdarma a nezávazně, jaká forma úschovy se hodí na vaši konkrétní transakci.',
    ],

    'rady_a_pojmy' => [
      'hero_title' => 'Rady a pojmy',
      'hero_desc'  => 'Odpovědi na časté otázky a vysvětlení pojmů, se kterými se při advokátní úschově můžete setkat.',
      'body_html' => "<h2>Kdo platí úschovu?</h2>\n<p>Náklady na advokátní úschovu Equity legal obvykle nesou obě strany napůl (lze se dohodnout i podle realitní praxe tak, že ji např. nese jen prodávající nemovitosti). V praxi však může být domluveno i jiné rozdělení nákladů mezi smluvní strany, například mezi kupujícího a prodávajícího, podle jejich dohody.</p>\n<p>Výhodou advokátní úschovy je, že její cena je transparentní, předem jasná a odpovídá kvalitě a bezpečnosti, kterou poskytuje. V rámci služby je vždy přesně stanoveno, kdo a jakým způsobem úschovu hradí, což eliminuje případné nedorozumění.</p>\n<div class=\"about__image fade-in\" style=\"margin:2.5rem 0;\">\n<img src=\"https://images.unsplash.com/photo-1450101499163-c8848c66ca85?auto=format&fit=crop&w=1200&q=80\" alt=\"Podpis smlouvy o úschově\" style=\"height:360px;\">\n</div>\n<h2>Úschovní účet</h2>\n<p>Úschovní účet je speciální bankovní účet, který slouží k bezpečnému uložení finančních prostředků během určité transakce nebo právního jednání. Na úschovní účet jsou peníze uloženy po dohodnutou dobu a jsou oddělené od běžných provozních financí majitele či jiné třetí strany.</p>\n<p>Tento účet se často využívá například při nemovitostních obchodech, kdy kupující složí kupní cenu na úschovní účet, který je veden nezávislou třetí stranou, dokud nejsou splněny všechny podmínky pro převod nemovitosti.</p>\n<p><strong>Výhody úschovního účtu:</strong></p>\n<ul>\n<li><strong>Bezpečnost</strong> – peníze jsou oddělené od běžných financí a jsou chráněny před případnými problémy majitele účtu.</li>\n<li><strong>Transparentnost</strong> – obě strany mají jasný přehled o stavu uložených prostředků.</li>\n<li><strong>Právní jistota</strong> – uložení na úschovní účet je často podmínkou smluvních ujednání, která zajišťují spravedlivé a bezpečné dokončení transakce.</li>\n</ul>\n<h2>Rozdíly mezi jistotním a depozitním účtem</h2>\n<p>Při řešení úschov se často setkáte s pojmy jako je jistotní anebo depozitní účet. Oba slouží k tomu, aby vaše finanční prostředky byly uloženy odděleně a bezpečně, přesto mezi nimi existují rozdíly, které mohou ovlivnit, jaká forma úschovy je pro vás ta pravá. Například depozitní účet může mít i konotaci kauce u nájmu, jistotní účet zálohy či předplatby u developera. Podstatné je tak právní zarámování – tyto stránky se věnují bezpečným úschovním účtům při převodech nemovitostí.</p>\n<div class=\"about__image fade-in\" style=\"margin:2.5rem 0;\">\n<img src=\"https://images.unsplash.com/photo-1554224155-6726b3ff858f?auto=format&fit=crop&w=1200&q=80\" alt=\"Bankovní účet a dokumenty\" style=\"height:360px;\">\n</div>\n<h2>Vázaný účet</h2>\n<p>Vázaný účet je bankovní produkt, který se využívá při důležitých transakcích - například při koupi nemovitosti i jako nástroj ochrany financí. Funguje podobně jako advokátní úschova, ale místo advokáta správu a výplatu prostředků zajišťuje banka.</p>\n<p>Peníze jsou na účtu „vázány“ až do splnění předem sjednaných podmínek. Jakmile jsou tyto podmínky naplněny (například zápisem do katastru), banka peníze uvolní druhé straně. Do té doby s nimi nemůže nakládat ani kupující, ani prodávající.</p>\n<p><strong>Jak vázaný účet funguje?</strong></p>\n<ul>\n<li>Kupující a prodávající se dohodnou na podmínkách a společně, nebo prostřednictvím realitní kanceláře, založí účet v bance.</li>\n<li>Kupující složí kupní cenu na vázaný účet.</li>\n<li>Banka sleduje, zda došlo ke splnění sjednaných podmínek - například zápisem do katastru.</li>\n<li>Jakmile jsou podmínky splněny, banka peníze uvolní prodávajícímu.</li>\n</ul>\n<div class=\"type-card__cols\" style=\"margin-top:1.5rem;\">\n<div>\n<h4>Výhody vázaného účtu</h4>\n<ul>\n<li>Dohled třetí strany - banka funguje jako neutrální správce prostředků.</li>\n<li>Základní ochrana transakce - peníze se uvolní až po splnění předem daných podmínek.</li>\n<li>Standardizovaný bankovní nástroj - vázané účty nabízí většina větších bank.</li>\n</ul>\n</div>\n<div class=\"type-card__cols--cons\">\n<h4>Nevýhody vázaného účtu</h4>\n<ul>\n<li>Nižší flexibilita - banka většinou neumožní upravit podmínky individuálně.</li>\n<li>Pomalejší reakce a méně osobní přístup než u advokáta.</li>\n<li>Vyšší náklady - některé banky účtují vysoké poplatky za vedení účtu.</li>\n<li>Banka nenese právní odpovědnost, na rozdíl od advokáta.</li>\n</ul>\n</div>\n</div>\n<p style=\"margin-top:1.5rem;\"><strong>Kdy je výhodné zřízení vázaného účtu:</strong> pokud obě strany preferují bankovní řízení, transakce je jednoduchá, nevyžaduje právní poradenství ani flexibilní úpravy podmínek a strany chtějí mít alespoň základní bezpečnostní prvek.</p>\n<h2>Dohoda o správě kupní ceny</h2>\n<p>Dohoda o správě kupní ceny je právní nástroj, který chrání obě strany při převodu nemovitosti. Slouží k tomu, aby peníze od kupujícího byly bezpečně spravovány do doby, než jsou podmínky ve smlouvě o úschově naplněny. Jde o alternativu k advokátní úschově nebo vázanému účtu – rozdíl je v tom, že kupní cena není formálně uložena „do úschovy“, ale je pouze spravována na základě smluvní dohody.</p>\n<p><strong>Jak správa kupní ceny funguje?</strong></p>\n<ul>\n<li>Po podpisu kupní smlouvy složí kupující kupní cenu na účet advokáta (správce ceny).</li>\n<li>Advokát drží peníze na samostatném účtu a sleduje splnění sjednaných podmínek, typicky prověření smlouvy katastrálním úřadem.</li>\n<li>Po splnění všech podmínek vyplatí advokát kupní cenu prodávajícímu, případně jiné oprávněné straně.</li>\n</ul>\n<p><strong>Co má dohoda obsahovat?</strong> Identifikaci stran, popis převáděného objektu a výši kupní ceny, podmínky výplaty, označení účtu a způsob informování stran o splnění podmínek.</p>\n<p><strong>Výhody:</strong> bezpečné držení peněz pod dohledem advokáta, jasně stanovené podmínky výplaty, rychlejší a flexibilnější řešení než klasická úschova, možnost přizpůsobit se konkrétní situaci klienta.</p>\n<p><strong>Kdy dává smysl?</strong> Při převodu objektu mezi známými stranami, kdy je potřeba rychlejší uvolnění prostředků, nebo když kupující požaduje dohled advokáta, ale nechce „uschovávat“ formálně.</p>",
      'cta_title' => 'Potřebujete poradit s vaší konkrétní situací?',
      'cta_text'  => 'Ozvěte se nám – probereme ji nezávazně a navrhneme nejvhodnější řešení.',
    ],

    'kontakty' => [
      'hero_label' => 'Kontakt',
      'hero_title' => 'Potřebujete poradit s advokátní úschovou?',
      'hero_desc'  => 'Máte jakýkoliv dotaz? Jsme tu, abychom vám pomohli. Kontaktujte nás kdykoliv a získejte právní poradenství na dosah ruky.',
      'office_address' => "Chrudimská 1418/2, Vinohrady\n130 00 Praha 3\nČeská republika",
      'phone' => '+420 799 901 699',
      'email' => 'kancelar@equitylegal.cz',
      'form_title' => 'Napište nám',
      'form_lead'  => 'Máte-li otázky nebo si chcete domluvit schůzku, neváhejte využít náš kontaktní formulář níže. Rádi se vám co nejdříve ozveme.',
    ],

    'footer' => [
      'tagline' => 'Advokátní úschova, která chrání víc než jen vaše peníze. Bezpečný, transparentní a profesionální přístup k úschově při koupi a prodeji nemovitostí.',
      'address' => "Chrudimská 1418/2, Vinohrady\n130 00 Praha 3\nČeská republika",
      'phone' => '+420 799 901 699',
      'email' => 'kancelar@equitylegal.cz',
      'copy'  => 'Advokátní úschova. Všechna práva vyhrazena.',
      'partner_text' => 'poskytováno v souladu s nejvyššími profesními, bankovními a bezpečnostními pravidly.',
    ],
  ];
}

function fuContent(string $page): array {
  $defaults = fuDefaults();
  $all = fuReadJson('content.json');
  return array_replace_recursive($defaults[$page] ?? [], $all[$page] ?? []);
}
