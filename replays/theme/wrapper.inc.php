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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.1721667640643576" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4007891864443851" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.10462061327655015" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.9899581080529691" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.24165652434896834" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.891594426966994" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8723045618636236"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7822478949995724" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.16637280471579263">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.523438977467579">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.3353755442877653">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9973701446014942">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4740129503483206"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.20429071145083455"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.8096684824318263"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3460180329254041"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.041449381647755246"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.34887373972592717"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.11850765977040312"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.7955948769621706"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.34032589332022867"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.1227408069393996"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.2207248736906482"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.5172382162476719"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.3949827970738813"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.797768733141851"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.20682151514677427"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.35731466286294933"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.8461073297384214"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.14650090336329402"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.041561122853929655"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
