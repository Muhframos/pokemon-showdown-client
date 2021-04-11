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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.4070485540771176" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6461289412556455" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8323772066690649" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.9425881510602916" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.5434314828700655" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.8356977326972272" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.14544909997871747"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.339346128551288" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.02448087448849412">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.8505356950474761">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.8430310525733953">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.479954416256269">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2871159187317549"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.629506894608111"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.7243534707385932"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.07521355666058294"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.25265823793671727"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.48838140764881977"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.896113377441146"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.38112771228934195"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.6158323405857691"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6707523276576759"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.4931847193804313"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.3607623026140898"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.5459051923168217"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.9715033989314459"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.20694759840033328"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.39086170878922855"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.9225710317708913"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.5451664941835048"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.6017937649494447"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
