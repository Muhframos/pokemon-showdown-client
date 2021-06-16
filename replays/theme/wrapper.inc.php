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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.847389574640913" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.666570398571283" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.26752331397175766" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.3829358279769046" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.9449028780532698" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.8774047435452104" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9972742713105878"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8387386544624851" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.15746653159544977">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.14019213482236625">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.22983767906175956">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7946054722966303">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3897217002110127"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.517424127483896"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.9469210011161284"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.4386183052955863"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.13198168758012518"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7331753867648438"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.48353670616357824"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.572986760568345"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.49130720860642074"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.8047218478372598"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.9520643057733922"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.5701020566231667"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.9942391648911402"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.06673210783842687"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.18000516366653252"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.5186247507899928"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.6897528293843005"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.281203800659239"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.379474829086379"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
