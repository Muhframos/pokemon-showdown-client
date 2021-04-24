<?php

if ((substr($_SERVER['REMOTE_ADDR'],0,11) === '69.164.163.') ||
		(substr(@$_SERVER['HTTP_X_FORWARDED_FOR'],0,11) === '69.164.163.')) {
	die('website disabled');
}

/********************************************************************
 * Header
 ********************************************************************/

function ThemeHeaderTemplate() {
	global $panels;
?>
<!DOCTYPE html>
<html><head>

	<meta charset="utf-8" />

	<title><?php if ($panels->pagetitle) echo htmlspecialchars($panels->pagetitle).' - '; ?>Pok&eacute;mon Showdown</title>

<?php if ($panels->pagedescription) { ?>
	<meta name="description" content="<?php echo htmlspecialchars($panels->pagedescription); ?>" />
<?php } ?>

	<meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=IE8" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.19988702227987987" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6764100631931143" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.28285608739668433" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.47672589090271056" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.5831770483218501" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.4731065735037905" />

	<!-- Workarounds for IE bugs to display trees correctly. -->
	<!--[if lte IE 6]><style> li.tree { height: 1px; } </style><![endif]-->
	<!--[if IE 7]><style> li.tree { zoom: 1; } </style><![endif]-->

	<script type="text/javascript">
		var _gaq = _gaq || [];
		_gaq.push(['_setAccount', 'UA-26211653-1']);
		_gaq.push(['_setDomainName', 'pokemonshowdown.com']);
		_gaq.push(['_setAllowLinker', true]);
		_gaq.push(['_trackPageview']);

		(function() {
			var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
			ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
			var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
		})();
	</script>
</head><body>

	<div class="pfx-topbar">
		<div class="header">
			<ul class="nav">
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.10841631497858173"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8606840067246879" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7404171797088253">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8961833141261639">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7782790213147488">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5643140907195365">Forum</a></li>
			</ul>
			<ul class="nav nav-play">
				<li><a class="button greenbutton nav-first nav-last" href="http://play.pokemonshowdown.com/">Play</a></li>
			</ul>
			<div style="clear:both"></div>
		</div>
	</div>
<?php
}

/********************************************************************
 * Footer
 ********************************************************************/

function ThemeScriptsTemplate() {
?>
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6603745214048198"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.049690867658173765"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.40889940276102843"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9650474279628778"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.6247937680796789"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.0026594886173516574"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.19097896653606572"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.4639762968482384"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.4388067975839838"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.7617157420268954"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.3731229217642873"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.9537257446720997"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.05806823330658273"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.4217336853254334"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.010932970747491"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.15460327951244257"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.07437350895385886"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.8193397397955482"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.3546404354343462"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
