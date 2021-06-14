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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.03863994205010535" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4649687863307992" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8911799913187168" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.6983781018731114" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.2504516946810753" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.7579949129703851" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.23668989469588575"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5346943691793391" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6182421642357372">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.03444196212080852">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.011472651960005686">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4840387636051908">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.09904627518890807"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.4148436824360531"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.46848356934533397"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.6272302555437332"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.9829513043486793"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.09583118731246998"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.8959016829966746"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.20828268328439337"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.7952556738716483"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.3144998169820188"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.5346673819173362"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.3170195265932163"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.13390612401417568"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.11073522978136552"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.6158940362323291"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.05880386335703025"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.6003415635955995"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.3637926334121311"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.2694608571282431"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
