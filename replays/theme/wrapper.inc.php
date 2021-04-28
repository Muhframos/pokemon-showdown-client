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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.11427108782037543" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7005401720533162" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.23211962984738554" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.9373530632814366" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.13516199123839434" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.14911793696835418" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.37667934822709004"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.008171470990850027" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.10752159077527446">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9789345129583">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8135683766369075">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5999853253702099">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.021650945921303677"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.3765573485071061"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.21348694865403073"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9990475964744219"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.024344421627652046"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8326611727603563"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.2605550967308783"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.42255580225562506"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.1346790850609778"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6406950849677251"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.6992796908552825"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.03465451292956456"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.9353133834302914"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.7042715940133053"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.38676860566374516"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.26469404461924917"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.5344880409931851"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.3754494986712338"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.6692695932514778"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
