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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.12938296208542055" />
	<link rel="stylesheet" href="//24.184.93.50/theme/panels.css?0.20195950875578594" />
	<link rel="stylesheet" href="//24.184.93.50/theme/main.css?0.3811618626340878" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.36258662442946643" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.8785217840477055" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.11674816992283432" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//24.184.93.50/?0.6444755019508561"><img src="//24.184.93.50/images/pokemonshowdownbeta.png?0.2611454705572429" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.815721060595693">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.3646807443920692">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//24.184.93.50/ladder/?0.9017678998983167">Ladder</a></li>
				<li><a class="button nav-last" href="//24.184.93.50/forums/?0.5130641725145662">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.7780174774497581"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.6563318876750719"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.6958104209223606"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.0024210339094807853"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.5501673512218777"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.8072556568684404"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.8082684933124604"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.8802102660257864"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.16892981739000268"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.3075701616890567"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.10206574184643924"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.5152904798563331"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.46856247550943153"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.7734037870033461"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.3047711830792923"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.19566425398802068"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.10203831179642187"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.07623877914072197"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.6063296285631403"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
