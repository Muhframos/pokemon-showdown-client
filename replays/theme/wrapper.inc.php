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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.45934968384079977" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.4251129010697625" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.8166781404618106" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.4114657438193212" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.06904347702318114" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.5354180270371627" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.04080195110192553"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.10962136063742123" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5657369525687423">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.0035871920105663424">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.08125263683090367">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.3725152367165703">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.173637915348966"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.7439790728311688"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.4068884822472649"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.7362703579144887"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.5735144943543251"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.2531657732952364"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.016611556694321017"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.9885756641682963"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.09387897018293878"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.3988322629640295"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.5035464758875048"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.40347760996434534"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.02828429668435417"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.026861834615759417"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.32871619890550563"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.6055364356190189"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.410468894156649"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.8252571976416159"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.19255859177004453"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
