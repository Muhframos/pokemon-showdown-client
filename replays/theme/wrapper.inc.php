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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.4114585219292082" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.39790056587689615" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9233332727271797" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.14054008315990396" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.7129165498266425" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.7995406807552108" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.33376672089526394"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.9601529147836827" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.8094637913245337">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.4303105272653758">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7835621133090611">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.2921168713204081">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.550045497046342"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.8780068339593659"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.25878717666830786"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.8215867805579193"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.7536139863094753"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.21292950410474543"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.11786507454650064"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.010262866530706516"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.11995673283220576"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.4757684943580398"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.784191928684693"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.8084920048462994"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.022900583173925293"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.6323335667939156"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.025772289673324345"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.22779126333133393"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.7135482478816115"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.9525364037303099"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.08595029425215572"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
