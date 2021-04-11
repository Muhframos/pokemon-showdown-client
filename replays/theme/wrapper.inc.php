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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.368863416582794" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.49533175470576873" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.4310043225805642" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.285699170890209" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.653633177340982" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.06566715180984306" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6658677002071374"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.21808714299745913" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.4615312719331979">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.1542113304751842">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.0887300110983289">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.5956489637920721">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.446280835640688"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.7642511324493579"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.8517145419376497"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.9118845392318882"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.270882303884991"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.399217938121599"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.9556991866612454"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.5663974296270686"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.9867147918825663"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.2501926628950555"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.662012468055871"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.7325036911937435"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.2999734125187201"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.9259176376633149"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.7214164852292582"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.7256438640866998"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.9711734028312158"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.625656471337148"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.6522892705572028"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
