<?php 

require_once('src/Menu.php');

$mysql_host = 'localhost'; 
$port = '3307'; 
$username = 'root';
$password = 'pawelc24';
$database = 'programa';

$menu = new Menu($mysql_host, $port, $username, $password, $database);

function showMenu($item, $key, $level) {
    $className = ($level>1) ? 'third-level-menu' : 'second-level-menu';
    echo '<li>';
    echo "<a href='#'>".$item['name']."</a>";
    if (isset($item['submenu']) && is_array($item['submenu'])) {
        echo '<ul class="'.$className.'">';
        array_walk($item['submenu'], 'showMenu', $level+1);
        echo '</ul>';
    }
    echo '</li>';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CV - Paweł Wiczyński</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <nav>
        <div id="menu">
            <ul class="top-level-menu">
                <?php array_walk($menu->getMenu(), 'showMenu', 1); ?>
            </ul>
        </div>
    </nav>
    <br/>
    <header>
        <h1>Paweł Wiczyński</h1>
        <p>E-mail:	<a href="mailto:paweljanwiczynski@gmail.com">paweljanwiczynski@gmail.com</a></p>
        <p>Telefon:	+48 665 015 862</p>
        <p>Data urodzenia:	14.10.1996</p>
        <p>Miejsce zamieszkania:	Koziegłowy (k. Poznania)</p>
    </header>
    <main>
        <section>
            <h2>Doświadczenie</h2>
            <ul>
                <li>
                    <h3>Programista - freelancer</h3>
                    <p class="details">09/2018 – obecnie</p>
                    <p>Wykonywanie zleceń z zakresu tworzenia stron internetowych, rozwijania autorskich systemów CMS (PHP / CodeIgniter, Bootstrap) oraz rozwiązywania problemów dotyczących działania skryptów czy ustawień serwerów. </p>
                </li>
                <li>
                    <h3>Programista / analityk – Poznańskie Centrum Superkomputerowo – Sieciowe </h3>
                    <p class="details">07/2018 – 09/2018 – 2 miesiące</p>
                    <p>Staż w Dziale Energooszczędnych Technologii ICT. Konfiguracja platformy OpenShift. Implementacja GUI dla aplikacji klienckiej w zakresie przetwarzania zbioru obrazów oraz komunikacji z serwerem HTTP (Python). Konteneryzacja aplikacji w środowisku Flatpak.</p>
                </li>
                <li>
                    <h3>Stażysta - Zespół Utrzymania Systemów - 2 Linia Wsparcia BCC (Business Consulting Center Sp. z o.o.) </h3>
                    <p class="details">08/2017 – 09/2017 – 2 miesiące</p>
                    <p>Uczestnictwo w projekcie implementacji centralnego systemu monitoringu Zabbix. Prace zlecone w zakresie administracji OS i DB. Przygotowanie i opracowanie dokumentacji.</p>
                </li>
                <li>
                    <h3>Redaktor – SureThing.pl</h3>
                    <p class="details">06/2013 – 10/2015 – 2 lata 5 miesięcy</p>
                    <p>Redagowanie tekstów (felietony, newsy, testy, recenzje) dotyczących systemów operacyjnych z rodziny GNU/Linux oraz oprogramowania Open Source. Testowanie sprzętu mobilnego i domowego. Analizowanie najnowszych trendów w branży IT. Koordynacja i pomoc w organizacji konkursów.</p>
                </li>
                <li>
                    <h3>Praktykant – Maverick Network Sp. z o.o.</h3>
                    <p class="details">04/2015 – 04/2015 – 1 miesiąc</p>
                    <p>Praktyka zawodowa w zakresie budowy i montażu sieci komputerowych, obsługi urządzeń sieciowych oraz wdrażania systemów e-commerce.</p>
                </li>
                <li>
                    <h3>Praktykant – Politechnika Poznańska</h3>
                    <p class="details">11/2014 – 11/2014 – 1 miesiąc </p>
                    <p>Praktyka zawodowa w ramach projektu "Czas zawodowców - wielkopolskie kształcenie zawodowe". Udział w szkoleniach i warsztatach z zakresu konfiguracji urządzeń sieciowych, budowy sieci bezprzewodowych, miedzianych oraz światłowodowych, a także z podstaw druku 3D.</p>
                </li>
            </ul>
        </section>
        <section>
            <h2>Wykształcenie</h2>
            <ul>
                <li>
                    <h3>Politechnika Poznańska – Wydział Elektroniki i Telekomunikacji </h3>
                    <p>(kierunek: teleinformatyka) - od października 2016  </p>
                </li>
                <li>
                    <h3>Technikum Komunikacji w Zespole Szkół Komunikacji im. Hipolita Cegielskiego w Poznaniu </h3>
                    <p>(specjalizacja: technik informatyk) - 2012 - 2016</p>
                </li>
            </ul>
        </section>
        <section>
            <h2>Projekty</h2>
            <ul>
                <li>
                    <h3>NewsHub – Społecznościowy Agregator Newsów </h3>
                    <p>Otwartoźródłowy klon serwisu Wykop.pl oparty na frameworku Laravel (PHP) + Bulma (HTML + CSS). Projekt realizowany w ramach Akademickiego Koła Aplikacji Internetowych (AKAI) na Politechnice Poznańskiej.</p>
                </li>
                <li>
                    <h3>AddressBook – Książka adresowa</h3>
                    <p>Aplikacja do zarządzania kontaktami napisana przy użyciu JavaFX oraz SQLite, inspirowana książką adresową z programu Mozilla Thunderbird. Projekt zrealizowano w ramach laboratoriów Języków Programowania Obiektowego (Politechnika Poznańska).</p>
                </li>
                <li>
                    <h3>chessTest2 – Gra w szachy </h3>
                    <p>Prosta gra w szachy napisana za pomocą biblioteki Qt (Qt Widgets). Projekt zrealizowano w ramach laboratoriów Języków Programowania Obiektowego (Politechnika Poznańska).</p>
                </li>
            </ul>
        </section>
        <section>
                <h2>Umiejętności</h2>
                <ul>
                    <li>
                        <h3>Bardzo dobra znajomość środowiska GNU / Linux</h3>
                        <p>Instalacja i konfiguracja dystrybucji Linuksa. Znajomość przydatnych narzędzi. Konfiguracja serwerów WWW (Apache, Nginx, Caddy) oraz systemów baz danych (MySQL, PostgreSQL, SQLite). Wykorzystywanie kontenerów i maszyn wirtualnych (Docker, Vagrant, OpenShift, VirtualBox). Dobra znajomość systemu monitoringu Zabbix. </p>
                    </li>
                    <li>
                        <h3>Programowanie i obsługa baz danych</h3>
                        <p>Praktyczna znajomość języków C++, Java oraz Python. Wykorzystanie bibliotek Qt, GTK+, JavaFX oraz Swing do tworzenia programów okienkowych. Projektowanie prostych aplikacji dla systemu Android. Znajomość relacyjnych baz danych, konstruowanie zapytań SQL. Znajomość modelu obiektowego oraz wzorca MVC. Obsługa systemu kontroli wersji Git. Sprawne korzystanie z dokumentacji. </p>
                    </li>
                    <li>
                        <h3>Projektowanie stron i aplikacji internetowych </h3>
                        <p>Znajomość języków PHP i JavaScript. Tworzenie projektów z wykorzystaniem frameworków Laravel, CodeIgniter, Slim oraz API Platform. Znajomość biblioteki jQuery. Podstawy wykorzystania Vue.js. Tworzenie szablonów stron przy użyciu HTML5 + CSS3 oraz Bootstrap / Bulma. Budowanie mikro-serwisów z użyciem REST API lub GraphQL (podstawy). Wykorzystanie narzędzi Composer oraz npm do zarządzania projektami. </p>
                    </li>
                    <li>
                        <h3>Tworzenie treści internetowych</h3>
                        <p>Redagowanie tekstów (felietony, recenzje, poradniki) związanych z oprogramowaniem i sprzętem komputerowym. Opracowywanie newsów i komentowanie nowinek ze świata IT. Sprawna obsługa WordPressa.</p>
                    </li>
                </ul>
            </section>
            <section>
                <h2>Skontaktuj się ze mną</h2>
                <form name="form" onsubmit="return(validate());">
                    <label for="firstname">Imię</label>
                    <input type="text" id="firstname" name="firstname" placeholder="Imię">
                    <p class="error" id="firstname_error"></p>
                    <label for="lastname">Nazwisko</label>
                    <input type="text" id="lastname" name="lastname" placeholder="Nazwisko">
                    <p class="error" id="lastname_error"></p>
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Email">
                    <p class="error" id="email_error"></p>
                    <label for="gender">Płeć</label>
                    <select id="gender" name="gender">
                      <option value="man">Mężczyzna</option>
                      <option value="woman">Kobieta</option>
                    </select>
                    <p class="error" id="gender_error"></p>
                    <label for="age">Wiek</label>
                    <input type="number" name="age" placeholder="Wiek">                    
                    <p class="error" id="age_error"></p>
                    <input type="checkbox" name="policy" id="policy">
                    <label for="policy" class="details">Wyrażam zgodę na przetwarzanie moich danych osobowych dla potrzeb niezbędnych do realizacji procesu rekrutacji (zgodnie z ustawą z dnia 10 maja 2018 roku o ochronie danych osobowych (Dz. Ustaw z 2018, poz. 1000) oraz zgodnie z Rozporządzeniem Parlamentu Europejskiego i Rady (UE) 2016/679 z dnia 27 kwietnia 2016 r. w sprawie ochrony osób fizycznych w związku z przetwarzaniem danych osobowych i w sprawie swobodnego przepływu takich danych oraz uchylenia dyrektywy 95/46/WE (RODO)).</label>
                    <p class="error" id="policy_error"></p>
                    <input type="submit"/>
                </form>
            </section>
    </main>
    <script src="script.js"></script>
</body>
</html>