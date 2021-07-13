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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.36663105694556863" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.2698879736654609" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.28292898118329224" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.3696134481134725" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.29275540821796975" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.9571431732832136" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.04522081669456535"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.23153361949053708" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.9021332069031953">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.5929433454233952">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.12385456941734208">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8862796326224087">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.6579875150463734"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.8975330215589157"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.5474223799949312"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.3442162508033306"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.7025996930327176"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9884523259395286"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.034358891711670614"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.48276085329193097"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.20748558931602656"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6391475112559206"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.0013355719077101647"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.17949802346157662"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.5738337930574855"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.3590019815355987"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.9275144508296365"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.7023156906301933"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.5591784499649646"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.4371397881857131"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.8053486565569381"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
