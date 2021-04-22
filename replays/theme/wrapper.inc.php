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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.40517244317088186" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8201262554806663" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.024431906662092606" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.9091986713241735" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.1989395452798266" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.21418415613906205" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.03806710873266472"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.25376981478814664" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8826901506364848">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.592271472617991">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2578978782644459">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6333551964370954">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.04099081938357618"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.5124174558737966"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.8243616048031137"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.12208894612108412"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.5253055441179313"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7476473033289677"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.15761388152670253"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.3252240142266518"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.1935932983613684"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6439934699197207"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.8342255655953827"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.04768746970155324"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.9825712601656766"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.9704245402557579"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.02050400099635108"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.5236675121651777"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.7442096759115573"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.3776077442479271"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.37867888755697776"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
