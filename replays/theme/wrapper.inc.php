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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.7684230042622588" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.46194147243843586" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.013260089595514835" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.95419436757748" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.805243757100653" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.26376825286601857" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.24684985847113072"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.7638989385323123" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6030921222903538">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.012375039401276045">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.5127178551884619">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4843794090746869">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.9660474099504084"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.3491850877960574"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.8723773292706078"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7032232518360788"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.5924923405978644"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8827066134308403"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.3687386699913249"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.9502332568490925"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.3585414844253416"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.6842429673451644"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.6637754873638144"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.4733622669773112"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.7638087362500137"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.19003004301918236"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.049600124184232985"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.7187592406259988"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.11371048245649584"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.5525008628253154"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.25188670311671535"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
