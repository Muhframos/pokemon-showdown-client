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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.06446887894076525" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.05694738816076095" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7332609471120624" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.5509039425136786" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.573416428854266" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.46682052698976517" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.19479427699954877"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8854188495122988" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11010143875902378">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.13245592984738264">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.35557155625718906">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.9816494591709746">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.4197281353276612"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.6999802752680808"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.2527169701366383"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5519292944966476"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.6293956548202557"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.9186182949955088"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.30115127892877336"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.3721604316804521"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.22398569203970853"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.7416355441258067"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.6767921642439336"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.7561019440590693"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.9814611186968316"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.5195885597735288"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.7788763908438776"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.4317614049077414"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.4360313147707322"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.5453639675482429"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.45668179584422997"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
