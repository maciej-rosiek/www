<? $porady = array (
		"odszkodowanie" => "Odszkodowanie",
		"koszty-sadowe" => "Koszty sądowe",
		"dluznik" => "Dłużnik",
		"termin-zawity" => "Termin zawity",
		"pozyczka" => "Pożyczka",
		"alimenty" => "Alimenty",
		"choroba-w-czasie-urlopu" => "Choroba w czasie urlopu",
		"narkotyki" => "Narkotyki",    "zadatek" => "Zadatek",
		"malzenstwo-krewnych" => "Małżeństwo krewnych",
		"ubezwlasnowolnienie" => "Ubezwłasnowolnienie",
		"nabycie-spadku" => "Nabycie spadku",
		"pamiatki-z-egiptu" => "Pamiątki z Egiptu",
		"dozor-policyjny" => "Dozór policyjny",
		"odwolanie-darowizny" => "Odwołanie darowizny",
		"skarga-paulianska" => "Skarga pauliańska",
		"tymczasowe-pomieszczenie" => "Tymczasowe pomieszczenie",
		"umowa-zlecenie-a-urlop" => "Umowa zlecenie",
		"wadliwa-praca" => "Wadliwa praca",
		"termin-zaplaty" => "Termin zapłaty",
		"poswiadczenie-dziedziczenia" => "Poświadczenie dziedziczenia",
		"renta-specjalna" => "Renta specjalna",
		"poreczenie" => "Poręczenie",
		"przechowanie" => "Przechowanie",
		"zwolnienie-od-kosztow-sadowych" => "Zwolnienie od kosztów sądowych",
		"odroczenie-wykonania-kary" => "Odroczenie wykonania kary",
		"uniewaznienie-malzenstwa" => "Unieważnienie małżeństwa",    
		"umowa-zlecenie" => "Umowa zlecenie",    
		"zachowek" => "Zachowek",    
		"reklamacja" => "Reklamacja",    
		"zadatek-2" => "Zadatek 2",    
		"bukmacher-internetowy" => "Bukmacher internetowy",    
		"napoje-dla-pracownikow" => "Napoje dla pracowników",
		"przedawnienie" => "Przedawnienie",
		"przedawnienie-2" => "Przedawnienie 2",
		"umowa-uzyczenia" => "Umowa użyczenia",
		"ograniczenie-dzialanosci-konkurencyjnej" => "Ograniczenie działalności konkurencyjnej",
		"zadanie-urlopu-smsem" => "Żądanie urlopu SMS-em",
		"odpowiedzialnosc-za-zwierzeta" => "Odpowiedzialność za zwierzęta",
		"wypadek-na-stoku-narciarskim" => "Wypadek na stoku narciarskim",
		"abolicja-w-zus" => "Abolicja w ZUS",
		"swiadek-w-sadzie" => "Świadek w sądzie",
		"sluzebnosc" => "Służebność",
		"pracodawca-nie-placi" => "Pracodawca nie płaci",
                "odszkodowanie-za-zlamana-reke" => "Odszkodowanie za złamaną rękę"
	);
	$art = $_GET['art'];
	if ($art == '') $art = key( array_slice( $porady, -1, 1, TRUE ) );
	$header = $porady[$art];
?>
<div class="left-menu">
	<p>Opracowane porady<p>
	<ul>
		<?foreach (array_reverse($porady) as $i => $value):?>
			<li><a class="<?=$art == $i ? 'blue' : ''?>" href="/prawnik-radzi/<?=$i?>.html"><?=$value?></a></li>
		<?endforeach?>
	</ul>
</div>
<div class="right-content">
  <h2><?=mb_convert_case($porady[$art], MB_CASE_UPPER, "UTF-8")?></h2>
  <?if ($art == "odszkodowanie-za-zlamana-reke"):?>
	<p class="question">W styczniu poślizgnęłam się na nieodśnieżonych i oblodzonych schodach Urzędu Miasta. Czy mogę uzyskać od Urzędu Miasta odszkodowanie za doznane urazy?</p>
	<p><b>TAK</b>. Do właściciela terenu, a w tym przypadku do Miasta należy utrzymanie porządku i odśnieżanie. W tej sytuacji należy wysłać do Urzędu Miasta wezwanie do zapłaty zadośćuczynienia za doznaną krzywdę-złamanie ręki oraz odszkodowanie za poniesione koszty leczenia. Miasto z pewnością jest ubezpieczone i zapewne zgłosi szkodę firmie ubezpieczeniowej. Jeśli firma ubezpieczeniowa wyda negatywną decyzję lub zaniży kwotę odszkodowania, to pozostaje wniesienie pozwu do sądu.</p>
	<p>Podstawa prawna: art. 5 ustawy z dnia 13 września 1996 r. o utrzymaniu czystości i porządku w gminach.</p>
    <p class="signature">Urszula Szatna – 21.02.2015 r.</p>
  <?endif?>
  <?if ($art == "pracodawca-nie-placi"):?>
	<p class="question">Jestem zatrudniona na umowę o pracę na czas nieokreślony. Pracodawca do tej pory nie wypłacił mi wynagrodzenia za miesiąc listopad i grudzień 2012 r., a w październiku 2012 r. otrzymałam wynagrodzenie w ratach po 300 zł. Co mogę zrobić, kiedy pracodawca nie wypłaca należnego pracownikowi wynagrodzenia w terminie?</p>
	<p>Pracodawca ma obowiązek terminowego wypłacania wynagrodzenia za pracę co najmniej raz w miesiącu, w stałym z góry określonym dniu, nie później niż w ciągu pierwszych 10 dni następnego miesiąca kalendarzowego. Jeśli pracodawca opóźnia się z wypłatą wynagrodzenia to pracownik ma prawo wnieść do wydziału pracy sądu rejonowego właściwego dla siedziby pracodawcy pozew o zapłatę wynagrodzenia za pracę wraz z odsetkami z tytułu opóźnienia. Zanim złoży się pozew przeciwko pracodawcy, należy wysłać do niego wezwanie do zapłaty, które musi spełniać wymogi formalne i materialne. W wezwaniu do zapłaty należy dokładnie określić na jakiej podstawie i jakiej kwoty domaga się pracownik. Podaje się również na jakie konto ma wpłynąć należne świadczenie oraz informację, że jeśli nie spełni pracodawca roszczenia to sprawa zostanie skierowana na drogę sądową.</p>
	<p>Podstawa prawna: art. 85 kodeksu pracy.</p>
    <p class="signature">Urszula Szatna – 30.01.2013 r.</p>
  <?endif?>
  <?if ($art == "sluzebnosc"):?>
    <p class="question">Właściciel domu ma problemy z osobą, która ma ustanowioną służebność mieszkania. Czy można pozbawić dożywotniej służebności mieszkania?</p>
    <p><b>TAK</b>. Jeżeli uprawniony z tytułu służebności osobistej dopuszcza się rażących uchybień przy wykonywaniu swego prawa, właściciel nieruchomości obciążonej może żądać zamiany służebności na rentę. Oznacza to konieczność dokonywania comiesięcznych opłat pieniężnych na rzecz uprawnionego do renty. Jeżeli uprawniony do mieszkania dobrowolnie nie zgodzi się zrezygnować ze służebności należy sprawę skierować do sądu, który rozstrzygnie, czy w danym przypadku zasadne jest pozbawienie uprawnionego mieszkania i w jakiej wysokości ma być płacona renta. Należy w sądzie przedstawić dowody, że uprawniony do służebności dopuszcza się uchybień tj. zeznania świadków lub dokumentów potwierdzających twierdzenia właściciela, dokumenty z leczenia, dokumenty z interwencji policji, pogotowia ratunkowego itp.</p>
    <p class="signature">Urszula Szatna – 21.01.2013 r.</p>
  <?endif?>
  <?if ($art == "swiadek-w-sadzie"):?>
    <p class="question">Dowiedziałam się od koleżanki, że ta zgłosiła mnie w sądzie na świadka w sprawie rozwodowej. Nie chciałabym się mieszać w jej sprawy rodzinne. Czy muszę stawić się na rozprawie?</p>
    <p><b>TAK</b>. Jeżeli świadek otrzyma wezwanie na rozprawę to musi stawić się w sądzie. Świadek nie może odmówić składania zeznań jedynie dlatego, że nie chce się wtrącać w sprawy rodzinne. Z obowiązku zeznawania nie zwalnia świadka nawet pisemne poinformowanie sądu, że nie ma żadnych wiadomości o konfliktach rozwodzących się małżonków. Za nieobecność na rozprawie sąd może ukarać świadka grzywną, a nawet może przymusowo doprowadzić go na rozprawę. Jedynie koleżanka, która zgłosiła świadka może sama wycofać wniosek o dopuszczenie przez sąd dowodu z jej zeznań i domagać się, aby świadka nie przesłuchiwano.</p>
    <p class="signature">Urszula Szatna – 21.01.2013 r.</p>
  <?endif?>
  <?if ($art == "abolicja-w-zus"):?>
    <p class="question">Prowadziłam jednoosobową działalność gospodarczą i nie opłacałam składek na ubezpieczenie społeczne w pełnej wysokości. Moje zadłużenie wynosi ok. 10 000 zł. Czy mogę teraz starać się o jego umorzenie?</p>
    <p><b>TAK</b>. TAK. Właściciel jednoosobowej firmy ma prawo do skorzystania z abolicji obejmującej nieopłacone składki na własne ubezpieczenie społeczne za okres od 1 stycznia 1999 r. do 28 lutego 2009 r. Osoby uprawnione mogą złożyć wniosek o umorzenie należności w terminie 24 miesięcy od dnia wejścia w życie ustawy. Termin ten liczy się od dnia 15 stycznia 2013 r. Okres, za który składki na ubezpieczenie emerytalne i rentowe zostaną umorzone, nie zostanie uwzględniony przy ustalaniu prawa i wysokości emerytury i renty z ubezpieczeń społecznych oraz innych świadczeń, do których prawo uzależnione jest od posiadania wymaganego okresu składkowego i nieskładkowego. Osoba, która złoży do ZUS wniosek o umorzenie należności nie będzie musiała również spłacać należnych odsetek za zwłokę, a także kosztów egzekucyjnych.</p>
	<p>Podstawa prawna: ustawa z dnia 9 listopada 2012 r. o umorzeniu należności powstałych z tytułu nieopłaconych składek przez osoby prowadzące pozarolniczą działalność.</p>
    <p class="signature">Urszula Szatna – 21.01.2013 r.</p>
  <?endif?>
  <?if ($art == "wypadek-na-stoku-narciarskim"):?>
    <p class="question">Czy należy mi się odszkodowanie od właściciela stoku jeżeli uległem wypadkowi na stoku narciarskim i złamałem nogę?</p>
    <p><b>TAK</b>. Jeżeli szkoda wyrządzona została na skutek niewłaściwej organizacji stoku to nie ulega wątpliwości, że odpowiedzialność ponosi właściciel stoku na podstawie art. 415 kodeksu cywilnego, który stanowi, że "Kto z winy swej wyrządził drugiemu szkodę, obowiązany jest do jej naprawienia". Możliwa jest również odpowiedzialność z art. 435 kodeksu cywilnego, jeżeli szkoda powstała np. na skutek awarii wyciągu lub za wypadek z udziałem ratraka na podstawie art. 436 kodeksu cywilnego. Podstawą odpowiedzialności właściciela stoku może być również art. 471 kodeksu cywilnego ponieważ kupując karnet (skipass) zawarta zostaje umowa z właścicielem stoku, na podstawie której mamy prawo do korzystania z tras narciarskich. Właściciel wywiąże się należycie ze swojego zobowiązania wyłącznie wtedy, gdy zapewni bezpieczne korzystanie ze stoku.</p>
    <p class="signature">Urszula Szatna – 01.02.2012 r.</p>
  <?endif?>
  <?if ($art == "odpowiedzialnosc-za-zwierzeta"):?>
    <p class="question">Chciałabym się dowiedzieć o odpowiedzialności właściciela psa za pogryzienie człowieka?</p>
    <p>Kto zwierzę chowa albo się nim posługuje, obowiązany jest do naprawienia wyrządzonej przez nie szkody niezależnie od tego, czy było pod jego nadzorem, czy też zabłąkało się lub uciekło, chyba że ani on, ani osoba, za którą ponosi odpowiedzialność, nie ponoszą winy. Chociażby osoba, która zwierzę chowa lub się nim posługuje, nie była odpowiedzialna według tych  przepisów , poszkodowany może od niej żądać całkowitego lub częściowego naprawienia szkody, jeżeli z okoliczności, a zwłaszcza z porównania stanu majątkowego poszkodowanego i tej osoby, wynika, że wymagają tego zasady współżycia społecznego.</p>
    <p>Podstawa prawna: art. 431 Kodeksu cywilnego.</p>
    <p class="signature">Urszula Szatna – 08.03.2011 r.</p>
  <?endif?>
  <?if ($art == "zadanie-urlopu-smsem"):?>		
    <p class="question">Pojechałam na weekend nad jezioro, ale postanowiłam pobyć tam dłużej. Niestety nie mogłam w poniedziałek dodzwonić się do pracodawcy i wysłałam żądanie urlopu smsem. Pracodawca uważa, że powinnam dokonać zgłoszenia w inny sposób. Czy ma rację?</p>		
    <p>Sposób zgłaszania urlopu na żądanie powinien być określony wewnętrznymi przepisami obowiązującymi w danym zakładzie pracy. Skorzystanie z urlopu na żądanie to prawo pracownika. Z tego wynika, że w przypadku gdy pracownik skutecznie zgłosi zamiar wykorzystania go, to pracodawca jest zobowiązany go udzielić. Jeśli przepisy wewnętrzne przewidują przesłanie oświadczenia pracownika w sprawie urlopu na żądanie smsem, to z pewnością można tą drogą przesłać zgłoszenie. Ta forma nie jest dopuszczalna tylko wtedy, gdy wewnętrzne przepisy określają sposoby zgłaszania urlopu na żądanie i zastrzegają  pominięcie smsów.</p>
    <p>Podstawa prawna: art. 167 Kodeksu pracy.</p>
    <p class="signature">Urszula Szatna – 26.08.2010 r.</p>
  <?endif?>  
  <?if ($art == "ograniczenie-dzialanosci-konkurencyjnej"):?>		
    <p class="question">Jak ustalić kwotę do wypłacenia agentowi za ograniczenie działalności konkurencyjnej?</p>		
    <p>Strony mogą, w formie pisemnej pod rygorem nieważności, ograniczyć działalność agenta mającą charakter konkurencyjny na okres po rozwiązaniu umowy agencyjnej (ograniczenie działalności konkurencyjnej). Ograniczenie jest ważne, jeżeli  dotyczy grupy klientów lub obszaru geograficznego, objętych działalnością agenta, oraz rodzaju towarów lub usług stanowiących przedmiot umowy. Ograniczenie działalności konkurencyjnej nie może być zastrzeżone na okres dłuższy niż dwa lata od rozwiązania umowy. Dający zlecenie obowiązany jest do wypłacenia agentowi odpowiedniej sumy pieniężnej za ograniczenie działalności konkurencyjnej w czasie jego trwania, chyba że co innego wynika z umowy albo że umowa agencyjna została rozwiązana na skutek okoliczności, za które agent ponosi odpowiedzialność. Jeżeli wysokość sumy nie została w umowie określona, należy się suma w wysokości odpowiedniej do korzyści osiągniętych przez dającego zlecenie na skutek ograniczenia działalności konkurencyjnej oraz utraconych z tego powodu możliwości zarobkowych agenta.</p>
    <p>Podstawa prawna: art. 764<sup>6</sup> Kodeksu cywilnego.</p>
    <p class="signature">Urszula Szatna – 26.08.2010 r.</p>
  <?endif?>  
  <?if ($art == "umowa-uzyczenia"):?>		
    <p class="question">Czy umowa najmu jednego z pomieszczeń lokalu mieszkalnego na prowadzenie w nim działalności gospodarczej może być nieodpłatna?</p>		
    <p><b>TAK</b>. Może zawrzeć Pan umowę użyczenia, w której użyczający zobowiązuje  się zezwolić biorącemu, przez czas oznaczony lub nieoznaczony, na bezpłatne używanie oddanej mu w tym celu rzeczy. Jeżeli umowa nie określa sposobu używania rzeczy, biorący może rzeczy używać w sposób odpowiadający jej właściwościom i przeznaczeniu. Bez zgody użyczającego biorący nie może oddać rzeczy użyczonej osobie trzeciej do używania. Biorący do używania ponosi zwykłe koszty utrzymania rzeczy użyczonej. Jeżeli poczynił inne wydatki lub nakłady na rzecz, stosuje się odpowiednio przepisy o prowadzeniu cudzych spraw bez zlecenia. Po zakończeniu użyczenia biorący do używania obowiązany jest zwrócić rzecz w stanie niepogorszonym; jednakże biorący nie ponosi odpowiedzialności za zużycie rzeczy będące następstwem prawidłowego używania. Roszczenia wzajemne stron względem siebie o naprawienie szkody za uszkodzenie lub pogorszenie rzeczy czy też o zwrot nakładów na rzecz przedawniają się z upływem roku od dnia zwrotu rzeczy.</p>
    <p>Podstawa prawna: art. 710-719 Kodeksu cywilnego.</p>
    <p class="signature">Urszula Szatna – 26.08.2010 r.</p>
  <?endif?>  
  <?if ($art == "przedawnienie-2"):?>		
    <p class="question">Czy firma CYFRA+ może się ubiegać o spłatę zaległości po 11 latach?</p>		
    <p><b>TAK</b>. Wierzyciel może ubiegać się o spłatę należności nawet po 11 latach.  Jednakże dłużnik może się uwolnić od zapłaty z tytułu przedawnienia. W tej sytuacji należy poinformować firmę CYFRĘ +, że jej roszczenie jest bezzasadne. Długość terminów przedawnienia określa art. 118 Kodeksu cywilnego i dla roszczeń związanych z prowadzeniem działalności gospodarczej wynosi on trzy lata. Terminy przedawnienia nie mogą być skracane ani przedłużane przez czynność prawną. Bieg przedawnienia rozpoczyna się od dnia, w którym roszczenie stało się wymagalne. Jednakże bieg przedawnienia przerywa się przez każdą czynność przed sądem lub innym organem powołanym do rozpoznania spraw lub egzekwowania roszczeń danego rodzaju albo przed sądem polubownym, przez uznanie roszczenia przez osobę, przeciwko której roszczenie przysługuje albo przez wszczęcie mediacji. Po każdym przerwaniu przedawnienia biegnie ono na nowo. W razie przerwania przedawnienia przez czynność w postępowaniu przed sądem, przedawnienie nie biegnie na nowo, dopóki postępowanie to nie zostanie zakończone.</p>
    <p class="signature">Urszula Szatna – 26.08.2010 r.</p>
  <?endif?>  
  <?if ($art == "przedawnienie"):?>		
    <p class="question">Po jakim czasie następuje przedawnienie za wykroczenie?</p>		
    <p>Karalność za wykroczenie ustaje, jeżeli od czasu jego popełnienia upłynął rok; jeżeli w tym okresie wszczęto postępowanie, karalność wykroczenia ustaje z upływem 2 lat od popełnienia czynu. W razie uchylenia prawomocnego rozstrzygnięcia, przedawnienie biegnie od daty uchylenia rozstrzygnięcia. Orzeczona kara lub środek karny nie podlega wykonaniu, jeżeli od daty uprawomocnienia się rozstrzygnięcia upłynęły 3 lata. Ukaranie uważa się za niebyłe po upływie 2 lat od wykonania, darowania lub przedawnienia wykonania kary. Jeżeli orzeczono środek karny, uznanie ukarania za niebyłe nie może nastąpić przed jego wykonaniem, darowaniem albo przedawnieniem wykonania.</p>
    <p>Podstawa prawna: art. 45 i 46 Kodeksu wykroczeń.</p>
    <p class="signature">Urszula Szatna – 26.08.2010 r.</p>
  <?endif?>  
  <?if ($art == "napoje-dla-pracownikow"):?>		
    <p class="question">Czy w upalne dni pracodawca zobowiązany jest  dostarczać napoje chłodzące dla pracowników?</p>		
    <p><b>TAK</b>. Pracodawca jest obowiązany zapewnić wszystkim pracownikom wodę zdatną do picia lub inne napoje, a pracownikom zatrudnionym stale lub okresowo w warunkach szczególnie uciążliwych zapewnić oprócz wody, inne napoje. Ilość, rodzaj i temperatura tych napojów powinny być dostosowane do warunków wykonywania pracy i potrzeb fizjologicznych pracowników. Pracodawca powinien zapewnić nieodpłatnie napoje pracownikom, którzy są zatrudnieni w warunkach gorącego mikroklimatu oraz  na stanowiskach pracy, na których temperatura spowodowana warunkami atmosferycznymi przekracza 280 C. Napoje powinny  być dostępne w ciągu całej zmiany roboczej i dodatkowo wzbogacone o sole mineralne i witaminy. Pracownikom nie przysługuje ekwiwalent pieniężny za napoje.</p>    
    <p>Podstawa prawna: art. 232 Kodeksu pracy, Rozporządzenie Ministra Pracy i Polityki Socjalnej  z dnia 26 września 1997 r. w sprawie ogólnych przepisów  bezpieczeństwa i higieny pracy, Rozporządzenie Rady Ministrów z dnia 28 maja 1996 r. w sprawie profilaktycznych posiłków i napojów.</p>		
    <p class="signature">Urszula Szatna – 08.10.2010 r.</p>  
  <?endif?>  
  <?if ($art == "bukmacher-internetowy"):?>		
    <p class="question">Czy granie u bukmachera internetowego jest w Polsce legalne? Jak rozliczyć się z Urzędem Skarbowym w przypadku wygranej u takiego bukmachera?</p>		
    <p>Polskie prawo zabrania uczestniczenia w hazardzie internetowym (zakładach wzajemnych zawieranych przez sieć Internet). Przyjmowanie zakładów wzajemnych dozwolone jest wyłącznie w punktach przyjmowania zakładów wzajemnych (bukmacherstwa). Przez punkt przyjmowania zakładów wzajemnych należy rozumieć wydzielone miejsce, w którym przyjmowane są zakłady totalizatora lub bukmacherstwa, na podstawie zatwierdzonego regulaminu. Działalność w zakresie zakładów wzajemnych może być prowadzona tylko na podstawie udzielonego zezwolenia na urządzanie zakładów wzajemnych. Jeżeli zakłady wzajemne są organizowane zgodnie z prawem, wówczas sam bukmacher pobiera i odprowadza podatek od wygranej.</p>    <p>Podstawa prawna: ustawa z dnia 19 listopada 2009 r. o grach hazardowych – obowiązująca od 1 stycznia 2010 r.</p>		<p class="signature">Urszula Szatna – 08.10.2010 r.</p> 
  <?endif?>  
  <?if ($art == "zadatek-2"):?>		
    <p class="question">Dzień dobry. Mam pytanie, czy mogę się sądzić? Dałam zadatek na kupno nieruchomości, nie otrzymałam kredytu, a państwo nie chcą mi oddać zadatku. Dziękuję.</p>
		<p>Zadatek służy do zabezpieczenia interesów obu stron umowy. Jeżeli nie było  odmiennego zastrzeżenia umownego zadatek dany przy zawarciu umowy ma to znaczenie, że w razie niewykonania umowy przez jedną ze stron druga strona może bez wyznaczania dodatkowego terminu od umowy odstąpić i otrzymany zadatek zachować, a jeżeli sama go dała , może żądać sumy dwukrotnie wyższej.  W razie  wykonania umowy zadatek ulega zaliczeniu na poczet świadczenia strony, która go dała. W razie rozwiązania umowy zadatek powinien być zwrócony, a obowiązek zapłaty sumy dwukrotnie wyższej odpada. To samo dotyczy wypadku, gdy niewykonanie umowy nastąpiło wskutek okoliczności, za które żadna ze stron nie ponosi odpowiedzialności albo za które ponoszą odpowiedzialność obie strony. Nie należy mylić zadatku z zaliczką, którą zwraca się zawsze w tej samej wysokości.</p>    
    <p>Podstawa prawna: art. 394 Kodeksu cywilnego.</p>		
    <p class="signature">Urszula Szatna – 08.10.2010 r.</p>  
  <?endif?>  
  <?if ($art == "reklamacja"):?>		
    <p class="question">Sprzedawca nie przyjął mojej reklamacji butów, które rozkleiły mi się po kilku tygodniach używania, a odesłał mnie do producenta. Czy rzeczywiście ja mam składać reklamację u producenta?</p>		
    <p><b>NIE</b>. Sprzedawca nie może odesłać konsumenta z reklamacją do producenta. Przy sprzedaży konsumenckiej na sprzedawcy spoczywa odpowiedzialność względem kupującego za niezgodność towaru z umową. W takiej sytuacji sprzedawca ma obowiązek przyjąć reklamację i w ciągu 14 dni rozpatrzyć ją oraz powiadomić konsumenta o swojej decyzji co do uznania roszczenia. Jeśli reklamacja zostanie uznana, to towar powinien być naprawiony lub wymieniony na nowy. Konsument nie ma możliwości od razu, gdy stwierdzi niezgodność, żądać obniżenia ceny czy też odstąpić od umowy. Takie uprawnienia przysługują mu jedynie w sytuacji gdy sprzedawca nie dokonał naprawy lub nie wymienił towaru na nowy. Natomiast sprzedawca, który zaspokoił roszczenie kupującego, będzie miał możliwość dochodzić odszkodowania od producenta lub od któregokolwiek z wcześniejszych sprzedawców.</p>    
    <p>Podstawa prawna: Ustawa z dnia 27 lipca 2002 r. o szczególnych warunkach sprzedaży konsumenckiej oraz o zmianie Kodeksu Cywilnego (Dz.U. 2002 mr 141 poz. 1176 z późn. zm.).</p>		
    <p class="signature">Urszula Szatna – 08.10.2010 r.</p>  
  <?endif?>  
  <?if ($art == "umowa-zlecenie"):?>		
    <p class="question">Zatrudniony jestem na umowę zlecenie. Jak mogę stwierdzić czy jest to umowa o pracę czy jest to umowa cywilnoprawna?</p>		
    <p>Definicję stosunku pracy zawiera art. 22 kodeksu pracy, który stanowi, że przez nawiązanie stosunku pracy pracownik zobowiązuje się do wykonywania pracy określonego rodzaju na rzecz pracodawcy i pod jego kierownictwem oraz w miejscu i czasie wyznaczonym przez pracodawcę, a pracodawca – do zatrudniania pracownika za wynagrodzeniem. Zatrudnienie w takich warunkach jest zatrudnieniem na podstawie stosunku pracy, bez względu na nazwę zawartej przez strony umowy.  Nie jest dopuszczalne zastąpienie umowy o pracę umową cywilnoprawną przy zachowaniu wskazanych warunków wykonywania pracy. Jeżeli więc pracuje Pan stale pod kierownictwem pracodawcy w miarę stałych godzinach, w miejscu i czasie wyznaczonym przez pracodawcę to jest to umowa o pracę bez względu na to jak tą umowę nazwano.</p>		
    <p class="signature">Urszula Szatna – 08.10.2010 r.</p> 
    <?endif?>  
    <?if ($art == "zachowek"):?>		
      <p class="question">Moi rodzice przekazali na własność gospodarstwo rolne wraz z budynkami mojemu najmłodszemu bratu. Ojciec powiedział słownie, że brat mnie spłaci. Ja wyjechałem do Niemiec i mieszkam tam z rodziną. Ojciec zmarł w 2001 r., a matka w 2006 r. Chciałbym się dowiedzieć czy mogę domagać się od brata, żeby mnie spłacił albo  zapisał coś moim dzieciom?</p>		
      <p>W opisanej sytuacji nie ma Pan większych szans na uzyskanie jakiejkolwiek spłaty od brata.  Może Pan oczywiście porozumieć się z nim i dowiedzieć czy ustanowi jako spadkobierców Pana dzieci albo, że Pana spłaci, ale wszystko zależy od dobrej woli brata i nie można go do niczego zmusić. Teoretycznie przysługuje Panu roszczenie o zachowek skoro cały majątek został przekazany w drodze darowizny jeszcze za życia rodziców, a Pan nic nie otrzymał. Jednak roszczenie to ulega przedawnieniu po upływie lat trzech od śmierci spadkodawcy (rodzica). Gdyby wniósł Pan sprawę do sądu o zapłatę zachowku to z pewnością brat łatwo mógłby ustalić, że roszczenie jest przedawnione zgodnie z  art. 1007 Kodeksu cywilnego. Jeśli w toku procesu podniesie zarzut przedawnienia to przegra Pan sprawę. W mojej ocenie jest już za późno żeby cokolwiek uzyskać. Należało zaraz po śmierci rodziców domagać się zapłacenia zachowku.</p>		
      <p class="signature">Urszula Szatna – 08.10.2010 r.</p>  
  <?endif?>  
	<?if ($art == "uniewaznienie-malzenstwa"):?>
		<p class="question">Co jest potrzebne do unieważnienia małżeństwa kościelnego, chodzi mi o dokumenty. Nie wiem od czego mam zacząć i na jaki dokładnie adres wysłać mam dokumenty dotyczące unieważnienia małżeństwa.</p>
		<p>Skargę o orzeczenie nieważności małżeństwa należy wysłać na adres Sądu Kościelnego na terenie diecezji, którego zostało zawarte małżeństwo, bądź mieszka były współmałżonek. Skarga powinna zawierać personalia stron (małżonków), imiona rodziców, datę i miejsce urodzenia, aktualny adres zamieszkania, parafię miejsca zamieszkania. W skardze należy zwięźle opisać  okoliczności zawarcia małżeństwa, okres pożycia małżeńskiego po ślubie oraz przyczynę domniemanej nieważności. Przedstawić obecną sytuację życiową stron. Podać świadków, którzy znają osobiście okoliczności narzeczeństwa, pożycia małżeńskiego stron oraz przyczyny jego rozpadu. Podać aktualne ich adresy wraz z określeniem stopnia relacji względem strony (np. matka, ojciec, rodzeństwo, obcy). Do skargi należy dołączyć świadectwo sakramentu małżeństwa i inne dokumenty np. zaświadczenia lekarskie, wyrok rozwodu cywilnego itp. dla potwierdzenia tezy dowodowej.</p>
		<p class="signature">Urszula Szatna – 08.03.2010 r.</p>
	<?endif?>
	<?if ($art == "odroczenie-wykonania-kary"):?>
		<p class="question">Wyrokiem Sądu Rejonowego w Kłodzku zostałem skazany na karę 6 miesięcy pozbawienia wolności. Wyrok jest prawomocny i wkrótce mogę się spodziewać wezwania do zakładu karnego. Mam na utrzymaniu żonę i dwoje dzieci. Czy jest jakaś szansa oddalenia  momentu osadzenia w więzieniu?</p>
		<p><b>TAK</b>. Prawo karne przewiduje możliwość odroczenia wykonania kary pozbawienia wolności. Zgodnie z art. 151 kodeksu karnego wykonawczego sąd może odroczyć wykonanie kary pozbawienia wolności na okres do 6 miesięcy, jeżeli natychmiastowe wykonanie kary pociągnęłoby dla skazanego lub jego rodziny zbyt ciężkie skutki. Odroczenie może być udzielone kilkakrotnie, jednakże łączny okres odroczenia w stosunku do mężczyzn nie może przekroczyć roku. Należy zwrócić się do Sądu, który wydał prawomocny  wyrok z wnioskiem o odroczenie kary. Wniosek powinien zawierać uzasadnienie, w którym będą opisane szczegółowo wszelkie okoliczności wskazujące na trudne położenie rodziny. Jeżeli odroczenie wykonania  kary nie przekraczającej 2 lat pozbawienia wolności trwało przez okres co najmniej 1 roku to Sąd może warunkowo zawiesić wykonanie tej kary na zasadach określonych w kodeksie karnym. W takim przypadku kara pozbawienia wolności nie byłaby wykonana przez okres próby ustalony przez sąd.</p>
		<p class="signature">Urszula Szatna – 08.03.2010 r.</p>
	<?endif?>
	<?if ($art == "zwolnienie-od-kosztow-sadowych"):?>
		<p class="question">Czy sąd może zwolnić mnie z opłat sądowych? Mam niską rentę i nie stać mnie na opłacenie kosztów sądowych w sprawie o zachowek.</p>
		<p>Postępowanie sądowe jest odpłatne, a sąd nie podejmie żadnej czynności związanej z pismem, które nie zostało należycie opłacone. Jednak na mocy art. 100 ustawy z dnia 28 lipca 2005 r. o kosztach sądowych w sprawach cywilnych strona może zostać zwolniona od kosztów sądowych w części lub w całości. Na podstawie art. 102 w/w ustawy zwolnienia od kosztów sądowych może domagać się osoba fizyczna, która złożyła oświadczenie, że nie jest w stanie ich ponieść bez uszczerbku utrzymania koniecznego dla siebie i rodziny. Do wniosku o zwolnienie powinno być dołączone oświadczenie obejmujące szczegółowe dane o stanie rodzinnym, majątku, dochodach i źródłach utrzymania. Oświadczenie sporządza się według ustalonego wzoru. Podanie we wniosku nieprawdziwych danych zagrożone jest grzywną w wysokości do 1000 zł. Wniosek można złożyć wraz z pozwem lub w toku postępowania sądowego.</p>
		<p class="signature">Urszula Szatna – 08.03.2010 r.</p>
	<?endif?>
	<?if ($art == "przechowanie"):?>
		<p class="question">Często parkuję samochód w centrum miasta, na prywatnym, płatnym parkingu. Czy jego właściciel odpowiada za pozostawione tam moje auto, tak jak czynić to powinien przechowawca?</p>
		<p>Niekoniecznie albowiem należy zwrócić uwagę na oznaczenie parkingu czy jest strzeżony czy niestrzeżony. Zgodnie z art. 835 kodeksu cywilnego przez umowę przechowania przechowawca zobowiązuje się zachować w stanie niepogorszonym rzecz ruchomą oddaną mu na przechowanie. Sytuacja taka zachodzić będzie, gdy zostawia się samochód na parkingu strzeżonym. Jednak nie każdy prywatny, płatny parking jest strzeżony. Często bywa tak, że właściciel gruntu udostępnia jego część na potrzeby parkowania pojazdów za jakąś odpłatnością na podstawie umowy najmu. Kierowca wjeżdżając na parking może stwierdzić bez wątpliwości i nieporozumień z jakim parkingiem (strzeżonym czy niestrzeżonym) ma do czynienia. Większość parkingów nawet takich, które są płatne nie mają charakteru parkingu strzeżonego. Są to wyłącznie miejsca przeznaczone do wynajęcia w celu pozostawienia tam na pewien czas  samochodów bez elementu chronienia ich przez prowadzącego parking przed uszkodzeniem lub kradzieżą.</p>
		<p class="signature">Urszula Szatna – 08.03.2010 r.</p>
	<?endif?>
	<?if ($art == "poreczenie"):?>
		<p class="question">Jakie są zasady spłaty kredytu przez żyranta. Kredytobiorca zaprzestał spłaty rat i zmienił adres zamieszkania i telefon. Firma windykacyjna grozi sądem i komornikiem. Co można w tej sprawie zrobić, by żyrant nie musiał spłacać kredytu?</p>
		<p>Osoba, która zaciągnęła dług (kredytobiorca) i poręczyciel (żyrant) odpowiadają za dług solidarnie. Oznacza to, że wierzyciel (bank) może żądać spełnienia świadczenia (w części bądź całości) od dłużnika głównego albo od dłużnika głównego i poręczyciela łącznie, ale może również żądać spełnienia świadczenia wprost przez poręczyciela. Bank nie ma też obowiązku wykazywania, że dłużnik jest niewypłacalny, bądź nieosiągalny. Przepisy przyznają poręczycielowi korzystanie z zarzutów, które przysługują dłużnikowi. Może powoływać się na to, że termin świadczenia jeszcze nie nadszedł, jak również podnieść zarzut dotyczący przedawnienia roszczenia wierzyciela. Natomiast żyrant, który sam spłaci dług ma prawo regresu wobec dłużnika bezpośredniego, może zatem domagać się od niego zwrotu całej kwoty, którą zapłacił.</p>
		<p>Podstawa prawna: art. 876-887 Kodeksu cywilnego.</p>
		<p class="signature">Urszula Szatna – 08.03.2010 r.</p>
	<?endif?>
	<?if ($art == "renta-specjalna"):?>
		<p class="question">ZUS odmówił mi prawa do renty z powodu krótkiego stażu pracy. Czy mogę starać się o rentę specjalną? – pyta Czytelniczka</p>
		<p><b>TAK</b>. Należy złożyć wniosek do Prezesa Zakładu Ubezpieczeń Społecznych, który może  w drodze wyjątku  przyznać świadczenie w wysokości nie przekraczającym odpowiednich świadczeń przewidzianych w ustawie. Ubezpieczony musi wykazać i udokumentować, iż  wskutek szczególnych okoliczności nie spełnia warunków wymaganych w ustawie do uzyskania prawa do emerytury lub renty, a ze względu na całkowitą niezdolność do pracy lub wiek nie może podjąć pracy lub działalności objętej ubezpieczeniem społecznym i nie ma niezbędnych środków utrzymania. Wniosek o przyznanie renty specjalnej można złożyć również do Prezesa Rady Ministrów, który w szczególnie uzasadnionych przypadkach może przyznać emeryturę lub rentę na warunkach i w wysokości innej niż określone w ustawie.</p>
		<p>Podstawa prawna: art. 82 i 83 ustawy z dnia 17 grudnia 1998 r. o emeryturach i rentach z Funduszu Ubezpieczeń Społecznych.</p>
		<p class="signature">Urszula Szatna – 05.10.2009 r.</p>
	<?endif?>
	<?if ($art == "poswiadczenie-dziedziczenia"):?>
		<p class="question">Chciałabym potwierdzić nabycie spadku. Czy muszę wystąpić z tym do sądu czy do notariusza?</p>
		<p>Do dnia 2 października 2008 r. jedynym sposobem stwierdzenia nabycia spadku było wniesienie do sądu spadku tj. sądu właściwego ze względu na miejsce zamieszkania spadkodawcy, wniosku  o stwierdzenie nabycia spadku. Dopiero od dnia 2 października 2008 r. możliwe jest uzyskanie notarialnego aktu poświadczenia dziedziczenia ustawowego i testamentowego, z wyłączeniem testamentów szczególnych. Jednak uzyskanie notarialnego poświadczenia dziedziczenia nie będzie możliwe jeśli nie będą obecne wszystkie osoby, które  będą mogły wchodzić w rachubę jako spadkobiercy, brak będzie zgody pomiędzy spadkobiercami oraz nieruchomość wchodząca w skład masy spadkowej będzie  znajdować się za granicą. Uczestnicy postępowania mogą dowolnie wybierać notariusza, który sporządzi akt poświadczenia dziedziczenia.</p>
		<p>Podstawa prawna art. 1025 kodeksu cywilnego.</p>
		<p class="signature">Urszula Szatna – 28.11.2009 r.</p>
	<?endif?>
	<?if ($art == "termin-zaplaty"):?>
		<p class="question">Zakład energetyczny naliczył mi odsetki za nieterminową opłatę, którą dokonałem  na poczcie 2 dni przed upływem terminu płatności. Pieniądze wpłynęły na konto zakładu 5 dni po terminie. Czy słusznie naliczono mi odsetki?</p>
		<p><b>TAK</b>. Termin zapłaty wskazany na rachunku za energię elektryczną oznacza, że najpóźniej w tym dniu pieniądze powinny wpłynąć na konto zakładu. Na podstawie art. 476 kodeksu  cywilnego zwłoka dłużnika następuje, gdy nie spełnia świadczenia w terminie i uprawnia to wierzyciela do żądania odsetek( art. 481 k.c.). Jedynie, gdyby strony postanowiły inaczej, to za termin zapłaty uważałoby się dzień wpłacenia pieniędzy na poczcie. Zasada ta jednak nie obowiązuje przy rachunkach za energię elektryczną.</p>
		<p class="signature">Urszula Szatna – 28.11.2009 r.</p>
	<?endif?>
	<?if ($art == "wadliwa-praca"):?>
		<p class="question">Pracownik błędnie wykonał pracę. Czy mogę pozbawić go wynagrodzenia? – pyta Czytelnik</p>
		<p><b>TAK</b>. Za wadliwe wykonanie z winy pracownika produktów lub usług wynagrodzenie nie przysługuje. Natomiast jeżeli na skutek wadliwie wykonanej pracy nastąpiło obniżenie jakości produktu lub usługi, wynagrodzenie ulega odpowiedniemu zmniejszeniu. W przypadku, gdy wadliwość produktu lub usługi została usunięta przez pracownika, przysługuje mu wynagrodzenie odpowiednie do jakości produktu lub usługi, z tym że za czas pracy przy usuwaniu wady wynagrodzenie nie przysługuje. Niezbędną przesłanką, decydującą o odmowie wynagrodzenia bądź jego pomniejszenia, jest wina pracownika, która polega na niedołożeniu należytej staranności do wykonywanego zadania. Wina może być umyślna, jak i nieumyślna, w tym także niedbalstwo. Podstawa prawna art. 82 kodeksu pracy.</p>
		<p class="signature">Urszula Szatna – 05.10.2009 r.</p>
	<?endif?>
	<?if ($art == "umowa-zlecenie-a-urlop"):?>
		<p class="question">Od dwóch lat jestem zatrudniony na umowę zlecenie. Czy należy mi się urlop wypoczynkowy?</p>
		<p><b>NIE</b>. Umowa zlecenie nie jest rodzajem umowy o pracę, albowiem art. 2 kodeksu pracy określa pojęcie pracownika, a mianowicie  pracownikiem jest osoba zatrudniona na umowę o pracę, powołania, wyboru, mianowania lub spółdzielczej umowy o pracę. Natomiast do umowy zlecenie odnoszą się przepisy Kodeksu cywilnego art. 724-751 i  oznacza to, że jest to umowa cywilnoprawna, która  nie wlicza się do świadczeń pracowniczych. Jeżeli w samej umowie zlecenie nie ma odpowiednich zapisów dotyczących udzielenia urlopu czy odpłatnych dni wolnych to żaden urlop wypoczynkowy się nie należy.</p>
		<p class="signature">Urszula Szatna – 01.09.2009 r.</p>
	<?endif?>
	<?if ($art == "tymczasowe-pomieszczenie"):?>
		<p class="question">Sąd wydał wyrok orzekający eksmisję za nie płacenie czynszu. Jestem osobą bezrobotną i nie mam gdzie się wyprowadzić. Czy należy mi się lokal zastępczy?</p>
		<p>Mając na względzie ochronę przed bezdomnością osób eksmitowanych obowiązujące przepisy prawne zabraniają eksmisji na bruk. Musi mieć taka osoba zapewnione tymczasowe pomieszczenie, które wskaże gmina lub sama  znajdzie takie pomieszczenie spełniające warunki określone w przepisach. Zgodnie z art. 1046 kodeksu cywilnego tymczasowe pomieszczenie powinno nadawać się do zamieszkania, zapewniać co najmniej 5 m2  powierzchni mieszkalnej na jedną osobę oraz znajdować się w tej samej miejscowości lub pobliskiej, jeżeli zamieszkanie w tej miejscowości nie pogorszy nadmiernie warunków życia osób przekwaterowywanych. Ponadto tymczasowe pomieszczenie musi spełniać następujące kryteria: posiadać dostęp do źródła zaopatrzenia w wodę i do ustępu, chociażby te urządzenia znajdowały się poza budynkiem, posiadać oświetlenie naturalne i elektryczne, posiadać możliwość ogrzewania, posiadać niezawilgocone przegrody budowlane, zapewniać możliwość zainstalowania urządzenia do gotowania posiłków. Podstawa prawna: rozporządzenia Ministra Sprawiedliwości z dnia 26 stycznia 2005 r. w sprawie szczegółowego trybu postępowania w sprawach o opróżnienie lokalu lub pomieszczenia albo o wydanie nieruchomości oraz szczegółowych warunków, jakim powinno odpowiadać tymczasowe pomieszczenie.</p>
		<p>Należy pamiętać, że nie może to być absolutnie noclegownia dla osób bezdomnych.</p>
		<p class="signature">Urszula Szatna – 01.09.2009 r.</p>
	<?endif?>
	<?if ($art == "skarga-paulianska"):?>
		<p class="question">Dłużnik sprzedał samochód uchylając się tym od egzekucji, kupujący wiedział, że sprzedający jest moim dłużnikiem. Czy mogę unieważnić tą transakcję?</p>
		<p><b>TAK</b>. W tej sytuacji może Pan wnieść do Sądu skargę paulińską (actio pauliana), która jest rodzajem powództwa chroniącym wierzyciela w razie niewypłacalności dłużnika. Przesłankami umożliwiającymi skorzystanie przez wierzyciela ze skargi pauliańskiej jest świadomość dłużnika, że działa on z pokrzywdzeniem wierzyciela oraz to, że osoba trzecia, która nabyła samochód wiedziała lub przy zachowaniu należytej staranności mogła się dowiedzieć o tym, że dłużnik działa z pokrzywdzeniem wierzyciela. Roszczenia te przedawniają się po upływie lat pięciu od daty dokonania czynności, zgodnie z art. 534 kodeksu cywilnego.</p>
		<p class="signature">Urszula Szatna – 01.09.2009 r.</p>
	<?endif?>
	<?if ($art == "odwolanie-darowizny"):?>
		<p class="question">Czy możliwe jest odwołanie darowizny?</p>
		<p><b>TAK</b>. Odwołanie darowizny możliwe jest w razie rażącej niewdzięczności obdarowanego w stosunku do darczyńcy, na podstawie art. 898. Kodeksu cywilnego. Jeżeli obdarowany będzie postępował sprzecznie z zasadami współżycia społecznego np. przez nieudzielenie pomocy w chorobie, ciężkie naruszenie obowiązków rodzinnych, pobicie, zniewagę to darczyńca lub jego spadkobiercy posiadają uprawnienia do odwołania darowizny. Jeżeli darczyńca obdarowanemu przebaczył to nie może darowizna być odwołana z powodu niewdzięczności. Możliwe jest też odwołanie darowizny z powodu niedostatku darczyńcy. Odwołanie następuje poprzez złożenie obdarowanemu pisemnego oświadczenia. Zasadą jest, że darowizna nie może być odwołana po upływie roku od dnia, w którym uprawniony do odwołania dowiedział się o niewdzięczności obdarowanego.</p>
		<p class="signature">Urszula Szatna – 01.09.2009 r.</p>
	<?endif?>
	<?if ($art == "dozor-policyjny"):?>
		<p class="question">Od kilku miesięcy mam dozór policyjny dwa razy w tygodniu i zakaz opuszczania kraju. Co mogę zrobić, aby móc wyjechać do pracy za granicę?</p>
		<p>Na podstawie art. 254 kodeksu postępowania karnego oskarżony (lub podejrzany) może składać w każdym czasie wniosek o uchylenie lub zmianę środka zapobiegawczego; w przedmiocie wniosku rozstrzyga, najpóźniej w ciągu 3 dni, prokurator, a po wniesieniu aktu oskarżenia do sądu, sąd przed którym sprawa się toczy. Na postanowienie w przedmiocie wniosku oskarżonemu zażalenie przysługuje tylko wtedy, gdy wniosek został złożony po upływie co najmniej 3 miesięcy od dnia wydania postanowienia w przedmiocie tymczasowego aresztowania dotyczącego tego samego oskarżonego. Zażalenie na postanowienie sądu rozpoznaje ten sam sąd w składzie trzech sędziów.</p>
		<p>Wniosek o zniesienie środka zapobiegawczego lub zamianę go na inny np. udzielenie poręczenia majątkowego można  złożyć wraz z zapewnieniem, że stawi się  na wezwanie.</p>
		<p class="signature">Urszula Szatna – 01.09.2009 r.</p>
	<?endif?>
	<?if ($art == "zadatek"):?>
		<p class="question">Podpisałem umowę i wpłaciłem zadatek. Jednakże druga strona odstąpiła od umowy i zwróciła wyłącznie kwotę wpłaconą przeze mnie. Czy należy mi się zwrot zadatku w podwójnej wysokości?</p>
		<p><b>TAK</b>. Zgodnie z art. 394 § 1. Kodeksu cywilnego w braku odmiennego zastrzeżenia umownego zadatek dany przy zawarciu umowy ma to znaczenie, że w razie niewykonania umowy przez jedną ze stron druga strona może bez wyznaczania dodatkowego terminu od umowy odstąpić i otrzymany zadatek zachować, a jeżeli sama go dała , może żądać sumy dwukrotnie wyższej. Zadatek pełni funkcję zabezpieczającą interesy tej strony umowy, której zależy, aby doszła ona  do skutku. W razie nie wykonania umowy zadatek przepada albo trzeba go zwrócić w podwójnej wysokości. Nie należy mylić zadatku z zaliczką, którą zwraca się zawsze w tej samej wysokości.</p>
		<p class="signature">Urszula Szatna – 25.08.2009 r.</p>
	<?endif?>
	<?if ($art == "pamiatki-z-egiptu"):?>
		<p class="question">Wyjeżdżam na wakacje do Egiptu. Jakich pamiątek nie mogę przywieźć wracając do kraju?</p>
		<p>Wyjeżdżając na wakacje do innych krajów należy pamiętać, iż nie wszystkie pamiątki możemy przywieźć wracając do Polski.</p>
		<p>Z Afryki zabroniony jest przywóz:</p>
		<ul>
			<li>kości słoniowej,</li>
			<li>wyrobów ze skór krokodyli i węży dusicieli,</li>
			<li>rogów nosorożców i wyrobów z nich wykonanych,</li>
			<li>sukulentów,</li>
			<li>koralowców,</li>
			<li>muszli przydaczni,</li>
			<li>wyrobów ze skór żółwi morskich,</li>
			<li>żywych gadów i ptaków,</li>
			<li>skór zebr, dzikich kotów i antylop.</li>
		</ul>
		<p class="signature">Urszula Szatna – 25.08.2009 r.</p>
	<?endif?>
	<?if ($art == "nabycie-spadku"):?>
		<p class="question">Czy aby nabyć spadek konieczne jest złożenie jakiegoś oświadczenia?</p>
		<p>Spadkobierca  nabywa spadek z mocy prawa, ale może złożyć oświadczenie co do spadku. Powinien to uczynić w terminie 6 miesięcy od chwili, w której dowiedział się o nabyciu spadku. Spadkobierca może złożyć oświadczenie o przyjęciu spadku wprost lub z dobrodziejstwem inwentarza bądź też spadek odrzucić. Brak oświadczenia spadkobiercy jest jednoznaczne z przyjęciem spadku bez ograniczenia odpowiedzialności za długi spadkowe, chyba że jest osobą niemającą pełnej zdolności do czynności prawnych, co do której istnieje podstawa do całkowitego ubezwłasnowolnienia albo osobą prawną to wówczas przyjmuje spadek z dobrodziejstwem inwentarza, co oznacza ograniczenie odpowiedzialności za długi spadkowe do wartości stanu czynnego spadku.</p>
		<p class="signature">Urszula Szatna – 25.08.2009 r.</p>
	<?endif?>
	<?if ($art == "ubezwlasnowolnienie"):?>
		<p class="question">Kto może złożyć wniosek o ubezwłasnowolnienie osoby chorej psychicznie? Gdzie taki wniosek się składa i ile kosztuje opłata sądowa?</p>
		<p>Sprawy o ubezwłasnowolnienie należą do właściwości sądów okręgowych, które rozpoznają je w składzie trzech sędziów zawodowych. W sprawach tych właściwy jest sąd miejsca zamieszkania osoby, której dotyczy wniosek o ubezwłasnowolnienie, a w braku miejsca zamieszkania – sąd miejsca jej pobytu.</p>
		<p>Wniosek o ubezwłasnowolnienie może wnieść wyłącznie na podstawie art. 545 § 1 kodeksu postępowania cywilnego:</p>
 		<ul>
 			<li>małżonek osoby, która ma być ubezwłasnowolniona;</li>
			<li>jej krewni w linii prostej oraz rodzeństwo;</li>
			<li>jej przedstawiciel ustawowy.</li>
		</ul>
		<p>Krewni osoby, której dotyczy wniosek, o ubezwłasnowolnienie nie mogą zgłaszać tego wniosku, jeżeli osoba ta ma przedstawiciela ustawowego. Opłata sądowa jest stała w kwocie 40 zł.</p>
		<p class="signature">Urszula Szatna – 25.08.2009 r.</p>
	<?endif?>
	<?if ($art == "narkotyki"):?>
		<p class="question">Jaka grozi mi kara za kupienie 20 gram marihuany?</p>
		<p>W Polsce zabronione jest posiadanie każdej najmniejszej nawet ilości narkotyków.</p>
		<p>Zgodnie z art. 62.1. ustawy z dnia 29 lipca 2005 r. o przeciwdziałaniu narkomanii – kto, wbrew przepisom ustawy, posiada środki odurzające lub substancje psychotropowe, podlega karze pozbawienia wolności do lat 3. Jeżeli nabyło się narkotyki w celu osiągnięcia korzyści majątkowej lub osobistej, udziela innej osobie środka odurzającego lub substancji psychotropowej, ułatwia użycie albo nakłania do użycia takiego środka lub substancji, podlega karze pozbawienia wolności od roku do lat 10, na podstawie art.59.1. powołanej powyżej ustawy.</p>
 		<p>Jeżeli sprawca czynu, o którym mowa powyżej udziela (także nieodpłatnie) środka odurzającego małoletniemu, ułatwia użycie albo nakłania do użycia takiego środka, podlega karze pozbawienia wolności na czas nie krótszy od lat 3.</p>
		<p class="signature">Urszula Szatna – 12.07.2009 r.</p>
	<?endif?>
	<?if ($art == "malzenstwo-krewnych"):?>
		<p class="question">Czy mogę zawrzeć związek małżeński z synem brata mojego ojca?</p>
		<p><b>TAK</b>. Na podstawie  art.14 Kodeksu rodzinnego i opiekuńczego nie mogą zawrzeć ze sobą małżeństwa jedynie krewni w linii prostej, rodzeństwo ani powinowaci w linii prostej. Wynika z tego, że mogą państwo zawrzeć związek małżeński w formie cywilnej ponieważ jesteście spokrewnieni w czwartym stopniu linii bocznej. Nie jest natomiast możliwe zawarcie małżeństwa w formie kościelnej, gdyż prawo kanoniczne zabrania zawierania związku małżeńskiego między krewnymi w linii prostej, a w linii bocznej do czwartego stopnia włącznie.</p>
		<p class="signature">Urszula Szatna – 12.07.2009 r.</p>
	<?endif?>
	<?if ($art == "choroba-w-czasie-urlopu"):?>
		<p class="question">W czasie urlopu zachorowałam. Czy odzyskam tyle dni urlopu, ile byłam chora?</p>
		<p>Na podstawie art.166 Kodeksu pracy część urlopu nie wykorzystaną z powodu czasowej niezdolności do pracy wskutek choroby pracodawca jest obowiązany udzielić w terminie późniejszym. Należy pamiętać, by pracodawcę poinformować o chorobie nie później niż w drugim jej dniu, np. telefonicznie, a po powrocie przedstawić zwolnienie lekarskie. Jeżeli rozchorowała się Pani za granicą, to zaświadczenie od tamtejszego lekarza powinno zostać przetłumaczone przez tłumacza przysięgłego i razem z tłumaczeniem złożone w pracy.</p>
		<p>Pracodawca ma obowiązek udzielić Pani urlopu do końca pierwszego kwartału następnego roku.</p>
		<p class="signature">Urszula Szatna – 12.07.2009 r.</p>
	<?endif?>
	<?if ($art == "alimenty"):?>
		<p class="question">Komornik potrąca z mojej emerytury alimenty na moją pełnoletnią córkę. Niedawno dowiedziałem się, że córka wyjechała do Anglii i tam pracuje. Czy mój obowiązek alimentacyjny wygasł?</p>
		<p>O tym, czy obowiązek alimentacyjny wygasł musi orzec sąd po zapoznaniu się z okolicznościami sprawy. Należy złożyć do sądu pozew o uchylenie orzeczonego obowiązku alimentacyjnego oraz wniosek o zawieszenie egzekucji prowadzonej przeciwko Panu do czasu prawomocnego rozstrzygnięcia sprawy przez sąd. Przesłanką uzasadniającą ustalenie, że obowiązek alimentacyjny wygasł jest m.in. uzyskanie przez uprawnioną do alimentów samodzielności, zgodnie z art.              133. § 1. k.r.o. </p>
		<p class="signature">Urszula Szatna – 5.07.2009 r.</p>
	<?endif?>
	<?if($art == "pozyczka"):?>
		<p class="question">Poręczyłam znajomej pożyczkę, a po kilku miesiącach bank wezwał mnie do spłaty kredytu. Czy mogę pozwać pożyczkobiorcę do sądu i kiedy?</p>
		<p>W przypadku gdy poręczyciel spełnił świadczenie za dłużnika może on domagać się od niego zwrotu spełnionego świadczenia – jest to  roszczenie zwrotne. Jeżeli dłużnik nie zwróci żądanej kwoty, pomimo wezwania do zapłaty, to poręczyciel może wystąpić do sądu z powództwa cywilnego.</p>
		<p>Roszczenie zwrotne przedawnia się na zasadach ogólnych określonych w art.118 k.c. – przedawnienie wynosi lat dziesięć, a dla roszczeń okresowych oraz roszczeń związanych z prowadzeniem działalności – trzy lata.</p>
		<p class="signature">Urszula Szatna - 28.06.2009 r</p>
	<?endif?>
	<?if($art == "termin-zawity"):?>
		<p class="question">Otrzymałem z sądu postanowienie, w którego uzasadnieniu podano, że mogę się od niego odwołać w terminie zawitym. Co to oznacza?</p>
		<p>Termin zawity zwany też prekluzyjnym oznacza, że po upływie określonego ustawowo terminu do wniesienia odwołania wygasa uprawnienie przysługujące określonemu podmiotowi, a czynność prawna dokonana po upływie takiego terminu jest nieważna i prawnie bezskuteczna.</p>
		<p>Jest to termin bezwzględnie wiążący i sąd powołany do rozpoznania sprawy uwzględnia ten fakt z urzędu.</p>
		<p>Jedynie z przyczyn niezależnych od strony można zgłosić wniosek o przywrócenie terminu zawitego w terminie 7 dni od daty ustania przeszkody.</p>
		<p class="signature">Urszula Szatna - 20.06.2009 r</p>
	<?endif?>
	<?if($art == "dluznik"):?>
		<p class="question">Prowadzę działalność gospodarczą i wystawiłem fakturę VAT z odroczonym terminem płatności. Pomimo upływu terminu płatności dłużnik nie zapłacił za dostarczony towar. Kilkakrotnie upominałem się o spłatę. Jak mogę odzyskać swoje pieniądze?</p>
		<p>Jeżeli dłużnik odmawia spełnienia świadczenia (zapłaty za dostarczony towar), pozostaje wnieść pozew do sądu cywilnego. Pozew o zapłatę wnosi się na urzędowym formularzu dostępnym w siedzibie sądu lub na stronie internetowej Ministerstwa Sprawiedliwości. Prawomocny wyrok sądu opatrzony w klauzulę wykonalności umożliwi wystąpienie do komornika z wnioskiem o wszczęcie egzekucji.</p>
		<p class="signature">Urszula Szatna - 14.06.2009 r</p>
	<?endif?>
	<?if($art == "koszty-sadowe"):?>
		<p class="question">Wniosłam pozew o zapłatę do Sądu Pracy. Czy w przypadku przegrania sprawy poniosę koszty sądowe?</p>
		<p>Zgodnie z art. 98 § 1 kodeksu  postępowania cywilnego – strona przegrywająca sprawę obowiązana jest zwrócić przeciwnikowi na jego żądanie koszty niezbędne do celowego dochodzenia praw i celowej obrony.W wypadku częściowego tylko uwzględnienia żądań Sąd dokona  wzajemnego zniesienia kosztów lub stosunkowego rozdzielenia na podstawie art. 100 k.p.c.</p>
		<p>Z zakresu prawa pracy pracownik występujący  jako powód jest zwolniony z opłat sądowych, ale nie zwalnia to go od obowiązku zwrotu kosztów procesu wygrywającemu przeciwnikowi (art.121 k.p.c.). Tylko w wypadkach szczególnie uzasadnionych Sąd może odstąpić od zasady zwrotu kosztów (art.102 k.p.c.).</p>
		<p class="signature">Urszula Szatna - 14.06.2009 r</p>
	<?endif?>
	<?if($art == "odszkodowanie"):?>
		<p class="question">Na moich gruntach rolnych stoi kilka słupów energetycznych. Utrudnia mi to uprawę, a także zaniża wartość działki. Czy mogę zwrócić się o opłatę, odszkodowanie w związku z tym, że Zakład Energetyczny korzysta z moich gruntów?</p>
		<p>Przysługuje Pani roszczenie o wynagrodzenie za korzystanie z nieruchomości i za obniżenie jej wartości. Podstawą prawną roszczenia o zapłatę wynagrodzenia za bezumowne korzystanie z cudzego gruntu jest art. 224 § 1 kodeksu cywilnego. Wysokość należnego wynagrodzenia za bezumowne korzystanie z nieruchomości ustala się na poziomie czynszu, który by Pani faktycznie przypadł z tytułu dzierżawy tej części gruntu. Można  wystąpić do Zakładu Energetycznego o zapłatę do 10 lat wstecz.</p>
		<p class="signature">Urszula Szatna - 14.06.2009 r</p>
	<?endif?>
</div>
