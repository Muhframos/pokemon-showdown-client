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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.19317680560185613" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2863200009105582" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7857354512043817" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.6482474979029409" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.1625879133518131" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.6738078743550966" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7868925689553559"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.49321295102049834" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15121562104596387">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.025490208739141762">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6305549747131245">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5162279772582403">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9261330107048473"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.7184493387412003"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.7271364782335945"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.48825543430506224"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.32309372184310425"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8353730419532683"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.5522933053109631"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.72788547115947"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.0034698507931099076"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6105237188726329"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.2704512894054849"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.8844466484669562"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.6654764474581774"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.8685994848694878"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.8277204818539607"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.3781168970557922"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.787879762521903"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.223329611272316"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.026460047040362644"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
