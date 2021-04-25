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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.7321631274404048" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.8145174305407852" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.005055596412341323" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.2167577625703183" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.07330228619291468" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.8236514289826338" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.5492509959785181"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.3741192824800268" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.11109361759229386">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.2279812665259633">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.0777558338805171">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.6129377732620267">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7420716523022062"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.5711156964055617"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.33052080651735727"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8438099765520299"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.06097465893733789"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.4927672938109966"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.0161440920124567"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.8140154678341667"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.6958448171569485"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.7838965258214596"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.8398068754217696"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.9044011802584384"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.19862055947956603"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.21699653697469445"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.04434312044720534"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.1742911414644479"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.5430211633342206"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.23146982344951295"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.25909840412880425"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
