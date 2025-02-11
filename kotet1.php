<?php
include_once("include/inc_page.php");
include_once("dictionary/dict_hungarian.php");

$page = new Page(SITE_NAME, TITLE_FIRST);
?>

<!DOCTYPE html>

<html>

<head>
    <?php
    print($page->HTMLCharset());
    print($page->HTMLStyleSheets());
    print($page->HTMLTitle());
    ?>
</head>

<body>
<div id="page">

    <?php
    $page->Header();
    $page->Menu();
    ?>

    <h2 style="clear: both;">Az I.kötet alapkoncepciója</h2>

    <p><img src="images/bigfoot.png" alt="Bigfoot" width="128" height="128" class="illusztracio"/>
        Olyan tematikus antológia alkotása, amely klasszikus, ámde mégis újfajta zombitörténeteket
        tartalmaz. Önmagunkat nem megtagadva egy enyhe idiotizmus, fanyar, avagy fekete humor abszolút
        belefér minden történetbe. Koherens, egymással akár lazán összefüggő novellákat várunk. Mindehhez
        igyekszünk megadni a kellő alapot. Ha már elkészült néhány novella, akkor már lehet közéjük összekötő
        történeteket írni, amelyek &quot;összeragasztják&quot; az egészet.
    </p>

    <p>A zombikór mindenféle fajtája belefér a művekbe, attól függően, ki hogyan szereti. A sírból kikelő,
        alig, félig vagy teljesen elrothadt zombik, csontvázak már semmiféleképpen nem gyógyíthatók (természetesen).
        Zombi mivoltuk csak közvetlen az agyban, gerinc(velő)ben okozott nagy mértékű károsítás útján szüntethető meg.
        Az általuk megharapott, megkarmolt, zombivá változott élő emberek a fentiek értelmében lehetnek gyógyíthatóak is.
        Itt azért talán a sérülés mértékét, illetve az eltelt időt figyelembe lehet venni. Minél nagyobb, régebbi,
        annál nehezebb, s annál tovább tart a gyógyítás.</p>

    <p>Terveink szerint az antológia ebook (PDF) formában jelenik majd meg, és ingyen letölthető lesz a Lidércfény oldaláról.
        Ha esetleg lesz rá pénzkeret, akkor jó lenne nyomtatott példányokat is készíteni belőle, de ez sajnos egyáltalán
        nem biztos.
    </p>

    <h2>Dokumentumok</h2>

    <ul>
        <li>Az első kötet világleírása PDF-ben: <a href="download/Simagöröngyös_V5.pdf" target="_blank">Simagöröngyös_V5.pdf</a></li>
        <li>Homoergaster: Kísérleti tévedések, avagy: a keleti csőd, a nyugati blama, és a balkáni rettenet kezdete <a href="download/Homoergaster_Simagöröngyös_péntek.pdf"
                                                                                                                       target="_blank">Homoergaster_Simagöröngyös_péntek.pdf</a>
        </li>
        <li>Homoergaster: A Lepkelány, a zombilepkék, a tank <a href="download/Homoergaster_A_Lepkelány.pdf" target="_blank">Homoergaster_A_Lepkelány.pdf</a></li>
        <li>Craz: A pillanat varázsa <a href="download/Craz_A_pillanat_varázsa.pdf" target="_blank">Craz_A_pillanat_varázsa.pdf</a></li>
        <li>Craz: Száz lépés <a href="download/Craz_Száz_lépés.pdf" target="_blank">Craz_Száz_lépés.pdf</a></li>
        <li>Craz: További lépések, avagy a Mucimackó hadművelet <a href="download/Craz_További_lépések.pdf" target="_blank">Craz_További_lépések.pdf</a></li>
        <li>Craz: Béla <a href="download/Craz_Béla.pdf" target="_blank">Craz_Béla.pdf</a></li>
        <li>Craz és Cyrus Livingstone: Aratási idény <a href="download/Craz_Livingstone_Aratási_idény.pdf" target="_blank">Craz_Livingstone_Aratási_idény.pdf</a></li>
        <li>Boros György László: Halottak napközben <a href="download/Aardvark_Halottak_napközben.pdf" target="_blank">Aardvark_Halottak_napközben.pdf</a></li>
        <li>Boros György László: Pulitzer zombi <a href="download/Aardvark_Pulitzer_zombi.pdf" target="_blank">Aardvark_Pulitzer_zombi.pdf</a></li>
        <li>Mickey Long: Vér és kátrány <a href="download/Mickey_Long_Vér_és_kátrány.pdf" target="_blank">Mickey_Long_Vér_és_kátrány.pdf</a></li>
        <li>Chiron Lark: Randevú fekete Audiban <a href="download/Chiron_Lark_Kálika.pdf" target="_blank">Chiron_Lark_Kálika.pdf</a></li>
        <li>Illustris Fulgur: A fertőzés terjed – rettegj, Baranyatenyere <a href="download/Illustris_Fulgur_A_fertőzés_terjed.pdf" target="_blank">Illustris_Fulgur_A_fertőzés_terjed.pdf</a>
        </li>
        <li>Jimmy Cartwright: Turistajárat <a href="download/Jimmy_Turistajarat.pdf" target="_blank">Jimmy_Turistajarat.pdf</a></li>
        <li>Jimmy Cartwright: Végrehajtó <a href="download/Jimmy_Vegrehajto.pdf" target="_blank">Jimmy_Vegrehajto.pdf</a></li>
        <li>Maggoth: Járkáló halottak <a href="download/Maggoth_Járkáló_halottak.pdf" target="_blank">Maggoth_Járkáló_halottak.pdf</a></li>
        <li>Maggoth: Az indián zombi suttogása <a href="download/Maggoth_Az_indián_zombi_suttogása.pdf" target="_blank">Maggoth_Az_indián_zombi_suttogása.pdf</a></li>
        <li>Maggoth: Halott ninja ritkán táncol <a href="download/Maggoth_Halott ninja ritkán táncol.pdf" target="_blank">Maggoth_Halott ninja ritkán táncol.pdf</a></li>
        <li>Ndy: Az özvegyember, az orosz szputnyik és néhány zombi története (És egy méltóságától megfosztott karakteré.) <a href="download/Ndy_Simagöröngyös.pdf" target="_blank">Ndy_Simagöröngyös.pdf</a>
        </li>
        <li>Kapitány: Csirkepörkölt ebédre, avagy a féllábú vérbíró kriptája <a href="download/Kapitany_Csirkeporkolt_ebedre.pdf"
                                                                                target="_blank">Kapitany_Csirkeporkolt_ebedre.pdf</a></li>
    </ul>

    <h2>A helyszín</h2>

    <p><img src="images/ghoul.png" alt="Ghoul" width="128" height="128" class="illusztracio"/>
        Simagöröngyös egy magyarországi zsáktelepülés Bács-Kiskun és Baranya megye határán, viszonylag közel a Dunához,
        a szerb és a horvát határhoz. Azért zsáktelepülés, mert csak egyetlen bevezető útja van, s a vasút egyik szárnyvonala
        is itt ér véget. Közvetlen szomszédságában Salakszentmotoros, Külső-Alsó és Baranyatenyere található.

        Simagöröngyös maga hosszú évszázadok óta lakott település, melyet jórészt elkerült a történelem vihara, de régészek
        találtak már a környéken avar, szarmata, római és török kori tárgyi emlékeket. Ez talán annak is köszönhető, hogy
        kunhalmok gyűrűje közé épült egy viszonylag sík terepre – innen is kapta a nevét. Körülötte kiterjedt tanyavilág
        található, melyeket kisebb-nagyobb erdők, erdősávok szakítanak meg. A település határában egy komoly méretű mocsár
        is elterül.

        Lakossága jelenleg 1182 fő, polgármestere független, s igazából a napi politika messzire elkerüli a lakókat.
        A polgármester, Göröngyös István már az ötödik ciklusát kezdi, melyből látható egyrészt, hogy a település lakói
        meglehetős bizalommal vannak iránta, másrészt pedig, hogy nem igazán szeretik a változásokat, bár maradinak nem lehet
        őket nevezni.

        A legtöbben mezőgazdaságból, állattartásból élnek, főleg az Új Barázda Zrt.-nél (a településen többen csak
        &quot;újgarázda&quot;-ként említik), mely 11 éve működtet már telephelyet Simagöröngyösön. Egyébként a telephely
        vezetőivel alapvetően nincs gond, hiszen mindegyik becsületes, helyi lakos.
    </p>

    <p>
        Infrastruktúrája – részben az Új Barázda Zrt.-nek (mely régebben az Új Barázda MGTSZ nevet viselte) köszönhetően
        – elég fejlett, a közutak jól karbantartottak, rendszeres buszjárat, sőt buszállomás is van. A már említett vasút
        a személyszállításon túl komoly teherforgalmat is bonyolít, alapvetően mezőgazdasági termékekkel. Nemrégen készült
        el minden utcában a csatornázás. A villanyáramot, gázt és vezetékes vizet már az 1990-es évek közepén bevezették
        minden háztartásba. A város központjában lévő épületek fűtését termálvízzel oldják meg, s a város határában víztisztító
        is működik, amely a közeli kis patak vizéből nyer ivóvizet. Azonban a biztonság kedvéért megtartották és karbantartják
        az 1970-es években épült hidroglóbuszt is.

        A modern technológia még nem igazán elterjedt. Vezetékes telefon ugyan a legtöbb háztartásban van, ám a mobilkészülékek
        az alacsony térerő miatt nem működnek túl megbízhatóan. Az internetszolgáltatás sem általános, de valójában nem is
        igénylik a helyiek. Azonban a városházán, a körzeti megbízott irodájában, az orvosi rendelőben, a Művelődési Házban,
        az Óvoda és Általános Iskolában, valamint az Új Barázda Zrt. irodájában ISDN modemekkel hozzáférhető a világháló.
    </p>

    <p>
        A településen természetesen van templom (ökumenikus, bár a lakosság túlnyomó része római katolikus, ill. református),
        a Művelődési Házban működik mozi és könyvtár is. A bevezető út mellett, a település legszélén van egy üzemanyagtöltő
        állomás, illetve van több kocsma, egy ABC, egy piactér, egy sportpálya, egy temető és egy falumúzeum is. A falu
        főterén egy második világháborús T-34 tank van kiállítva.
    </p>

    <p>
        A település északi határától néhány kilométerre található egy várrom is, mely mellett néhány száz méterrel található
        az Új Barázda Zrt. irodaépülete. Ez utóbbi üzemeltet még egy dögtelepet, egy ülepítőt és egy vegyi raktárat is, ahol
        egyéb vegyi katyvaszok mellett főleg műtrágyát tárolnak. Állítólag van egy illegális akkumulátortemetőjük is, ámbár
        a helyiek jobban tartanak a salakszentmotorosi azbesztpalagyár káros hatásaitól...
    </p>

    <p>
        Ebben a környezetben szabadul el hirtelen a zombikórság. A falu lakosai fokozatosan változnak át élőholttá. Várható
        a honvédség beavatkozása is, de ez már az írókon múlik :-)
    </p>

    <h2>Az alaptörténet</h2>

    <p><img src="images/vampire.png" alt="Vampire" width="128" height="128" class="illusztracio"/>
        A Szovjetunió néhány tudósa biológiai kísérleteket végez űrbe küldött műholdakon. Amikor azonban az egyik műholdat
        elveszítik – technikai okok következtében –, a szovjet kormány leállítja a programot. Néhány évtizeddel később –
        vagyis napjainkban – az USA néhány űrkutató tudósa megtalálja az elveszettnek hitt szovjet műholdat. Ám először
        ők sem tudják, mit is találtak pontosan. Némi kutatás után kiderül, hogy miről van szó, ám ekkor az amerikaiak
        is elveszítik szem elől a szatellitet, amely végérvényesen összezavarodik, elveszíti navigációs képességét. Alig
        néhány órával később, péntek éjjel lezuhan, pont a simagöröngyösi vegyi raktárba.
    </p>

    <p>
        Az ÚB Zrt. helyi vezetése épp ezen a napon, a heti munkaidő végén jelenti be, hogy megszünteti két ágazatát
        (a tehenészetet és a csirketelepet), mivel azok jó ideje nem termelnek profitot. Ezzel a munkások körében
        végleg elvetik a sulykot, akiknek a teljes kollektívája úgy dönt, hogy – bár a hét végi ügyeleteket ellátják –
        hétfőtől tüntetni kezdenek, ha addig a vezetőség jobb belátásra nem tér.
    </p>

    <p>
        Ezt tetézi még a műhold becsapódása, ami miatt ki kell hívni a vegyvédelmi szakembereket, akik a helyszín
        biztosítására összetrombitálják a környékbeli rendőröket és egy szakasznyi katonát is. A szakemberek igyekeznek
        elhárítani a közvetlen veszélyt, valamint a már keletkezett károkat megszüntetni. Persze a becsapódásban mindenféle
        mérgező gázok, folyadékok szabadultak el, amelyek összevegyülve – a szél &quot;kedvező&quot; hatásának köszönhetően
        – elindulnak a közeli temető irányába. A temetőből hétfő hajnalban előjövő zombikkal először a még raktárnál
        tevékenykedő szakemberek, rendőrök és katonák találkoznak, épp akkor, amikor a munkások tüntetése elkezdődik.
        Hamarosan elszabadul a pokol...
    </p>

    <h2>A szereplők</h2>

    <p><img src="images/werewolf.png" alt="Werewolf" width="128" height="128" class="illusztracio"/>
        <strong>Göröngyös István</strong>, polgármester, gazdálkodó. A helyiek csak Pistázzák. 52 éves, magas termetű, pirospozsgás arcú, szilaj tekintetű, de békés, nyugodt ember.
        Felmenői szinte mind gazdálkodók, parasztok, kulákok voltak, így ez az ő testalkatán és gondolkodásmódján is meglátszik. Fekete, sűrű haját rövidre nyírja, öltözködése
        férfiasan elegáns. Hivatali ügyeit öltönyben, egyéb közéleti teendőit szövetnadrágban, fehér ingben, esetleg kötött pulóverben intézi. Egy közepes méretű, zöld Land
        Roverrel jár.
    </p>

    <p>
        <strong>Csányiné Sima Magdolna</strong>, a polgármester titkárnője, mindenki Magdikája. 56 éves, nyugodt természetű, barnából őszülő, molett asszonyság. Hétköz- és
        munkanapokon egyszerűen öltözködik, ünnepnapokon kirittyenti magát. Értelmiségi családból származik. Közlekedési eszköze egy női kerékpár.
    </p>

    <p>
        <strong>Sípos Béla</strong>, iskolaigazgató, tornatanár. A gyerekeknek Bélabá. 39 éves, kisportolt testalkatú, vörös hajú, életvidám fiatalember. Nyolc éve vezeti a helyi
        tanintézményt a diákok és a szülők nagy megelégedésére. Természetvédő, gyalog jár, de ha siet, mountain bikeal közlekedik. Öltözködése elfoglaltságától függ, igazgatóként
        öltönyben, tornatanárként melegítőben, a hétköznapi életben farmerben, pólóban jár.
    </p>

    <p>
        <strong>Nagy Bernát</strong>, plébános. Időnként csak Bernátatyának hívják. 64 éves, kövérkés, ősz, feje tetején kopasz, borvirágos kedvű örök tanító. Harminc éves
        szolgálata alatt jól megismerte a település lakosságát. Mindig a hivatásának, s az egyházi ünnepeknek megfelelő öltözéket visel. Egy régebbi típusú fekete Mercedes
        tulajdonosa.
    </p>

    <p>
        <strong>Seres Antal</strong>, kocsmáros, a Seres Antal Borozójának tulajdonosa, csaposa, köznéven Söröstóni. 45 éves, szikár, vékony testalkatú, kissé mogorva, de jó
        szándékú ember. Fekete haja a halántékánál már őszül. Egyszerű, hétköznapi ruhákat hord, de csaposként kötényt köt. Piros, tuningolt Lada kombit hajt.
    </p>

    <p>
        <strong>Boros Géza</strong>, kocsmáros, a Boros Géza Sörözőjének tulaja, pultosa, ismert nevén Borza. 47 éves, jól megtermett, de még épp nem kövér, vidám fickó, szőke
        hajjal. Kissé magának való. Általában melegítőkben jár (nem susogósokban), s nemrég vett egy új Skodát.
    </p>

    <p>
        <strong>Akác Ferenc</strong>, a Szúrós Akác Kisvendéglő tulajdonosa. Jobbára Aferi. 41 éves, átlagos testalkatú, világosbarna hajú, bőbeszédű ember. Még nem nősült meg,
        viszont három (akkoriban) fiatal lányt is teherbe ejtett, így két fiú és egy leánygyermek &quot;boldog&quot; apukája. Öltözködése modern, kedveli a divatos dolgokat. Régi
        Opelét nemrég cserélte le egy új Toyota pickupra.
    </p>

    <p>
        <strong>Csipa Mihály</strong>, körzeti megbízott. Többnyire csak Misi. 37 éves, sportos testalkatú, kopasz, a rend éber őre. Hivatali idejét a szolgálati egyenruhájában
        tölti, magánéletében bőr rockerszerkót visel. Kemény, de igazságos. Van egy régi, de jól karbantartott MTZ-je, de munkaidőben a kitűnően felszerelt szolgálati Lada Nivával
        közlekedik. Szellemi értelemben kissé egyszerű, mondhatni a többiekhez képest mindig le van maradva két lépéssel. Ezért tart segédet.
    </p>

    <p>
        <strong>Szekeres Kálmán</strong>, Misi segéde. Amikor nagyon erőlködik, hogy megfeleljen, akkor Mikorkakálmán. Egyébként csak Szeka. 33 éves, rendőrtiszti főiskolát
        végzett, &quot;alighajú&quot;, kisportolt fiatalember. Lokálpatrióta, szívét-lelkét kitenné Simagöröngyösért, ami szerinte a leggyönyörűbb magyarországi település. Ő maga
        kérte, hogy itt, szülőhelyén szolgálhassa és védhesse a rendet. Misivel az eltelt néhány év alatt jól összebarátkozott, együtt járnak motorozni a környéken. Egy vadiúj
        Harleyt hajt. A helyi lányok odavannak érte, de rossz nyelvek szerint közte és Misi közt több van mint barátság.
    </p>

    <p>
        <strong>Sápsepesy Aurél</strong>, az ÚB Zrt. telepvezetője. Néha Újgarázda. 67 éves, ősz hajú, a múlt rendszerben szocializálódott, mogorva, magának való öregúr. Kopottas
        öltönyökben jár, amiket lassan már ki is hízik. Az ÚB Zrt. helyi telephelyét mindettől függetlenül határozottan jól vezeti. Virágzó, a település lakosságának többségének
        munkát adó, szép profitot termelő vállalat élén dölyfösködik. A rendszerváltáskor sikerült hozzájutnia egy fekete Volgához, azóta is azzal jár.
    </p>

    <p>
        <strong>Kiss Klára</strong>, Aurél titkárnője, általában Kálika. 48 éves, hosszú fekete hajú, határozottan csinos, talpraesett nő. Első találkozásra természetében hasonlít
        a főnökére. Másodikra is. Alattomos egy nőszemély, aki időnként nem szégyelli nálánál sokkal fiatalabb embereknek is bevetni női bájait a siker érdekében. Főnöke Volgájával
        viteti magát, a főnöke pénzén vásárolt kosztümöket, bundákat, cipőket, csizmákat, ékszereket, stb. hordja. Régebben Ludmilla Primadonszkaja néven a KGB volt könyvelője
        volt. A simagöröngyösi események során nyomtalanul eltűnt, a magyar elhárítás információi szerint az orosz titkosszolgálat ügynöke rabolta el.
    </p>

    <p>
        <strong>dr. Hoffmann Huba</strong>, háziorvos. Csak simán Doktorúr. 56 éves, pocakosodó, sötétbarna hajú, komoly ember. &quot;A gyógyítás nem játék.&quot; Amikor a
        közösségről, egészségmegőrzésről, sportról van szó, mindig lehet vele találkozni. Fontosnak tartja, hogy az emberek bizalommal forduljanak hozzá. Egyszerű farmerben,
        szövetingben jár, amikor nem a fehér köpenyét hordja. Több éves szürke Audija van.
    </p>

    <p>
        <strong>Markó Mária</strong>, orvosasszisztens, szexuális munkás. Alapvetően Marokmarcsa. 28 éves, jelenleg épp barna hajú, filigrán, vidám természetű konzumhölgy. Nővérnek
        tanult, így lett belőle a Doktorúr asszisztense. Ezen mondás szellemében él: &quot;A férfiak hamarabb találnak munkát, a nők viszont hamarabb keresnek pénzt.&quot;
        Öltözködésében is ez tükröződik, ám a rendelőben visszafogottabb, bár így sem lehet tudni, hogy a köpenye alatt mennyire hosszú is az a szoknya. Azzal jár, amivel (akivel)
        akar.
    </p>

    <p>
        <strong>Bőgő Károly</strong>, a benzintöltő állomás üzemeltetője. Csak Kutaskarcsi. 29 éves, szőkésbarna hajú, átlagos testalkatú fiatalember. Egyszerű, mint az egyszeregy,
        de azért helyén van az esze. Idióta humora van, kissé arrogáns, ami abból következik, hogy kisebbségi érzéstől szenved. A munkahelyén kék kezeslábast hord, egyébként
        egyszerű szövetnadrágot, inget, kötött pulóvert. Egy rozzant kerékpárja van.
    </p>

    <p>
        <strong>Dünnyögő István</strong>, '56-os hős. Naná, hogy Pistabá. 73 éves, jó egészségnek örvendő, de vékony testalkatú, melankolikus öregúr. Kopottas ruhákban jár, de
        felesége azért tisztességesen kitisztítja azokat. Gyalog jár, még bot nélkül közlekedik.
    </p>

    <p>
        <strong>Nagypál Sándor</strong>, II. világháborús veterán. Természetesen Sanyibá. 89 éves, beteges, kövérkés, kopasz idős bácsi. Kedélyállapota ma már változékony, de
        alapvetően még mindig jó kedélyű, mondhatni életvidám. Nem nagyon mozdul ki otthonról, de ha meglátogatják, szívesen beszél a háborúról, s megmutatja kitüntetéseit, egyéb
        relikviáit.
    </p>

    <p>
        <strong>Szerjozsa Tokorov professzor</strong>, szovjet tudós, Szemjonov volt kollégája. Biológiai fegyverekkel kapcsolatos űrkísérleteket folytatott a 60-as évek elején.
        Kísérleteinek kudarca után a szovjet vezetés száműzetésre ítélte.
    </p>

    <p>
        <strong>Aljosa Szemjonov</strong>, szovjet tudós, Tokorov professzor volt kollégája. Tokorovval együtt biológiai fegyverek fejlesztésében vettek részt a 60-as években.
        Kísérleteinek kudarca után kivégezték.
    </p>

    <p>
        <strong>Dr.Bill Armstrong</strong>, afroamerikai tudós, Dr.John Campbell kollégája. Szereti a nőket, a kosárlabdát és a hidegháborús memoárokat. Részben az ő hibája, hogy a
        szovjet műhold Simagöröngyösre zuhant.
    </p>

    <p>
        <strong>Dr. John Campbell</strong>, amerikai tudós, Dr.Bill Armstrong kollégája. Részt vett abban a sikertelen kísérletben, melynek eredményeképp Simagöröngyösre zuhant az
        irányíthatatlanná vált szovjet műhold.
    </p>

    <p>
        <strong>Izirájder Dönci</strong>, simagöröngyösi lakos. Rendelkezik egy citromsárga Simson motorkerékpárral és egy cséphadaróval is. Zombiirtásban élen jár.
    </p>

    <p>
        <strong>Töttösy Bence</strong>, Sanyibá unokája, az ELTE bölcsészkarán tanult, történelem-filozófia szakon.
    </p>

    <p>
        <strong>Damm Gábor</strong>, Pistabá unokája, tizenhét éves &quot;cyberzseni&quot;.
    </p>

    <p>
        <strong>Noriyuki Tagawa</strong>, egy másik létsíkról származó szamuráj, a híres-hírhedt Nakamura-penge birtokosa.
    </p>

    <p>
        <strong>Emődi &quot;Végrehajtó&quot; Béla</strong>, az Új Barázda Zrt. tehenészeti telepének egyik dolgozója, később önjelölt zombivadász.
    </p>

    <h2>Az áldozatok</h2>

    <p><img src="images/skeleton.png" alt="Skeleton" width="128" height="128" class="illusztracio"/>
        <strong>Dezső</strong>, simagöröngyösi lakos.
    </p>

    <p>
        <strong>dr.Hoffmann Xavér</strong>, Simagöröngyös egykori háziorvosa, df.Hoffmann Huba édesapja. Több szemtanú állítja, hogy látták kikelni sírjából.
    </p>

    <p>
        <strong>Károly bácsi</strong>, egykor simagöröngyösi lakos. &quot;Az öreget a múlt héten találtuk meg a határ közelében csordogáló patakban, arccal lefelé a halak vonulási
        szokásait nézte üveges szemekkel. Azt, hogy a reggelente elfogyasztott házi főzésű pálinka szeszfoka, vagy egy óvatlan mozdulat után bekövetkező megcsúszás volt-e a hibás,
        nem tudtuk kideríteni. Egészen pontosan öt nappal ezelőtt hantoltuk el a község költségére. Igaz, nem tellett drága, cicomázott temetésre, de álmomban sem gondoltam volna,
        hogy Károly bácsi számon kéri ezt rajtunk.&quot;
    </p>

    <p>
        <strong>Kalmár Éva</strong>, a Kossuth rádió tudósítója. Életét kockáztatva látogatta meg a katasztrófa sújtotta Simagöröngyöst. Ő is megfertőződött a zombikórral, Sanyi
        bácsi és Pista bácsi, simagöröngyösi lakosok végeztek vele.<br/>
        &quot;– Pista, állj odébb, nehogy összekoszold magad. Ippeg a fejére célzok.&quot;<br/>
        &quot;– Menjünk, Sanyi bácsi! Itt már semmi dolgunk. Azért lehet, hogy elég lett volna egy lövés is.&quot;
    </p>

    <p>
        <strong>Ráró</strong>, az Új Barázda Zrt. igásállata, lefejezik.
    </p>

    <p>
        <strong>Cerbi</strong>, régebbi nevén Fifike, a temetőőr kutyája. Látták zombivá válni, további sorsa ismeretlen.
    </p>

    <p>
        <strong>Kővágó Sanyi</strong>, baranyatenyerei lakos, a falu legmegtermettebb embere. Szomorú véget ért a helyi kocsmában: &quot;Sanyi szeme kikerekedett a meglepettségtől
        – rengeteg, a nemrég érkezett öregemberhez hasonló szerzetet látott –, de mielőtt még hangot adhatott volna az érzéseinek, egy balta átszakította a koponyáját.&quot;
    </p>

    <p>
        <strong>Kázmér</strong>, baranyatenyerei kocsmáros. Kővágó Sanyihoz hasonló sorsra jutott saját kocsmájában.
    </p>

    <p>
        <strong>Töttösy Tihamér</strong>, Töttösy Bence balesetben elhalálozott édesapja.
    </p>

    <p>
        <strong>Gábor bácsi és Berta asszony</strong>, Simagöröngyös temetőjének csőszei.
    </p>

    <p>
        <strong>Belzebúb</strong>, a temetőcsőszék nyolcvan kilós rottweilere.
    </p>

    <p>
        <strong>Enikő</strong>, Emődi Béla volt élettársa.
    </p>

</div>

<?php
$page->Footer();
?>
</body>

</html>
