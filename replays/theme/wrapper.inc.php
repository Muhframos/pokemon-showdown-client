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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.21474139580533635" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.14669608711877946" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3533901316174741" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.7978676202386332" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.4420304182538577" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.5178549559706229" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5809952472457347"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.48786013423944286" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4140089161891549">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.30805067520937235">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.1914984090945786">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.7704538977234991">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.5398284783736182"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.22495561400287123"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.3538490427618093"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8059936376935322"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.9449890130977541"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.37316565225866816"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.544672267982544"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.5099516317208557"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.39319389187547604"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.08083259434608148"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.050397096666996655"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.5053721187718878"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.9978210269322842"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.8749320068938546"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.8585175253927284"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.900732622791433"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.10921611201079107"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.2246702634156228"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.5787912264310335"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
