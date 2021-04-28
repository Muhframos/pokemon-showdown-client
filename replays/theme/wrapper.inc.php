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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.25949754401484815" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4775120231163994" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.3729626420721599" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.4581231251429223" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.9582503882448123" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.5841525893250508" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.3514088658580308"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.30736917388493223" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.7570011422804539">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3935968781150405">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7832795891686162">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8456588332675206">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.41077619503029816"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.22487086465983253"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.19867436699491803"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5862900751425233"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.11880120385258963"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5286911796553142"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.5277512214005917"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.7706567966583411"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.8514143953309314"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.25510971152351947"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.479728208141168"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.055862690228769774"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.1080406229789701"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.2215990039389062"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.16086650371408284"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.7630779532721672"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.7934551394574425"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.7513063885624716"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.2703739770172635"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
