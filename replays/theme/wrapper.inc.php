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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.9827595908661275" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.918029263910441" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7067924311368725" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.2755420326619593" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.7881592790308938" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.30858847577975945" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.7408714567189494"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.6529819166749806" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.01210678815813182">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.7804278600868901">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.034091687021211126">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.0979484125917287">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.865906095141465"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.15813647805205377"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.7952033571303676"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.24963353390621879"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.024093979211031513"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7126886321896224"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.46163079443239097"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.24351274875713602"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.7179335354338698"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.2828243682084617"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.592605996920905"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.1009926526037579"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.2866842481521834"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.8384149699067027"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.1513917115656378"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.11525010219106657"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.7551795216639972"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.6100331847432794"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.3471741702380049"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
