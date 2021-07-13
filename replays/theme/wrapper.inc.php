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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.6005665921421728" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9597035413026154" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.1495044577536666" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.7530502170216296" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.33302255894988253" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.9566410041319906" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.32672011201275564"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8326889809373514" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.27051004943599777">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3672482736447822">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.27990881955299374">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5241748837793156">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.8035782632348929"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.8917616232306893"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.2855135653704597"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6317050517139735"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.30824418658703157"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7339265741112531"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.5769999505677497"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.8806760055726384"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.2568470477221778"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6333409559769316"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.6319597075534291"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.6793430661852113"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.7704280359243003"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.5793992264664027"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.9297035631759734"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.7023778900579032"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.841497128193518"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.4877716416921971"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.9446900311843387"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
