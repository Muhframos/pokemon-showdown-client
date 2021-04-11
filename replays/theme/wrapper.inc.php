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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.05430918495058523" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.23887183340629248" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.5781871847676396" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.8015767801968068" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.7620092156049914" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.6731071036621443" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9187421223344852"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.10795084980891168" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5784740916107949">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.56831683161951">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.6999977484098923">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.857395168946977">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.31651964471240723"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.5815533542076605"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.467792713154054"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5129868241247526"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.9033825489863709"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.07466858208185712"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.9846602716927957"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.7618918623864424"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.13876546762156594"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.3400338550591133"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.24565569051111114"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.33517423092224496"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.8590731251801034"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.6340561120014909"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.28579618808813945"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.19582269776113126"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.0019498446334484942"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.6852014796893635"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.20135851046320363"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
