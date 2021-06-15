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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.19353878410462144" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.36185785602541887" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.1486245743672221" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.8378209680479924" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.3899753781192379" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.5897525713451084" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.04485344809030889"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.4588647973612485" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.005503475395427282">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4961657575695937">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2725478688545997">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.775256870645854">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4702074508773788"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.14479739741652642"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.3449242138343065"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.26175656838996963"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.7091878274292653"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.29238864608975623"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.9350118711738682"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.034746250778830534"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.51730291723712"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.3432615824702643"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.9711958370501812"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.25917755679726695"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.21407753797515716"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.2380047181966778"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.2837176632630478"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.8210897028885527"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.0782691904358448"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.09222266898741016"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.2265780240187567"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
