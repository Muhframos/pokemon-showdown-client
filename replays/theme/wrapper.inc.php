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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.38164227713827237" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.09483414138945934" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.7322385024881817" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.2858663695409349" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.3615176299670124" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.9794040839639249" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.9990176379389983"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.279879362619861" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.17391915088973775">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9857338180206845">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.9618852319591589">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.8712330858365203">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.06862094656035267"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.7742515842787192"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.09778854934255388"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7002149133419862"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.8641493876663349"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.22975615628973545"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.8324179886558614"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.47648019632282645"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.7497780411847614"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.014662953929471145"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.7435448180934663"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.8482522241526427"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.639232846375384"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.8510169551587936"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.11804501910400966"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.5907293934695079"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.09210355514078072"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.6665631728495895"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.28400015342707396"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
