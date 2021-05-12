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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.7734148012680873" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.47004098661218885" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5985257795886874" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.44757444596355933" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.7736937020608747" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.41258452698013093" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.19406731339741867"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8008398512369987" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6092269901919332">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3532663642437983">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.827734598191314">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7160575682174275">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9638562882730426"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.2813643263500263"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.09562106745391352"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5938253144143384"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.46706091982103115"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.06186376524346149"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.8909770978210587"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.8200143846577057"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.026754522292534055"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.29862887937553295"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.238864835143495"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.5877405289263513"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.8454777538453888"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.13531034283464827"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.8912531281746352"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.39020736768426056"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.16275378242417426"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.5202541124924709"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.5248471698020079"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
