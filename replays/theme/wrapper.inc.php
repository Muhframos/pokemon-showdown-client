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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.8454077763176056" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.523207563117148" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9068956029189725" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.40717470920581866" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.8224485305207296" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.745732309470297" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.2721709207678833"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.47942692134423415" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3909159130494717">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.19525673209317507">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8708054474599933">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.02149855092620445">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.24513219561300104"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.6572037429987927"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.354193067327885"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.21824214109104223"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.7040961800617045"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.1289208693809103"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.2249028294684281"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.1855652588764527"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.4989543453147922"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.11845675781894816"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.18779913428440476"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.49052635758472496"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.6901732670079292"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.5731243339909278"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.05230572049286897"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.7756368337645918"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.2178144437220968"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.5264983734130979"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.448825688996878"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
