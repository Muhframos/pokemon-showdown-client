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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.8138116756704759" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.7661698709529863" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.033073915171834" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.6810539225368168" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.8106499210272706" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.23953382510338228" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.2774021280192498"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.2629117039611415" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9909837217944986">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.37644646998093">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5421739924430862">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6802751145802861">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.29948370544215774"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.7403146471065702"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.7449547423067762"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29970208533881526"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.08722315930962199"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.16561990256601256"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.8757990431150979"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.08763657335192887"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.2913206502717167"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6736515688406206"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.35807773345203997"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.28497824034042263"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.9960997013236321"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.40072283958153854"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.8850339031860013"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.9996021370789065"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.946936361080797"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.4228531577675416"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.42093657977285637"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
