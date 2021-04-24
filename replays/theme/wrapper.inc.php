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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.694126741876347" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.19416733512699902" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.985606966697147" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.20260000146253243" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.7273439717218517" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.5045502226654566" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.915323712535105"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.14646664914915175" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8803203322181259">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.41241439324566675">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.03975552454811626">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6058074201729826">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.32883736727988655"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.3313328753770488"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.534543577660413"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1294399486641138"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.22865040017792082"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.29373446879628506"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.4971920321645009"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.6214962803927604"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.3580075185664824"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.14170561776464052"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.8756675272219385"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.743931111936547"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.33099496872048095"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.3425147223191296"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.7286824852234552"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.2782362299620891"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.7258036455580763"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.1389148074589257"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.7731187789086009"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
