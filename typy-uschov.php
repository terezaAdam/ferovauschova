<?php
$pageTitle = 'Typy úschov – notářská, bankovní, soudní, realitní';
$pageDesc  = 'Přehled typů úschov peněz při koupi a prodeji nemovitosti: notářská úschova, bankovní úschova (Komerční banka, Česká spořitelna, ČSOB), soudní úschova, úschova u realitní kanceláře a na co si dát pozor.';
include 'includes/header.php';
?>

<section class="page-hero">
  <div class="container">
    <h1 class="page-hero__title">Typy úschov</h1>
    <p class="page-hero__desc">Úschovu dnes nabízí notáři, banky, soudy i realitní kanceláře. Podívejte se, jak jednotlivé druhy fungují a na co si dát pozor.</p>
  </div>
</section>

<section class="section">
  <div class="container">

    <div class="services-mobile-tabs">
      <div class="services-mobile-tabs__scroll">
        <button class="smt-btn active" data-target="notarska-uschova">Notářská</button>
        <button class="smt-btn" data-target="bankovni-uschova">Bankovní</button>
        <button class="smt-btn" data-target="komercni-banka">Komerční banka</button>
        <button class="smt-btn" data-target="ceska-sporitelna">Česká spořitelna</button>
        <button class="smt-btn" data-target="csob">ČSOB</button>
        <button class="smt-btn" data-target="bankovni-shrnuti">Shrnutí bankovní úschovy</button>
        <button class="smt-btn" data-target="soudni-uschova">Soudní</button>
        <button class="smt-btn" data-target="realitni-kancelar">U realitní kanceláře</button>
        <button class="smt-btn" data-target="na-co-si-dat-pozor">Na co si dát pozor</button>
      </div>
    </div>

    <div class="services-layout">

      <nav class="services-nav" aria-label="Obsah stránky">
        <ul>
          <li><a href="#notarska-uschova">Notářská úschova</a></li>
          <li><a href="#bankovni-uschova">Bankovní úschova</a></li>
          <li><a href="#komercni-banka">Bankovní úschova u Komerční banky</a></li>
          <li><a href="#ceska-sporitelna">Bankovní úschova u České spořitelny</a></li>
          <li><a href="#csob">Bankovní úschova u ČSOB</a></li>
          <li><a href="#bankovni-shrnuti">Shrnutí bankovní úschovy</a></li>
          <li><a href="#soudni-uschova">Soudní úschova</a></li>
          <li><a href="#realitni-kancelar">Úschova u realitní kanceláře</a></li>
          <li><a href="#na-co-si-dat-pozor">Na co si dát pozor</a></li>
        </ul>
      </nav>

      <div>

        <div id="notarska-uschova" class="service-section active">
          <h2>Notářská úschova</h2>
          <p>Tradiční řešení, které klade důraz na formálnost. Notářská úschova je jedním z klasických způsobů, jak při převodu nemovitosti nebo jiné důležité transakci zajistit bezpečné složení a výplatu finančních prostředků. Její výhodou je formální jistota – prostředky spravuje notář jako veřejný činitel, přičemž celý proces je upraven notářským řádem.</p>
          <p>V určitých případech může být notářská úschova vhodnou volbou – zejména pokud je požadována veřejná listina nebo specifická forma výstupu. Ve většině běžných realitních případů ale klienti často dávají přednost advokátní úschově, která nabízí větší flexibilitu, přímější komunikaci a úsporu času i nákladů.</p>
          <p><strong>Jak úschova peněz u notáře funguje?</strong></p>
          <ul>
            <li><strong>Smlouva o úschově nebo notářský zápis</strong> – strany transakce, tedy většinou kupující a prodávající, uzavřou smlouvu o úschově. Pokud je to potřeba, sepíše notář veřejnou listinu ve formě notářského zápisu.</li>
            <li><strong>Složení peněz na úschovní účet</strong> – kupující složí kupní cenu na zvláštní účet vedený notářem. Tento účet je oddělený od ostatních finančních prostředků notářské kanceláře.</li>
            <li><strong>Výplata po splnění podmínek</strong> – jakmile jsou splněny sjednané podmínky (např. zápis vlastnického práva do katastru), notář uvolní peníze prodávajícímu.</li>
          </ul>
          <p><strong>Kdy může být úschova peněz u notáře vhodná?</strong></p>
          <ul>
            <li>Pokud je požadována veřejná listina jako výstup z transakce</li>
            <li>Při specifických nebo formálně náročných úkonech</li>
            <li>Pokud si některá ze stran výslovně přeje řešení s důrazem na veřejnoprávní rámec</li>
          </ul>
          <p>Notářská úschova peněz je osvědčeným způsobem úschovy s důrazem na formální rámec, který zajišťuje notář jako nestranná veřejná osoba. Notář peníze přijme, bezpečně je uloží na speciálním účtu a následně vyplatí v souladu s dohodnutým scénářem.</p>
          <p><strong>Kdy se využívá notářská úschova?</strong></p>
          <ul>
            <li>Při prodeji nemovitostí, zejména pokud strany požadují maximální formální jistotu</li>
            <li>V obchodních transakcích, kde je vyžadována veřejná listina</li>
            <li>Při složitějších případech, kde se účastní více stran nebo institucí</li>
          </ul>
        </div>

        <div id="bankovni-uschova" class="service-section">
          <h2>Bankovní úschova</h2>
          <p>Stabilní varianta s důrazem na bankovní procesy. Bankovní úschova je způsob, jak zajistit bezpečné složení a výplatu peněz prostřednictvím banky, nejčastěji formou vázaného účtu. Banka v tomto procesu vystupuje jako neutrální prostředník, který pečlivě hlídá předem stanovené podmínky transakce a až po jejich naplnění uvolní finanční prostředky druhé straně.</p>
          <p><strong>Jak bankovní úschova funguje?</strong></p>
          <ul>
            <li><strong>Založení vázaného účtu</strong> – na základě dohody mezi kupujícím a prodávajícím je u banky založen tzv. vázaný účet.</li>
            <li><strong>Složení kupní ceny</strong> – kupující (nebo banka, pokud poskytuje úvěr) složí finanční prostředky na tento účet. Částka je zde zablokována až do splnění podmínek.</li>
            <li><strong>Uvolnění peněz prodávajícímu</strong> – jakmile jsou naplněny předem dohodnuté podmínky (např. zápis do katastru), banka částku uvolní ve prospěch prodávajícího.</li>
          </ul>
          <div class="type-card__cols" style="margin-top:1.5rem;">
            <div>
              <h4>Výhody bankovní úschovy</h4>
              <ul>
                <li>Silné institucionální zázemí – úschovu zajišťuje banka, která podléhá dohledu České národní banky a má standardizované procesy.</li>
                <li>Vysoká úroveň zabezpečení peněz – bankovní vázané účty jsou vedeny odděleně a jsou kryty bankovním systémem.</li>
                <li>Možnost napojení na hypotéku – v případě financování úvěrem bývá tento způsob preferovaný přímo bankou, zvlášť u developerských projektů.</li>
              </ul>
            </div>
            <div class="type-card__cols--cons">
              <h4>Nevýhody bankovní úschovy</h4>
              <ul>
                <li>Méně flexibility – banky postupují podle striktních vnitřních pravidel, úprava smluv na míru je často nemožná.</li>
                <li>Delší schvalovací procesy – založení účtu, schvalování podmínek a výplata peněz mohou trvat déle než u advokáta.</li>
                <li>Omezený kontakt – komunikace probíhá přes standardní klientská centra nebo formuláře, individuální poradenství či flexibilní úpravy smluv nebývají běžné.</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="komercni-banka" class="service-section">
          <h2>Bankovní úschova u Komerční banky</h2>
          <p>Bankovní úschova prostřednictvím vázaného účtu u Komerční banky je jednou z možností, jak zajistit bezpečný převod finančních prostředků – například při koupi nebo prodeji nemovitosti. Banka zde funguje jako neutrální prostředník, který uvolní složenou částku až po splnění sjednaných podmínek, typicky po provedení vkladu vlastnického práva do katastru nemovitostí. Tento typ úschovy je využíván zejména u transakcí financovaných hypotékou, kterou poskytuje samotná banka.</p>
          <p><strong>Jak to funguje?</strong></p>
          <ul>
            <li><strong>Založení vázaného účtu</strong> – na základě dohody mezi stranami banka založí účet, kam kupující složí dohodnutou částku.</li>
            <li><strong>Zajištění převodu peněz</strong> – finanční prostředky zůstávají na účtu zablokované. Banka je uvolní až po doložení splnění podmínek, například po zápisu do katastru nemovitostí.</li>
            <li><strong>Výplata prodávajícímu</strong> – po kontrole a ověření dokumentace banka převede peníze prodávajícímu.</li>
          </ul>
          <p><strong>Výhody bankovní úschovy u Komerční banky:</strong> důvěryhodnost banky, vhodné pro hypotéky poskytované Komerční bankou.</p>
          <p><strong>Co je dobré zvážit?</strong></p>
          <ul>
            <li>Doba vyřízení – zřízení a schválení účtu může trvat delší dobu, zvlášť při složitější transakci nebo v období vyššího vytížení.</li>
            <li>Nízká smluvní flexibilita – podmínky úschovy bývají pevně stanovené bankou, individuální požadavky klientů se do smluv obvykle nezohledňují.</li>
            <li>Bez právního servisu – banka neřeší právní aspekty transakce, neposkytuje právní poradenství, kontrolu smluv ani zastoupení klienta.</li>
            <li>Územní omezení – bankovní úschova u Komerční banky se vztahuje výhradně na převody nemovitostí nacházejících se na území České republiky.</li>
          </ul>
          <p><strong>Ceník:</strong></p>
          <ul>
            <li>Uzavření dohody o správě kupní ceny – 0,2 % ze spravované částky, min. 6 000 Kč, max. 20 000 Kč</li>
            <li>Poplatek za změnu účtu – 1 500 Kč</li>
            <li>Ostatní změny z podnětu klienta – 0,2 % ze spravované částky, min. 6 000 Kč</li>
          </ul>
        </div>

        <div id="ceska-sporitelna" class="service-section">
          <h2>Bankovní úschova u České spořitelny</h2>
          <p>Jistotní běžný účet České spořitelny funguje jako bankovní obdoba úschovy – umožňuje uschování prostředků do doby, než budou splněny předem dohodnuté podmínky obchodu. Je určen pro transakce s vyšší hodnotou a je možné jej otevřít pouze v souvislosti s hypotečním úvěrem nebo úvěrem u České spořitelny.</p>
          <p><strong>Jak účet u České spořitelny funguje?</strong></p>
          <ul>
            <li><strong>Sjednání jistotního účtu</strong> – účet vznikne, když máte u České spořitelny hypotéku nebo úvěr a uzavřete smlouvu o úschově prostředků. Pro jeho založení je nutné předložit kupní smlouvu, výpis z katastru a průkazy totožnosti obou stran.</li>
            <li><strong>Složení peněz</strong> – kupní cena či jiná částka je vložena na klientsky definovaný, oddělený účet. Tyto prostředky nelze použít do doby splnění podmínek.</li>
            <li><strong>Podmíněná výplata</strong> – po doložení naplnění podmínek (např. vlastnického vkladu do katastru) banka prostředky uvolní prodávajícímu, výplata proběhne automaticky.</li>
          </ul>
          <p><strong>Výhody jistotního účtu u České spořitelny:</strong></p>
          <ul>
            <li>Bankovní úschova s vysokou mírou zabezpečení – prostředky jsou kryty díky systému pojištění vkladů.</li>
            <li>Standardizované řešení pro nemovitosti – Česká spořitelna nabízí jistotní účet zejména klientům s hypotečním úvěrem.</li>
            <li>Naprostá formalita a jednoduchost – čistě bankovní proces bez právního poradenství.</li>
            <li>Bezpečné prostředí stabilní banky, fungující pod dohledem České národní banky.</li>
          </ul>
          <p><strong>Ceník jistotního účtu:</strong></p>
          <ul>
            <li>Vypořádání obchodu – 0,2 %, min. 6 000 Kč, max. 20 000 Kč</li>
            <li>Úrok při uložení 1 mil. Kč – 0,01 %</li>
            <li>Úrok při uložení 3 mil. Kč – 0,01 %</li>
            <li>Měna účtu – vždy CZK</li>
            <li>Ostatní – lze sjednat pouze k hypotečnímu úvěru od ČS, nad 12,5 mil. Kč individuální poplatek</li>
          </ul>
          <p><strong>Na co si dát pozor:</strong> nízká flexibilita – smluvní podmínky jsou pevně dané bankou bez možnosti individuálních úprav; bez právního servisu – banka neposkytuje právní poradenství ani nezkontroluje smlouvy; dostupné pouze pro nemovitosti v ČR – služba se vztahuje výlučně na převody českého nemovitostního majetku.</p>
        </div>

        <div id="csob" class="service-section">
          <h2>Bankovní úschova u ČSOB</h2>
          <p>ČSOB nabízí službu tzv. úhrada kupní ceny (vázaný účet), která umožňuje složení finančních prostředků na speciální účet, jenž je uvolněn po splnění předem stanovených podmínek (např. zápis do katastru nemovitostí).</p>
          <p><strong>Jak úschova funguje?</strong></p>
          <ul>
            <li><strong>Založení vázaného účtu</strong> – slouží ke složení kupní ceny; účet lze využít pouze tehdy, pokud jste klientem ČSOB nebo máte sjednaný hypoteční či stavební úvěr u ČSOB.</li>
            <li><strong>Složení finančních prostředků</strong> – kupní cena je převedena na účet spravovaný bankou a zůstává tam až do splnění podmínek.</li>
            <li><strong>Ověření podmínek</strong> – banka kontroluje například zápis do katastru nebo jiné sjednané dokumenty.</li>
            <li><strong>Výplata prodávajícímu</strong> – po ověření podmínek banka peníze uvolní na účet prodávajícího.</li>
          </ul>
          <p><strong>Výhody bankovní úschovy u ČSOB:</strong> oficiální služba banky pod dozorem ČNB, která zajišťuje bezpečné vedení prostředků.</p>
          <p><strong>Co je třeba zohlednit:</strong></p>
          <ul>
            <li>Poplatek za zřízení služby – 0,1 % z částky, minimálně 7 500 Kč, u individuálních úprav až 10 000 Kč</li>
            <li>Bez úročení – prostředky na účtu nejsou úročeny.</li>
            <li>Nízká flexibilita – smlouvy nejsou individuálně přizpůsobitelné, bankovní procesy jsou standardizované.</li>
            <li>Žádná právní asistence – banka neposkytuje konzultace, nezkontroluje smlouvy ani nenabízí právní zastoupení.</li>
            <li>Územní omezení – služba je dostupná pouze u nemovitostí na území České republiky.</li>
          </ul>
        </div>

        <div id="bankovni-shrnuti" class="service-section">
          <h2>Shrnutí bankovní úschovy</h2>
          <p>Bankovní úschova, často označovaná jako jistotní nebo vázaný účet, je způsob, jak bezpečně převést peníze mezi dvěma stranami – typicky při koupi nebo prodeji nemovitosti. Kupující nejprve složí dohodnutou částku na speciální účet vedený bankou. Banka pak uvolní tyto prostředky prodávajícímu až ve chvíli, kdy jsou splněny předem dohodnuté podmínky, například zápis vlastnického práva do katastru nemovitostí.</p>
          <div class="type-card__cols" style="margin-top:1.5rem;">
            <div>
              <h4>Další výhody</h4>
              <ul>
                <li>Záruka instituce – banka představuje stabilního a prověřeného správce finančních prostředků.</li>
                <li>Přímé napojení na hypoteční úvěry – při financování přes stejnou banku bývá bankovní úschova přirozenou součástí procesu.</li>
                <li>Zajištění proti podvodům – kupní cena je chráněna a není vydána dříve, než se splní podmínky.</li>
                <li>Zajištění proti zneužití – banka nemůže s penězi nijak manipulovat, jsou uloženy bezpečně, odděleně od ostatních prostředků.</li>
              </ul>
            </div>
            <div class="type-card__cols--cons">
              <h4>Slabiny a omezení</h4>
              <ul>
                <li>Nulová právní odpovědnost – banka neposkytuje právní poradenství, nezkoumá platnost ani obsah kupní smlouvy, neupozorňuje na rizika.</li>
                <li>Nízká flexibilita – banky pracují s přednastavenými šablonami a postupy, složitější nebo netypické transakce často není možné přes banku realizovat.</li>
                <li>Zdlouhavé procesy a schvalování – vyřízení žádosti, otevření účtu i samotné uvolnění peněz může trvat déle než u advokáta.</li>
                <li>Územní omezení – většina bank umožňuje úschovu pouze pro transakce týkající se nemovitostí na území ČR.</li>
              </ul>
            </div>
          </div>
          <p style="margin-top:1.5rem;"><strong>Pro koho je bankovní úschova vhodná?</strong></p>
          <ul>
            <li>Pro klienty, kteří již mají hypotéku v dané bance a využijí její související služby.</li>
            <li>Pro jednoduché transakce s jasnými podmínkami a minimální právní složitostí.</li>
            <li>Není ideální pro složitější obchody, specifické dohody nebo případy, kde je třeba právní zastoupení, kontrola smluv či poradenství.</li>
          </ul>
          <p><strong>Na co si dát pozor:</strong></p>
          <ul>
            <li>Poplatky – banky si za vedení jistotního účtu účtují zpravidla 0,1 – 0,2 % z uložené částky, s minimální sazbou v řádu tisíců korun.</li>
            <li>Nízká flexibilita – banky neumožňují individuální úpravy podmínek, vše se řídí jejich interními pravidly.</li>
            <li>Žádná právní garance – banka nenese odpovědnost za správnost nebo výhodnost kupní smlouvy a neposkytuje právní poradenství.</li>
            <li>Úschova je obvykle dostupná pouze při financování hypotečním úvěrem banky – bez úvěru tuto službu nemusí banka vůbec nabídnout.</li>
          </ul>
        </div>

        <div id="soudni-uschova" class="service-section">
          <h2>Soudní úschova</h2>
          <p>Soudní úschova je specifická forma uložení peněz, listin nebo jiných cenností u soudu. Využívá se zejména v případech, kdy si složitel není jistý, komu má být plnění správně poskytnuto, nebo kdy druhá strana bezdůvodně odmítá plnění převzít. Typicky se jedná o složité právní nebo majetkové situace, kdy panuje spor nebo hrozba z prodlení.</p>
          <p>Tento způsob úschovy je upraven v občanském zákoníku (§ 335 a násl.) a představuje spíše procesní nástroj než běžné řešení pro každodenní právní a obchodní transakce. I když je soudní úschova bezpečná a garantovaná státem, má svá značná omezení – je zdlouhavá, neosobní a zatížená složitou administrativou. Právě proto ji v praxi převyšují modernější formy úschovy, především úschova advokátní, která nabízí nejen bezpečnost, ale i vysokou míru flexibility, právního servisu a osobního přístupu.</p>
          <p><strong>Jak soudní úschova funguje?</strong></p>
          <ul>
            <li><strong>Návrh soudu</strong> – osoba, která chce složit peníze (nebo jinou majetkovou hodnotu), podává návrh k příslušnému soudu. V návrhu musí být jasně popsáno, komu je částka určena a za jakých podmínek má být vydána.</li>
            <li><strong>Rozhodnutí a složení částky</strong> – pokud soud návrhu vyhoví, vydá rozhodnutí a umožní složení prostředků na účet soudu.</li>
            <li><strong>Výdej složené částky</strong> – peníze soud vydá příjemci, jakmile jsou splněny podmínky uvedené v rozhodnutí, nebo pokud je příjemce zcela nepochybně určen.</li>
          </ul>
          <div class="type-card__cols" style="margin-top:1.5rem;">
            <div>
              <h4>Výhody soudní úschovy</h4>
              <ul>
                <li>Zákonná forma úschovy s plnou garancí státu</li>
                <li>Nezávislost na soukromých subjektech</li>
                <li>Vhodná pro sporné a nejasné situace</li>
              </ul>
            </div>
            <div class="type-card__cols--cons">
              <h4>Nevýhody a omezení</h4>
              <ul>
                <li>Zdlouhavá byrokracie – zahájení soudní úschovy vyžaduje formální návrh, vyčkání rozhodnutí a celý proces může trvat týdny až měsíce.</li>
                <li>Není vhodná pro běžný převod kupní ceny – soudní úschova není určena pro standardní realitní transakce, např. koupi či prodej nemovitosti, a v praxi se pro tyto účely nepoužívá.</li>
                <li>Žádná právní asistence – soud úschovu pouze provádí, nijak neposuzuje výhodnost, správnost ani právní bezpečnost smluv mezi stranami.</li>
              </ul>
            </div>
          </div>
        </div>

        <div id="realitni-kancelar" class="service-section">
          <h2>Úschova peněz u realitní kanceláře</h2>
          <p>Častá praxe, která ale není vždy právně bezpečná. Úschova kupní ceny prostřednictvím realitní kanceláře se v minulosti často využívala při převodech nemovitostí, zejména tam, kde kancelář zprostředkovávala celý obchod. V některých případech může být rychlá a pohodlná, zejména pokud obě strany důvěřují dané kanceláři.</p>
          <p>Přesto je třeba zdůraznit, že se nejedná o úschovu ve smyslu zákona, a klientům tak chybí právní záruky, které by měli například při advokátní nebo notářské úschově. Realitní kancelář totiž není ze zákona povinna mít právnické vzdělání ani pojištění odpovědnosti ve výši srovnatelné s advokátem.</p>
          <p><strong>Jak probíhá úschova peněz u realitní kanceláře?</strong></p>
          <ul>
            <li><strong>Písemná dohoda o úschově</strong> – klient podepisuje dohodu s realitní kanceláří. Tato dohoda není upravena zákonem a její kvalita se může lišit. Kancelář ji může nabídnout jen na výslovné přání klienta.</li>
            <li><strong>Převod peněz</strong> – peníze se převádějí na účet vytvořený kanceláří, který je ale vedený u banky nebo jiné finanční instituce se sídlem v České republice.</li>
            <li><strong>Podání na katastr</strong> – návrh na vklad podává obvykle kancelář sama, bez právníka.</li>
            <li><strong>Výplata prodávajícímu</strong> – po přepisu nemovitosti jsou peníze vyplaceny. Podmínky výplaty však bývají stejné a bez dostatečných pojistek.</li>
          </ul>
        </div>

        <div id="na-co-si-dat-pozor" class="service-section">
          <h2>Na co si dát pozor</h2>
          <p>Bezpečí vašich peněz začíná u správně zvoleného poskytovatele. Úschova peněz při koupi nemovitosti nebo jiných důležitých transakcích je dnes běžná praxe. Bohužel ale zároveň také oblast, kde se může stát mnoho chyb - často nevratných. A právě proto je důležité vědět, komu své peníze svěřujete a za jakých podmínek.</p>
          <p><strong>Kdo úschovu poskytuje</strong></p>
          <p>Ne každý, kdo nabízí úschovu, je k tomu odborně i právně způsobilý. Úschovu dnes nabízí realitní kanceláře, banky, notáři, soudy a advokáti, nebo i různí „zprostředkovatelé“. Vždy se proto ptejte:</p>
          <ul>
            <li>Má ten, kdo úschovu drží, zákonnou odpovědnost?</li>
            <li>Je jeho činnost pojištěna?</li>
            <li>Má ten, kdo úschovu drží, právní vzdělání?</li>
            <li>Je jeho činnost pod dohledem vyššího, nestranného orgánu?</li>
          </ul>
          <p>Výhodou může být i podepsání mlčenlivosti uschovatelem.</p>
          <p><strong>Oddělený účet je základ</strong></p>
          <p>Peníze v úschově musí být vedeny na odděleném, speciálně zřízeném účtu, ideálně výlučně na vaše jméno nebo na konkrétní úschovu. Pokud se vám někdo nabídne, že peníze složí na svůj běžný provozní účet, nebo že je tento postup běžný, buďte opatrní.</p>
          <p><strong>Jasně sepsaná smlouva</strong></p>
          <p>Ústní dohoda nebo nejasný dokument? Nikdy. Každá úschova by měla být podložena kvalitní písemnou smlouvou, která přesně stanoví:</p>
          <ul>
            <li>kdo úschovu poskytuje a kdo do ní vkládá prostředky;</li>
            <li>výše prostředků;</li>
            <li>jaké jsou podmínky výplaty prostředků, komu mají být vyplaceny;</li>
            <li>co se stane v případě sporu - zda dojde k vyplacení nebo nevyplacení prostředků.</li>
          </ul>
          <p><strong>Informovanost v průběhu úschovy</strong></p>
          <p>Klient by měl mít vždy přehled o tom, co se s jeho prostředky děje - kdy byly připsány, zda byly splněny podmínky výplaty, kdy a komu budou odeslány.</p>
          <p><strong>Právní a finanční jistota</strong></p>
          <p>Právní a finanční jistota není samozřejmostí - jen správně nastavená úschova vám zaručí, že vaše prostředky jsou skutečně chráněny. Poskytovatel úschovy by měl mít právnické vzdělání a pojištění - každý advokát musí být pojištěn minimálně na pět milionů korun, v případě vyšších úschov je možnost připojištění.</p>
        </div>

      </div>
    </div>
  </div>
</section>

<section class="cta-banner">
  <div class="container">
    <h2>Nevíte, který typ úschovy je pro vás nejvhodnější?</h2>
    <p>Poradíme vám zdarma a nezávazně, jaká forma úschovy se hodí na vaši konkrétní transakci.</p>
    <a href="/kontakty.php" class="btn btn--primary">Nezávazně poptat úschovu</a>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
