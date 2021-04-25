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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.3866314156871047" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9553168522801752" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.35789737753385564" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.9106102315947426" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.493820762686894" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.3631008619025744" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9664985937766273"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.2416629298924482" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7725198340819317">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6568607465419067">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.15968850489790687">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.06354004915413736">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.14898802270449885"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.5219595078361099"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.2606139038924864"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.11152039265345026"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.4680074648721815"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8859099790152334"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.9591017218814615"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.23870791976277483"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.7929959314022512"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.1621665803722494"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.05449091617102764"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.45761326762764276"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.1771133344196416"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.40742483001254715"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.892615035922028"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.5178337136132101"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.5984605518864223"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.9211515143778042"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.45807445404403313"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
