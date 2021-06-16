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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.4059633831723355" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.16309724062063147" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.32424022125773777" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.8595344604902637" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.2837713694577906" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.5872187628355938" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.3608015192073126"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6358967315259232" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8748643553703839">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9709749844274937">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.17888212701273298">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.49332424023484767">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.48823334998032486"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.38197164400167005"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.20998146057069023"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.1681930418256199"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.6227613099084461"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9119984345072347"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.40627349823673375"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.8300028243145372"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.17301768818316332"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6664039281476819"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.2539152837476115"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.11385392711252318"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.8165054978521724"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.8362910869551348"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.15505768387892838"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.5320572227109206"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.4585186070254741"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.921761046479175"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.12848910618975795"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
