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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.07095105632118792" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.9443481345737621" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.9471900544929814" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.04948271022504591" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.41449470296679514" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.1256513924385485" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.6342590937420836"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.35491631584585526" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.6455489833747985">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.9836170693585222">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7256915454238566">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.4731717385172274">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.2783467209209849"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.6164838837895494"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.4676966281454218"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.09830092790320188"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.3857398089879205"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8875476832682316"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.5217872877148142"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.8532988712330591"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.030178707260262172"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.8851409253274434"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.2490068500042768"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.2606683520665911"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.2107946020321132"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.5126314109484149"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.05485364458551545"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.6259248466484901"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.9900225788664352"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.39612140886056624"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.6192511350916077"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
