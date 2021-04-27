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
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/font-awesome.css?0.6954257915584638" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/panels.css?0.6074677869227643" />
	<link rel="stylesheet" href="//pokemonshowdown.com/theme/main.css?0.0903019004517518" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/battle.css?0.36447654004422114" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/replay.css?0.5082273223876643" />
	<link rel="stylesheet" href="//adventures-showdown.herokuapp.com/style/utilichart.css?0.5469561011127915" />

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
				<li><a class="button nav-first<?php if ($panels->tab === 'home') echo ' cur'; ?>" href="//pokemonshowdown.com/?0.4976430467721753"><img src="//pokemonshowdown.com/images/pokemonshowdownbeta.png?0.0031642856483673487" alt="Pok&eacute;mon Showdown! (beta)" /> Home</a></li>
				<li><a class="button<?php if ($panels->tab === 'pokedex') echo ' cur'; ?>" href="//dex.pokemonshowdown.com/?0.5561901264746978">Pok&eacute;dex</a></li>
				<li><a class="button<?php if ($panels->tab === 'replay') echo ' cur'; ?>" href="/?0.04406529940522197">Replays</a></li>
				<li><a class="button<?php if ($panels->tab === 'ladder') echo ' cur'; ?>" href="//pokemonshowdown.com/ladder/?0.7573155485925507">Ladder</a></li>
				<li><a class="button nav-last" href="//pokemonshowdown.com/forums/?0.872321138989085">Forum</a></li>
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
	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-1.11.0.min.js?0.625492423160414"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/lodash.core.js?0.6834031126992057"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/backbone.js?0.746613227736425"></script>
	<script src="//dex.pokemonshowdown.com/js/panels.js?0.5806961681101017"></script>
<?php
}

function ThemeFooterTemplate() {
	global $panels;
?>
<?php $panels->scripts(); ?>

	<script src="//adventures-showdown.herokuapp.com/js/lib/jquery-cookie.js?0.15792691889414479"></script>
	<script src="//adventures-showdown.herokuapp.com/js/lib/html-sanitizer-minified.js?0.5969451833886918"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-sound.js?0.41290472123506206"></script>
	<script src="//adventures-showdown.herokuapp.com/config/config.js?0.6782769396787665"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battledata.js?0.9250183295697771"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini.js?0.5200354774945446"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex-mini-bw.js?0.8859183244143487"></script>
	<script src="//adventures-showdown.herokuapp.com/data/graphics.js?0.8828892139421523"></script>
	<script src="//adventures-showdown.herokuapp.com/data/pokedex.js?0.2338865078371568"></script>
	<script src="//adventures-showdown.herokuapp.com/data/items.js?0.18708109401288509"></script>
	<script src="//adventures-showdown.herokuapp.com/data/moves.js?0.8005468662811255"></script>
	<script src="//adventures-showdown.herokuapp.com/data/abilities.js?0.5732874208309724"></script>
	<script src="//adventures-showdown.herokuapp.com/data/teambuilder-tables.js?0.42313089332347453"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle-tooltips.js?0.9669284862910086"></script>
	<script src="//adventures-showdown.herokuapp.com/js/battle.js?0.40279090254613226"></script>
	<script src="/js/replay.js?c81925c8"></script>

</body></html>
<?php
}
