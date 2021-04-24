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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.9142958702208128" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.588855794525323" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.46727979704078826" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.8525017775193091" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.08654626995414061" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.7937765154910963" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.01454852459216105"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.09014521521412378" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.38520401260395487">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9288950675460279">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.2791967131952606">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.3907613524893665">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2664776329301146"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.6506233842526279"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.9559666020848752"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.29203988283997395"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.05224927659117151"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.7559215455096757"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.006902551802551837"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.5713034058005495"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.1949128668660165"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.3060825979300992"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.2968452220094464"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.45160561344721084"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.8336948068162644"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.7731544240892327"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.7551419519886962"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.3893906358035917"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.8449137782226115"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.05333432101965174"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.6420732073995021"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
