<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml2/DTD/xhtml1-strict.dtd">
<?
function global_include($script_path) {
    // check if the file to include exists:
    if (isset($script_path) && is_file($script_path)) {
        // extract variables from the global scope:
        extract($GLOBALS, EXTR_REFS);
        ob_start();
        include($script_path);
        return ob_get_clean();
    } else {
        ob_clean();
        trigger_error('The script to parse in the global scope was not found');
    }
}

$categories = array (
		"o-firmie" => "O firmie",
		"uslugi" => "Usługi",
		"prawnik-radzi" => "Prawnik radzi",
		"kontakt" => "Kontakt"
);
$category = $_GET['id'];
$header = '';
$contents = global_include($category.".php"); 
?>

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
	<head>	
		<title><?
				if ($category != ''):
					$cat = $categories[$category];
					if ($header != ''):
						echo $header." | ";
					endif;
					if ($cat != ''):
						echo $cat." | ";
					endif;
				endif;
			?>Biuro Porad Prawnych - mgr Urszula Szatna</title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />   		
		<meta  name="description" lang="pl" content="Biuro porad prawnych - Urszula Szatna. Pomoc prawna w pisaniu pism urzędowych i sądowych, zwrotach podatku VAT za niektóre materiały budowlane i innych." />
		<meta name="keywords" lang="pl" content="biuro porad prawnych, prawo, nowa ruda, urszula szatna, kłodzko, dolnyśląsk, adwokat, prawnik, sprawy sądowe, agroreg, słupiec, gazeta noworudzka, odszkodowanie" />
		<meta content="pl" http-equiv="content-language" />
		<meta content="Maciej Rosiek" name="author" />
		<meta name="robots" content="all" />
		<meta name="distribution" content="global" />
		<meta name="copyright" content="Copyright (c) 2009 by Maciej Rosiek" />
		<meta name="verify-v1" content="ZSYDYj3S4md7ie3y7TUT52Gsp+Ikdr4HpO0o/3GEtg4=" />
		<link href="/style.css" type="text/css" rel="stylesheet"/>
		<script language="JavaScript" type="text/javascript" src="/skrypty.js"></script>
	</head>
	<body>
		<div id="main">
			<ul class="top">
				<?$count = 1;?>
				<?foreach ($categories as $i => $value):?>
					<li<?= $count == count($categories) ? ' class="last"' : ''?>>
						<a <?= $category == $i ? 'class="blue"' : ''?> href="/<?=$i?>.html"><?=mb_convert_case($value, MB_CASE_UPPER, "UTF-8")?></a>
					</li>
					<?$count = $count + 1?>
				<?endforeach;?>
			</ul>
			<div class="content">
				<?if (array_key_exists($category, $categories)):?>
					<?= $contents ?>
				<?endif;?>
			</div>
			<div class="footer">
				<h1><span style="font-size: 0.6em">mgr</span> URSZULA <span class="blue">SZATNA</span></h1>
				<h2>PRAWNIK</h2>
			</div>
		</div>
		<script type="text/javascript">
			var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
			document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
		</script>
		<script type="text/javascript">
			try {
			var pageTracker = _gat._getTracker("UA-9860601-1");
			pageTracker._trackPageview();
			} catch(err) {}
		</script>
		<script src="cookies.js" type="text/javascript"></script>
	</body>
</html>