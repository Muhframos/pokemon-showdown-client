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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.19687650543465063" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.13533891630146178" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.24770786597615047" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.4359038408641738" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.49879088220454904" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.8462208251117085" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7076659287429572"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.47707368045260123" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6428535485655633">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8561925914192692">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.04432302196349158">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8948234568324458">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.0025854031027723323"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.5767067028668258"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.9635986563012888"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1504941301164997"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.3873152374577642"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.08913926195266364"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.22776345150542188"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.34941643007218604"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.1636225333767627"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.740615582575086"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.39247929305223983"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.07805893295648758"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.8274905254738696"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.13908516043503893"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.15905426115706023"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.7900563187103444"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.645429287011765"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.471466671576811"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.6750857165804163"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
