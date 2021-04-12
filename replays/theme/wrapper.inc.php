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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.1702003312604785" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8672778227241649" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.03852402991307624" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.5230039741047954" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.08367104517687318" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.1795084166750105" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.8775307946979447"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.5967604320407314" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.3358726713839624">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3938991622571788">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.08798469960198774">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5705618710505287">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.11636705387358015"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.1660648162234275"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.7977923133676379"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9654496990131203"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.2321507932893665"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9887811175598131"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.11534879905572937"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.6900910511867773"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.9910214322689159"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.14897649512782873"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.29490191532768906"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.8155272889920311"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.07984275360657489"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.9718581719737802"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.6276405211944762"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.460158369348183"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.6314112491777202"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.8888969681692114"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.7900078930383552"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
