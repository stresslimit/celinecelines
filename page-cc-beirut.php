<?php
$base_url = get_bloginfo('template_url').'/cc-beirut/';
?>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<base href="<?= $base_url ?>" />
	<title>CC BEIRUT</title>
	<link rel="stylesheet" href="style.css" type="text/css" charset="utf-8">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4/jquery.min.js"></script>
	<script>
	$(document).ready(function(){
		$('a').each(function(i,a){ a.target="_blank"; });
	});
	</script>
</head>

<body>

	<div id="container">

		<img src="images/CCB_top.jpg" id="top" />

		<h1 class="beirut"><span>CC Beirut</span></h1>

		<div class="wrap date">
			<h1>OCT 25th 9pm</h1>			
		</div>
		
		<div class="wrap details">

			<h2>KARAJ</h2>

			<h4>lab for experimental arts<br>
				and technology</h4>

			<h5>Address (lebanese style):</h5>

			<p>Mar Mikhayel, Corniche el Nahr street,<br>
			Past Electricite du Liban,<br>
			right after Banque BLC,<br>
			1st building on the right<br>
			Geara bldg (pink building), 1st floor</p>

			<p><a href="http://www.karajbeirut.org">www.karajbeirut.org</a></p>

			<img src="images/CCB_salon_logo.gif">

		</div>

		<div class="wrap speakers">

			<h2>Speakers</h2>

			<h3><a href="http://ayahbdeir.com/">Ayah Bdeir,</a></h3>
			<p><a href="http://www.openhardwaresummit.org/">Open Hardware</a> and <a href="http://www.karajbeirut.org/">Karaj</a></p>

			<h3><a href="http://www.habibhaddad.com/">Habib Haddad,</a></h3>
			<p><a href="http://www.yallastartup.org/">YallaStartup</a></p>

			<h3><a href="http://chris.raysend.com/">Christopher Adams,</a></h3>
			<p><a href="http://freesouls.cc/">Freesouls.cc</a> and <a href="http://sharism.org/">Sharism.org</a></p>

		</div>

		<div class="wrap music">

			<h2>Art + Music + Videos</h2>

			<h3><a href="http://mayazankoul.com/">Maya Zankoul</a></h3>

			<h3><a href="http://celinecelines.com/">celinecelines</a></h3>

			<h3><a href="http://rejon.org/">Jon Phillips</a></h3>

			<h3><a href="http://www.barrythrew.com/">Barry Threw</a></h3>

		</div>
		
		<img src="images/CCB_bottom.jpg">

</body>
</html>
