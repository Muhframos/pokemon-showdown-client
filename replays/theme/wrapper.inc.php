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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.9987622733346333" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.512794560361572" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4583830878560009" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.6654982996414747" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.34601706619011474" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.40705628459936305" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6050607758900179"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.8653748255907874" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.014447601916813824">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.6828116704549754">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.21280140942708514">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.47465680595961324">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.42779411491018005"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.27499572299510944"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.12400379234776016"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9969392600176932"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.08585643277001997"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5417629929675698"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.04047627238967877"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.7082878601473221"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.24903351105976346"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.5396635535686454"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.7829527247377055"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.8477979429328204"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.7855868155509211"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.9547332397125063"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.18366886044100883"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.7584437249547191"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.0399604919787"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.8549176542001207"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.7752699957223648"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
