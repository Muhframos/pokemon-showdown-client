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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.7069191250961984" />
	<link rel="stylesheet" href="//24.184.93.50.psim.us/theme/panels.css?0.7188823408155114" />
	<link rel="stylesheet" href="//24.184.93.50.psim.us/theme/main.css?0.4271595932847845" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.7484657069615033" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.08894440718768815" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.31459557723334797" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//24.184.93.50.psim.us/?0.8758047402239129"><img src="//24.184.93.50.psim.us/images/pokemonshowdownbeta.png?0.22310501785405124" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4068790306346388">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6545293287986389">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//24.184.93.50.psim.us/ladder/?0.13637339198470966">Ladder</a></li>
				<li><a class="button nav-last" href="//24.184.93.50.psim.us/forums/?0.31028888096843654">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.3025695238962871"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.8410194913579501"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.6672823656908138"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.590412368407591"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.8177095561462742"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4519024146137085"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.30598126942289405"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.6378708624701401"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.018428434458709564"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.4357171992146682"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.3445198773675999"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.45520141869442"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.7078113078776593"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.710111791476334"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.546550934698179"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.27291697077245813"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.6492673642954132"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.2611004864966924"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.6558851315812535"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
