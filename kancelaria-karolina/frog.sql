-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Czas wygenerowania: 27 Kwi 2011, 20:05
-- Wersja serwera: 5.1.36
-- Wersja PHP: 5.2.9-2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


--
-- Struktura tabeli dla  `layout`
--

CREATE TABLE IF NOT EXISTS `layout` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `content_type` varchar(80) DEFAULT NULL,
  `content` text,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `position` mediumint(6) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `layout`
--

INSERT INTO `layout` (`id`, `name`, `content_type`, `content`, `created_on`, `updated_on`, `created_by_id`, `updated_by_id`, `position`) VALUES
(1, 'none', 'text/html', '<?php echo $this->content(); ?>', '2011-04-11 20:40:27', '2011-04-11 20:40:28', 1, 1, NULL),
(2, 'Normal', 'text/html', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"\r\n"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<html xmlns="http://www.w3.org/1999/xhtml">\r\n<head>\r\n  <title><?php echo $this->title(); ?></title>\r\n\r\n  <meta http-equiv="content-type" content="application/xhtml+xml; charset=utf-8" />\r\n  <meta name="robots" content="index, follow" />\r\n  <meta name="description" content="<?php echo ($this->description() != '''') ? $this->description() : ''Default description goes here''; ?>" />\r\n  <meta name="keywords" content="<?php echo ($this->keywords() != '''') ? $this->keywords() : ''default, keywords, here''; ?>" />\r\n  <meta name="author" content="Author Name" />\r\n\r\n  <link rel="favourites icon" href="<?php echo URL_PUBLIC; ?>favicon.ico" />\r\n    <link rel="stylesheet" href="<?php echo URL_PUBLIC; ?>public/themes/normal/screen.css" media="screen" type="text/css" />\r\n    <link rel="stylesheet" href="<?php echo URL_PUBLIC; ?>public/themes/normal/print.css" media="print" type="text/css" />\r\n    <link rel="alternate" type="application/rss+xml" title="Frog Default RSS Feed" href="<?php echo URL_PUBLIC.((USE_MOD_REWRITE)?'''':''/?''); ?>rss.xml" />\r\n\r\n</head>\r\n<body>\r\n<div id="page">\r\n<?php $this->includeSnippet(''header''); ?>\r\n<div id="content">\r\n\r\n  <h2><?php echo $this->title(); ?></h2>\r\n  <?php echo $this->content(); ?> \r\n  <?php if ($this->hasContent(''extended'')) echo $this->content(''extended''); ?> \r\n\r\n</div> <!-- end #content -->\r\n<div id="sidebar">\r\n\r\n  <?php echo $this->content(''sidebar'', true); ?> \r\n\r\n</div> <!-- end #sidebar -->\r\n<?php $this->includeSnippet(''footer''); ?>\r\n</div> <!-- end #page -->\r\n</body>\r\n</html>', '2011-04-11 20:40:29', '2011-04-11 20:40:30', 1, 1, NULL),
(3, 'RSS XML', 'application/rss+xml', '<?php echo $this->content(); ?>', '2011-04-11 20:40:31', '2011-04-11 20:40:32', 1, 1, NULL),
(4, 'Home', 'text/html', '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">\r\n<html xmlns="http://www.w3.org/1999/xhtml">\r\n<?php $this->includeSnippet(''head''); ?>\r\n<body class="single">\r\n<div id="wrapper">\r\n<div id="top-header-wrapper">\r\n  <div id="top-header" class="container">\r\n    <?php $this->includeSnippet(''menu''); ?>\r\n  </div>\r\n</div>\r\n<?php $this->includeSnippet(''header''); ?>\r\n<div id="page" class="container">\r\n	<div id="content">\r\n	  <div id="box2">\r\n	    <div>\r\n            <?php echo $this->content(); ?> \r\n            <?php if ($this->hasContent(''extended'')) echo $this->content(''extended''); ?> \r\n            </div>\r\n          </div>\r\n	</div>\r\n	<div id="sidebar">\r\n	  <div id="box3">\r\n              <?php echo $this->content(''sidebar'', true); ?> \r\n          </div>\r\n        </div>\r\n</div>\r\n</div>\r\n<div id="footer-wrapper">\r\n	<div id="footer">\r\n		<?php $this->includeSnippet(''footer''); ?>\r\n	</div>\r\n</div>\r\n</body>\r\n</html>\r\n', '2011-04-11 20:56:19', '2011-04-13 20:00:34', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `page`
--

CREATE TABLE IF NOT EXISTS `page` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `slug` varchar(100) DEFAULT NULL,
  `breadcrumb` varchar(160) DEFAULT NULL,
  `keywords` varchar(255) DEFAULT NULL,
  `description` text,
  `parent_id` int(11) unsigned DEFAULT NULL,
  `layout_id` int(11) unsigned DEFAULT NULL,
  `behavior_id` varchar(25) NOT NULL,
  `status_id` int(11) unsigned NOT NULL DEFAULT '100',
  `created_on` datetime DEFAULT NULL,
  `published_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `position` mediumint(6) unsigned DEFAULT NULL,
  `is_protected` tinyint(1) NOT NULL DEFAULT '0',
  `needs_login` tinyint(1) NOT NULL DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- Zrzut danych tabeli `page`
--

INSERT INTO `page` (`id`, `title`, `slug`, `breadcrumb`, `keywords`, `description`, `parent_id`, `layout_id`, `behavior_id`, `status_id`, `created_on`, `published_on`, `updated_on`, `created_by_id`, `updated_by_id`, `position`, `is_protected`, `needs_login`) VALUES
(1, 'Strona główna', '', 'Strona główna', '', '', 0, 4, '', 100, '2011-04-11 20:40:33', '2011-04-11 20:40:34', '2011-04-13 20:06:26', 1, 1, 0, 1, 0),
(10, 'Kontakt', 'kontakt', 'Kontakt', '', '', 1, 0, '', 100, '2011-04-11 22:38:58', '2011-04-11 22:39:02', '2011-04-13 20:08:24', 1, 1, 2, 0, 2),
(11, 'O mnie', 'o-mnie', 'O mnie', '', '', 1, 0, '', 100, '2011-04-11 22:40:33', '2011-04-11 22:40:33', '2011-04-13 20:06:59', 1, 1, 0, 0, 2),
(5, 'My first article', 'my_first_article', 'My first article', NULL, NULL, 4, 0, '', 100, '2011-04-11 20:40:45', '2011-04-11 20:40:46', '2011-04-11 20:40:47', 1, 1, 0, 0, 2),
(6, 'My second article', 'my_second_article', 'My second article', NULL, NULL, 4, 0, '', 100, '2011-04-11 20:40:48', '2011-04-11 20:40:49', '2011-04-11 20:40:50', 1, 1, 0, 0, 2),
(7, '%B %Y archive', 'monthly_archive', '%B %Y archive', NULL, NULL, 4, 0, 'archive_month_index', 101, '2011-04-11 20:40:51', '2011-04-11 20:40:52', '2011-04-11 20:40:53', 1, 1, 0, 1, 2),
(9, 'Cennik', 'cennik', 'Cennik', '', '', 1, 0, '', 100, '2011-04-11 22:16:39', '2011-04-11 22:16:50', '2011-04-13 20:07:42', 1, 1, 1, 0, 2),
(12, 'Oferta', 'oferta', 'Oferta', '', '', 1, 0, '', 100, '2011-04-11 22:47:56', '2011-04-11 22:58:01', '2011-04-27 20:01:49', 1, 1, NULL, 0, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `page_part`
--

CREATE TABLE IF NOT EXISTS `page_part` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `filter_id` varchar(25) DEFAULT NULL,
  `content` longtext,
  `content_html` longtext,
  `page_id` int(11) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=21 ;

--
-- Zrzut danych tabeli `page_part`
--

INSERT INTO `page_part` (`id`, `name`, `filter_id`, `content`, `content_html`, `page_id`) VALUES
(1, 'body', 'tinymce', '<p>Witam na stronie internetowej Kancelarii Doradztwa Prawnego Karoliny Janowicz. Kancelaria świadczy szeroki zakres usług na rzecz klient&oacute;w indywidualnych oraz podmiot&oacute;w gospodarczych.</p>\r\n<p>Kancelaria wyr&oacute;żnia się wysokim poziomem merytorycznym świadczonej pomocy prawnej, indywidualnym podejściem do rozpatrywanej sprawy, terminowością, dokładnością i dużym zaangażowaniem.</p>', '<p>Witam na stronie internetowej Kancelarii Doradztwa Prawnego Karoliny Janowicz. Kancelaria świadczy szeroki zakres usług na rzecz klient&oacute;w indywidualnych oraz podmiot&oacute;w gospodarczych.</p>\r\n<p>Kancelaria wyr&oacute;żnia się wysokim poziomem merytorycznym świadczonej pomocy prawnej, indywidualnym podejściem do rozpatrywanej sprawy, terminowością, dokładnością i dużym zaangażowaniem.</p>', 1),
(13, 'body', 'markdown', '<h3>Kontakt</h3>\r\n\r\nKancelaria Doradztwa Prawnego\r\n<br/>\r\nKarolina Janowicz\r\n<br/>\r\nul. Kościelna 1\r\n<br/>\r\n57-400 Nowa Ruda\r\n<br/>\r\ntel. 693 289 795\r\n<br/>\r\ne-mail <a href="mailto:janowicz@inbox.com">janowicz@inbox.com</a>', '<h3>Kontakt</h3>\n\n<p>Kancelaria Doradztwa Prawnego\n<br/>\nKarolina Janowicz\n<br/>\nul. Kościelna 1\n<br/>\n57-400 Nowa Ruda\n<br/>\ntel. 693 289 795\n<br/>\ne-mail <a href="mailto:janowicz@inbox.com">janowicz@inbox.com</a></p>\n', 10),
(14, 'body', 'tinymce', '<h3>O mnie</h3>\r\n<p>Gwarancją w osiągnięciu wysokiej jakości i standardu świadczonych usług, będzie zdobyte przeze mnie dotychczas wykształcenie i nabyte doświadczenie praktyczne.</p>\r\n<p>Ukończyłam Prawo na Wydziale Prawa, Administracji i Ekonomii Uniwersytetu Wrocławskiego, a także studia podyplomowe z zakresu wyceny nieruchomości. W 2010 r. rozpoczęłam aplikację radcowską w Okręgowej Izbie Radc&oacute;w Prawnych w Wałbrzychu. W czasie nauki praktykowałam w Sądzie Rejonowym we Wrocławiu w Wydziale Cywilnym, w Sądzie Okręgowym we Wrocławiu w Wydziale Gospodarczym, a także w Biurze Poselsko Senatorskim. Po studiach odbyłam przygotowanie zawodowe w Sądzie Rejonowym w Kłodzku w VII Wydziale Ksiąg Wieczystych w Nowej Rudzie, a następnie staż w Kancelarii Radcy Prawnego Henryka Szulca w Nowej Rudzie.</p>', '<h3>O mnie</h3>\r\n<p>Gwarancją w osiągnięciu wysokiej jakości i standardu świadczonych usług, będzie zdobyte przeze mnie dotychczas wykształcenie i nabyte doświadczenie praktyczne.</p>\r\n<p>Ukończyłam Prawo na Wydziale Prawa, Administracji i Ekonomii Uniwersytetu Wrocławskiego, a także studia podyplomowe z zakresu wyceny nieruchomości. W 2010 r. rozpoczęłam aplikację radcowską w Okręgowej Izbie Radc&oacute;w Prawnych w Wałbrzychu. W czasie nauki praktykowałam w Sądzie Rejonowym we Wrocławiu w Wydziale Cywilnym, w Sądzie Okręgowym we Wrocławiu w Wydziale Gospodarczym, a także w Biurze Poselsko Senatorskim. Po studiach odbyłam przygotowanie zawodowe w Sądzie Rejonowym w Kłodzku w VII Wydziale Ksiąg Wieczystych w Nowej Rudzie, a następnie staż w Kancelarii Radcy Prawnego Henryka Szulca w Nowej Rudzie.</p>', 11),
(15, 'body', 'tinymce', '<h3>Oferta</h3>\r\n<p>Kancelaria świadczy pomoc i usługi z zakresu:</p>\r\n<p><strong>1. Prawa cywilnego:</strong></p>\r\n<p>Z zakresu prawa cywilnego Kancelaria świadczy usługi obejmujące:</p>\r\n<ul>\r\n<li>umowy cywilnoprawne,</li>\r\n<li>ochronę d&oacute;br osobistych,</li>\r\n<li>obr&oacute;t nieruchomościami,</li>\r\n<li>zasiedzenie,</li>\r\n<li>użytkowanie wieczyste,</li>\r\n<li>służebności,</li>\r\n<li>księgi wieczyste i hipoteki,</li>\r\n<li>zobowiązania,</li>\r\n<li>odszkodowania,</li>\r\n<li>sprawy o podział majątku,</li>\r\n<li>najem i dzierżawę,</li>\r\n<li>prawo spadkowe,</li>\r\n<li>prawo rodzinne,</li>\r\n<li>prawo sp&oacute;łdzielcze,</li>\r\n<li>postępowania egzekucyjne, </li>\r\n<li>postępowania rejestrowe.</li>\r\n</ul>\r\n<p><br /><strong>2. Prawa pracy:</strong></p>\r\n<p>Pomoc prawna dotycząca prawa pracy obejmuje między innymi następujące usługi:</p>\r\n<ul>\r\n<li>przygotowywanie i opiniowanie um&oacute;w o pracę, kontrakt&oacute;w menedżerskich, um&oacute;w o zakazie prowadzenia działalności konkurencyjnej oraz innych dokument&oacute;w związanych z nawiązywaniem stosunku pracy,</li>\r\n<li>doradztwo w zakresie wyboru najbardziej optymalnego sposobu nawiązywania i rozwiązywania stosunk&oacute;w pracy,</li>\r\n<li>doradztwo w zakresie przysługujących pracownikom uprawnień oraz ich dochodzenie.</li>\r\n</ul>\r\n<p><br /><strong>3. Prawa handlowego:</strong></p>\r\n<p>Usługi świadczone przez Kancelarię z zakresu prawa handlowego obejmują w szczeg&oacute;lności:</p>\r\n<ul>\r\n<li>zakładanie sp&oacute;łek handlowych,</li>\r\n<li>sporządzanie um&oacute;w i statut&oacute;w sp&oacute;łek,</li>\r\n<li>sporządzanie regulamin&oacute;w zarząd&oacute;w, rad nadzorczych, zgromadzeń wsp&oacute;lnik&oacute;w i walnych zgromadzeń,</li>\r\n<li>konstruowanie um&oacute;w między wsp&oacute;lnikami/akcjonariuszami,</li>\r\n<li>pomoc w redagowaniu projekt&oacute;w uchwał,</li>\r\n<li>stałą obsługę prawną podmiot&oacute;w gospodarczych obejmującą bieżące doradztwo z zakresu wszystkich dziedzin prawa,</li>\r\n<li>przekształcanie sp&oacute;łek,</li>\r\n<li>doradztwo prawne w zakresie likwidacji sp&oacute;łek,</li>\r\n<li>redagowanie i opiniowanie um&oacute;w z zakresu prawa handlowego,</li>\r\n<li>doradztwo w zakresie wyboru najbardziej optymalnej formy prawnej podejmowanej bądź prowadzonej działalności gospodarczej.</li>\r\n</ul>\r\n<p><strong>4. Prawa administracyjnego:</strong></p>\r\n<p>Świadczone przez Kancelarię usługi w zakresie prawa administracyjnego obejmują między innymi:</p>\r\n<ul>\r\n<li>sporządzanie opinii prawnych,</li>\r\n<li>pomoc prawna przy uzyskiwaniu stosownych zezwoleń, pozwoleń i licencji.</li>\r\n</ul>', '<h3>Oferta</h3>\r\n<p>Kancelaria świadczy pomoc i usługi z zakresu:</p>\r\n<p><strong>1. Prawa cywilnego:</strong></p>\r\n<p>Z zakresu prawa cywilnego Kancelaria świadczy usługi obejmujące:</p>\r\n<ul>\r\n<li>umowy cywilnoprawne,</li>\r\n<li>ochronę d&oacute;br osobistych,</li>\r\n<li>obr&oacute;t nieruchomościami,</li>\r\n<li>zasiedzenie,</li>\r\n<li>użytkowanie wieczyste,</li>\r\n<li>służebności,</li>\r\n<li>księgi wieczyste i hipoteki,</li>\r\n<li>zobowiązania,</li>\r\n<li>odszkodowania,</li>\r\n<li>sprawy o podział majątku,</li>\r\n<li>najem i dzierżawę,</li>\r\n<li>prawo spadkowe,</li>\r\n<li>prawo rodzinne,</li>\r\n<li>prawo sp&oacute;łdzielcze,</li>\r\n<li>postępowania egzekucyjne, </li>\r\n<li>postępowania rejestrowe.</li>\r\n</ul>\r\n<p><br /><strong>2. Prawa pracy:</strong></p>\r\n<p>Pomoc prawna dotycząca prawa pracy obejmuje między innymi następujące usługi:</p>\r\n<ul>\r\n<li>przygotowywanie i opiniowanie um&oacute;w o pracę, kontrakt&oacute;w menedżerskich, um&oacute;w o zakazie prowadzenia działalności konkurencyjnej oraz innych dokument&oacute;w związanych z nawiązywaniem stosunku pracy,</li>\r\n<li>doradztwo w zakresie wyboru najbardziej optymalnego sposobu nawiązywania i rozwiązywania stosunk&oacute;w pracy,</li>\r\n<li>doradztwo w zakresie przysługujących pracownikom uprawnień oraz ich dochodzenie.</li>\r\n</ul>\r\n<p><br /><strong>3. Prawa handlowego:</strong></p>\r\n<p>Usługi świadczone przez Kancelarię z zakresu prawa handlowego obejmują w szczeg&oacute;lności:</p>\r\n<ul>\r\n<li>zakładanie sp&oacute;łek handlowych,</li>\r\n<li>sporządzanie um&oacute;w i statut&oacute;w sp&oacute;łek,</li>\r\n<li>sporządzanie regulamin&oacute;w zarząd&oacute;w, rad nadzorczych, zgromadzeń wsp&oacute;lnik&oacute;w i walnych zgromadzeń,</li>\r\n<li>konstruowanie um&oacute;w między wsp&oacute;lnikami/akcjonariuszami,</li>\r\n<li>pomoc w redagowaniu projekt&oacute;w uchwał,</li>\r\n<li>stałą obsługę prawną podmiot&oacute;w gospodarczych obejmującą bieżące doradztwo z zakresu wszystkich dziedzin prawa,</li>\r\n<li>przekształcanie sp&oacute;łek,</li>\r\n<li>doradztwo prawne w zakresie likwidacji sp&oacute;łek,</li>\r\n<li>redagowanie i opiniowanie um&oacute;w z zakresu prawa handlowego,</li>\r\n<li>doradztwo w zakresie wyboru najbardziej optymalnej formy prawnej podejmowanej bądź prowadzonej działalności gospodarczej.</li>\r\n</ul>\r\n<p><strong>4. Prawa administracyjnego:</strong></p>\r\n<p>Świadczone przez Kancelarię usługi w zakresie prawa administracyjnego obejmują między innymi:</p>\r\n<ul>\r\n<li>sporządzanie opinii prawnych,</li>\r\n<li>pomoc prawna przy uzyskiwaniu stosownych zezwoleń, pozwoleń i licencji.</li>\r\n</ul>', 12),
(5, 'body', 'markdown', 'My **first** test of my first article that uses *Markdown*.', '<p>My <strong>first</strong> test of my first article that uses <em>Markdown</em>.</p>\n', 5),
(7, 'body', 'markdown', 'This is my second article.', '<p>This is my second article.</p>\n', 6),
(8, 'body', '', '<?php $archives = $this->archive->get(); ?>\r\n<?php foreach ($archives as $archive): ?>\r\n<div class="entry">\r\n  <h3><?php echo $archive->link(); ?></h3>\r\n  <p class="info">Posted by <?php echo $archive->author(); ?> on <?php echo $archive->date(); ?> \r\n  </p>\r\n</div>\r\n<?php endforeach; ?>', '<?php $archives = $this->archive->get(); ?>\r\n<?php foreach ($archives as $archive): ?>\r\n<div class="entry">\r\n  <h3><?php echo $archive->link(); ?></h3>\r\n  <p class="info">Posted by <?php echo $archive->author(); ?> on <?php echo $archive->date(); ?> \r\n  </p>\r\n</div>\r\n<?php endforeach; ?>', 7),
(9, 'sidebar', 'textile', '', '', 1),
(12, 'body', 'tinymce', '<h3>Cennik usług podstawowych</h3>\r\n<ol>\r\n<li>Udzielenie porady prawnej - od 50 zł.</li>\r\n<li>Sporządzenie:      \r\n<ul>\r\n<li>pozwu na druku urzędowym - od 100 zł,</li>\r\n<li>innego pozwu - od 150 zł,</li>\r\n<li>pisma procesowego - od 100 zł,</li>\r\n<li>pisma w postępowaniu nieprocesowym, w tym wniosku wszczynającego sprawę - od 100 zł,</li>\r\n<li>pisma w postępowaniu egzekucyjnym - od 70 zł,</li>\r\n<li>pisma urzędowego - od 70 zł,</li>\r\n<li>opinii prawnej, obejmującej analizę stanu faktycznego oraz prawnego i opis możliwych rozwiązań - od 150 zł,</li>\r\n<li>umowy - od 100 zł.</li>\r\n</ul>\r\n</li>\r\n<li>Negocjacje i mediacje - od 1% wartości przedmiotu sporu.</li>\r\n<li>Koszt pracy prawnika - od 120 zł za godzinę.</li>\r\n<li>Stała obsługa przedsiębiorc&oacute;w - od 300 zł.</li>\r\n<li>Reprezentowanie Klienta przed organami sądowymi, egzekucyjnymi, administracyjnymi, samorządowymi - stawki określone w Rozporządzeniu Ministra Sprawiedliwości z nią 28 września 2002 r. w sprawie opłat za czynności radc&oacute;w prawnych oraz ponoszenia przez Skarb Państwa koszt&oacute;w pomocy prawnej udzielonej przez radcę prawnego stanowionego z urzędu (Dz. U. z 2002 r., Nr 163, poz. 1349, p&oacute;źniejszymi zmianami) - do ich trzykrotnej wysokości.</li>\r\n</ol>\r\n<p>Wszystkie ceny są cenami netto i nie zawierają podatku od towar&oacute;w i usług (VAT).</p>\r\n<p>Ostateczna cena zostaje określona przez Kancelarię po analizie stanu faktycznego oraz dokument&oacute;w otrzymanych od Klienta.</p>\r\n<p><strong>Cennik obowiązuje od 3 stycznia 2011 roku.</strong></p>', '<h3>Cennik usług podstawowych</h3>\r\n<ol>\r\n<li>Udzielenie porady prawnej - od 50 zł.</li>\r\n<li>Sporządzenie:      \r\n<ul>\r\n<li>pozwu na druku urzędowym - od 100 zł,</li>\r\n<li>innego pozwu - od 150 zł,</li>\r\n<li>pisma procesowego - od 100 zł,</li>\r\n<li>pisma w postępowaniu nieprocesowym, w tym wniosku wszczynającego sprawę - od 100 zł,</li>\r\n<li>pisma w postępowaniu egzekucyjnym - od 70 zł,</li>\r\n<li>pisma urzędowego - od 70 zł,</li>\r\n<li>opinii prawnej, obejmującej analizę stanu faktycznego oraz prawnego i opis możliwych rozwiązań - od 150 zł,</li>\r\n<li>umowy - od 100 zł.</li>\r\n</ul>\r\n</li>\r\n<li>Negocjacje i mediacje - od 1% wartości przedmiotu sporu.</li>\r\n<li>Koszt pracy prawnika - od 120 zł za godzinę.</li>\r\n<li>Stała obsługa przedsiębiorc&oacute;w - od 300 zł.</li>\r\n<li>Reprezentowanie Klienta przed organami sądowymi, egzekucyjnymi, administracyjnymi, samorządowymi - stawki określone w Rozporządzeniu Ministra Sprawiedliwości z nią 28 września 2002 r. w sprawie opłat za czynności radc&oacute;w prawnych oraz ponoszenia przez Skarb Państwa koszt&oacute;w pomocy prawnej udzielonej przez radcę prawnego stanowionego z urzędu (Dz. U. z 2002 r., Nr 163, poz. 1349, p&oacute;źniejszymi zmianami) - do ich trzykrotnej wysokości.</li>\r\n</ol>\r\n<p>Wszystkie ceny są cenami netto i nie zawierają podatku od towar&oacute;w i usług (VAT).</p>\r\n<p>Ostateczna cena zostaje określona przez Kancelarię po analizie stanu faktycznego oraz dokument&oacute;w otrzymanych od Klienta.</p>\r\n<p><strong>Cennik obowiązuje od 3 stycznia 2011 roku.</strong></p>', 9),
(16, 'parmie', '', '<h2 class="title">Ius est ars boni et aequi.</h2>\r\n<p class="subtitle">Prawo jest sztuką tego, co dobre i słuszne.</p>', '<h2 class="title">Ius est ars boni et aequi.</h2>\r\n<p class="subtitle">Prawo jest sztuką tego, co dobre i słuszne.</p>', 1),
(17, 'parmie', '', '<h2 class="title">Si in ius vocato, ito!</h2>\r\n<p class="subtitle">Jeżeli zostałeś wezwany przed sąd, idź!</p>', '<h2 class="title">Si in ius vocato, ito!</h2>\r\n<p class="subtitle">Jeżeli zostałeś wezwany przed sąd, idź!</p>', 12),
(18, 'parmie', '', '<h2 class="title">Da mihi factum, dabo tibi ius.</h2>\r\n<p class="subtitle">Podaj mi fakty, a podam ci prawo.</p>', '<h2 class="title">Da mihi factum, dabo tibi ius.</h2>\r\n<p class="subtitle">Podaj mi fakty, a podam ci prawo.</p>', 11),
(19, 'parmie', '', '<h2 class="title">Semper specialia generalibus insunt.</h2>\r\n<p class="subtitle">Zawsze szczegóły mieszczą się w ogółach.</p>', '<h2 class="title">Semper specialia generalibus insunt.</h2>\r\n<p class="subtitle">Zawsze szczegóły mieszczą się w ogółach.</p>', 9),
(20, 'parmie', '', '<h2 class="title">Regula est, quae rem quae est breviter enarrat.</h2>\r\n<p class="subtitle">Regułą jest zwięzłe wyjaśnienie istoty rzeczy.</p>', '<h2 class="title">Regula est, quae rem quae est breviter enarrat.</h2>\r\n<p class="subtitle">Regułą jest zwięzłe wyjaśnienie istoty rzeczy.</p>', 10);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `page_tag`
--

CREATE TABLE IF NOT EXISTS `page_tag` (
  `page_id` int(11) unsigned NOT NULL,
  `tag_id` int(11) unsigned NOT NULL,
  UNIQUE KEY `page_id` (`page_id`,`tag_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `page_tag`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `permission`
--

CREATE TABLE IF NOT EXISTS `permission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Zrzut danych tabeli `permission`
--

INSERT INTO `permission` (`id`, `name`) VALUES
(1, 'administrator'),
(2, 'developer'),
(3, 'editor');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `plugin_settings`
--

CREATE TABLE IF NOT EXISTS `plugin_settings` (
  `plugin_id` varchar(40) NOT NULL,
  `name` varchar(40) NOT NULL,
  `value` varchar(255) NOT NULL,
  UNIQUE KEY `plugin_setting_id` (`plugin_id`,`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `plugin_settings`
--

INSERT INTO `plugin_settings` (`plugin_id`, `name`, `value`) VALUES
('tinymce', 'version', '2.0.0'),
('tinymce', 'listpublished', '1'),
('tinymce', 'listhidden', '0'),
('tinymce', 'imagesdir', '/home/user/www/public/images'),
('tinymce', 'imagesuri', '/public/images'),
('tinymce', 'cssuri', '/public/themes/home/default.css');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `setting`
--

CREATE TABLE IF NOT EXISTS `setting` (
  `name` varchar(40) NOT NULL,
  `value` text NOT NULL,
  UNIQUE KEY `id` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `setting`
--

INSERT INTO `setting` (`name`, `value`) VALUES
('admin_title', 'Administracja'),
('language', 'pl'),
('theme', 'black_and_white'),
('default_status_id', '1'),
('default_filter_id', ''),
('default_tab', 'page'),
('allow_html_title', 'off'),
('plugins', 'a:6:{s:7:"textile";i:1;s:8:"markdown";i:1;s:7:"archive";i:1;s:14:"page_not_found";i:1;s:12:"file_manager";i:1;s:7:"tinymce";i:1;}');

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `snippet`
--

CREATE TABLE IF NOT EXISTS `snippet` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL DEFAULT '',
  `filter_id` varchar(25) DEFAULT NULL,
  `content` text,
  `content_html` text,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  `position` mediumint(6) unsigned DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Zrzut danych tabeli `snippet`
--

INSERT INTO `snippet` (`id`, `name`, `filter_id`, `content`, `content_html`, `created_on`, `updated_on`, `created_by_id`, `updated_by_id`, `position`) VALUES
(1, 'header', '', '<div id="header">\r\n	<div id="logo" class="container">\r\n		<h1><a href="<?php echo URL_PUBLIC; ?>">Kancelaria Doradztwa Prawnego</a></h1>\r\n	</div>\r\n</div>\r\n\r\n	<div id="banner-wrapper">\r\n		<div id="banner" class="container">\r\n			<div id="box1">\r\n                          <?php  echo $this->content(''parmie'', true); ?>\r\n			</div>\r\n		</div>\r\n	</div>', '<div id="header">\r\n	<div id="logo" class="container">\r\n		<h1><a href="<?php echo URL_PUBLIC; ?>">Kancelaria Doradztwa Prawnego</a></h1>\r\n	</div>\r\n</div>\r\n\r\n	<div id="banner-wrapper">\r\n		<div id="banner" class="container">\r\n			<div id="box1">\r\n                          <?php  echo $this->content(''parmie'', true); ?>\r\n			</div>\r\n		</div>\r\n	</div>', '2011-04-11 20:40:54', '2011-04-27 19:45:37', 1, 1, NULL),
(4, 'head', '', '<head>\r\n<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />\r\n<title><?php echo $this->title(); ?>  • Kancelaria Doradztwa Prawnego Karoliny Janowicz</title>\r\n  <meta name="robots" content="index, follow" />\r\n  <meta name="description" content="<?php echo ($this->description() != '''') ? $this->description() : ''Kancelaria Doradztwa Prawnego Karoliny Janowicz. Kancelaria świadczy szeroki zakres usług na rzecz klientów indywidualnych oraz podmiotów gospodarczych.''; ?>" />\r\n  <meta name="keywords" content="<?php echo ($this->keywords() != '''') ? $this->keywords() : ''kancelaria doradztwa prawnego, prawo, nowa ruda, dolnyśląsk, adwokat, prawnik, sprawy sądowe, odszkodowanie''; ?>" />\r\n  <meta name="author" content="Maciej Rosiek" />\r\n  <link href="<?php echo URL_PUBLIC; ?>public/themes/home/default.css" rel="stylesheet" type="text/css" media="all" />\r\n  <style type="text/css">\r\n    @import "<?php echo URL_PUBLIC; ?>public/themes/home/layout.css";\r\n  </style>\r\n</head>', '<head>\r\n<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />\r\n<title><?php echo $this->title(); ?>  • Kancelaria Doradztwa Prawnego Karoliny Janowicz</title>\r\n  <meta name="robots" content="index, follow" />\r\n  <meta name="description" content="<?php echo ($this->description() != '''') ? $this->description() : ''Kancelaria Doradztwa Prawnego Karoliny Janowicz. Kancelaria świadczy szeroki zakres usług na rzecz klientów indywidualnych oraz podmiotów gospodarczych.''; ?>" />\r\n  <meta name="keywords" content="<?php echo ($this->keywords() != '''') ? $this->keywords() : ''kancelaria doradztwa prawnego, prawo, nowa ruda, dolnyśląsk, adwokat, prawnik, sprawy sądowe, odszkodowanie''; ?>" />\r\n  <meta name="author" content="Maciej Rosiek" />\r\n  <link href="<?php echo URL_PUBLIC; ?>public/themes/home/default.css" rel="stylesheet" type="text/css" media="all" />\r\n  <style type="text/css">\r\n    @import "<?php echo URL_PUBLIC; ?>public/themes/home/layout.css";\r\n  </style>\r\n</head>', '2011-04-11 22:04:35', NULL, 1, NULL, NULL),
(3, 'menu', '', '<div id="menu">\r\n  <ul>\r\n      <li <?php echo url_match(''/'') ? '' class="active"'': ''''; ?>>\r\n        <a href="<?php echo URL_PUBLIC; ?>"><span>Strona główna</span></a>\r\n      </li>\r\n      <?php foreach($this->find(''/'')->children() as $menu): ?>\r\n        <li <?php if(in_array($menu->slug, explode(''/'', $this->url))) echo ''class="active"''; ?> >\r\n  	  <a href="?<?php echo $menu->url ?>"><span><?php echo $menu->title ?></span></a>\r\n        </li>\r\n      <?php endforeach; ?> \r\n  </ul>\r\n</div>', '<div id="menu">\r\n  <ul>\r\n      <li <?php echo url_match(''/'') ? '' class="active"'': ''''; ?>>\r\n        <a href="<?php echo URL_PUBLIC; ?>"><span>Strona główna</span></a>\r\n      </li>\r\n      <?php foreach($this->find(''/'')->children() as $menu): ?>\r\n        <li <?php if(in_array($menu->slug, explode(''/'', $this->url))) echo ''class="active"''; ?> >\r\n  	  <a href="?<?php echo $menu->url ?>"><span><?php echo $menu->title ?></span></a>\r\n        </li>\r\n      <?php endforeach; ?> \r\n  </ul>\r\n</div>', '2011-04-11 21:22:02', '2011-04-11 21:51:06', 1, 1, NULL),
(2, 'footer', '', '<p>\r\n&copy; Copyright <?php echo date(''Y''); ?> \r\n</p>', '<p>\r\n&copy; Copyright <?php echo date(''Y''); ?> \r\n</p>', '2011-04-11 20:40:56', '2011-04-11 21:56:40', 1, 1, NULL);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `tag`
--

CREATE TABLE IF NOT EXISTS `tag` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(40) NOT NULL,
  `count` int(11) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Zrzut danych tabeli `tag`
--


-- --------------------------------------------------------

--
-- Struktura tabeli dla  `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(40) DEFAULT NULL,
  `created_on` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  `created_by_id` int(11) DEFAULT NULL,
  `updated_by_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- Zrzut danych tabeli `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `username`, `password`, `created_on`, `updated_on`, `created_by_id`, `updated_by_id`) VALUES
(1, 'Administrator', 'maciej.rosiek@gmail.com', 'admin', '1303beba5d85d82bfb924730c26f4b29d2835595', '2011-04-11 20:40:58', '2011-04-11 20:40:59', 1, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla  `user_permission`
--

CREATE TABLE IF NOT EXISTS `user_permission` (
  `user_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL,
  UNIQUE KEY `user_id` (`user_id`,`permission_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Zrzut danych tabeli `user_permission`
--

INSERT INTO `user_permission` (`user_id`, `permission_id`) VALUES
(1, 1);
