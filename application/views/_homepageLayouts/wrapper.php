<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="<?= isset($metaData->ogDescription) ? $metaData->ogDescription : "Koperasi Simpan Pinjam di Makassar"?>">
	<meta name="keyword" content="<?= isset($metaData->ogKeyword) ? $metaData->ogKeyword : "koperasi, simpan pinjam, koperasi di makassar, lentera, lentera digital"?>">
	<meta name="author" content="Lentera Digital Indonesia">

	<meta property="og:url" content="<?= isset($metaData->ogUrl) ? $metaData->ogUrl : "https://www.lenteradigitalindonesia.com"?>" />
	<meta property="og:title" content="<?= isset($metaData->ogTitle) ? $metaData->ogTitle : "Lentera Digital Indonesia"?>" />
	<meta property="og:description" content="<?= isset($metaData->ogDescription) ? $metaData->ogDescription : "Koperasi Simpan Pinjam di Makassar"?>" />
	<meta property="og:image" content="<?= isset($metaData->ogImage) ? base_url('/assets/resources/articles/'.$metaData->ogImage) : base_url('/assets/images/resources/logo-1.png')?>" />

	<!--favicon-->
	<link rel="apple-touch-icon" sizes="57x57" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?=base_url('assets/')?>resources/images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?=base_url('assets/')?>resources/images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?=base_url('assets/')?>resources/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?=base_url('assets/')?>resources/images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?=base_url('assets/')?>resources/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?=base_url('assets/')?>resources/images/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?=base_url('assets/')?>resources/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Title -->
	<title><?= $title ?> | Domba Token</title>

	<!--favicon-img-->
	<!--main css file should not be removed -->
	<link rel="stylesheet" href="<?= base_url('assets/') ?>css/index.css">
	<!--main css file-->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.2.6/gsap.min.js"></script>

</head>
<body>
<!--contains all the div-->
<div id="all">
	<!--mouse  follower-->
	<div class="cursor"></div>
	<!--mouse  follower-->
	<!--loader-->
	<div id="loader">
		<span class="color">Domba</span>Token
	</div>
	<!--loader-end-->
	<!--link-screen-->
	<div id="breaker">
	</div>
	<div id="breaker-two">
	</div>
	<!--link-screen-->
	<!--Main-Section-->
	<!--Navigator-fullscreen-->
	<div id="navigation-content">
		<div class="logo">
			<img src="<?= base_url('assets/') ?>resources/images/homepage/willy wonka logo.png" alt="logo">
		</div>
		<div class="navigation-close">
			<span class="close-first"></span>
			<span class="close-second"></span>
		</div>
		<div class="navigation-links">
			<a href="#" data-text="HOME" id="home-link" >HOME</a>
			<a href="#" data-text="ABOUT" id="about-link" >ABOUT</a>
<!--			<a href="#" data-text="BLOG" id="blog-link" >BLOG</a>-->
<!--			<a href="#" data-text="PORTFOLIO" id="portfolio-link" >PORTFOLIO</a>-->
			<a href="#" data-text="CONTACT" id="contact-link" >CONTACT</a>
		</div>
	</div>
	<!--Navigator-Fullscreen END-->
	<!--Home Page-->
	<!--Menubar-->
	<div id="navigation-bar">
		<img src="<?= base_url('assets/') ?>resources/images/homepage/willy wonka logo.png" alt="logo">
		<div class="menubar">
			<span class="first-span"></span>
			<span class="second-span"></span>
			<span class="third-span"></span>
		</div>
	</div>
	<!--Menubar End-->
	<!--Header-->

	<?php $this->load->view($content); ?>

</div>
<!--all the divisions-->
<script src="<?= base_url('assets/') ?>js/jquery.min.js"></script>
<script src="<?= base_url('assets/') ?>js/particles.js"></script>
<script src="<?= base_url('assets/') ?>js/particles.min.js"></script>
<script src="<?= base_url('assets/') ?>js/index.js"></script>
<!--particles script-->
<script>
	particlesJS("particles", {"particles":{"number":{"value":40,"density":{"enable":true,"value_area":800}},"color":{"value":"#ffffff"},"shape":{"type":"circle","stroke":{"width":0,"color":"#000000"},"polygon":{"nb_sides":5},"image":{"src":"img/github.svg","width":100,"height":100}},"opacity":{"value":0.5,"random":false,"anim":{"enable":false,"speed":1,"opacity_min":0.1,"sync":false}},"size":{"value":3,"random":true,"anim":{"enable":false,"speed":40,"size_min":0.1,"sync":false}},"line_linked":{"enable":true,"distance":150,"color":"#ffffff","opacity":0.4,"width":1},"move":{"enable":true,"speed":6,"direction":"none","random":false,"straight":false,"out_mode":"out","bounce":false,"attract":{"enable":false,"rotateX":600,"rotateY":1200}}},"interactivity":{"detect_on":"canvas","events":{"onhover":{"enable":true,"mode":"repulse"},"onclick":{"enable":true,"mode":"push"},"resize":true},"modes":{"grab":{"distance":400,"line_linked":{"opacity":1}},"bubble":{"distance":400,"size":40,"duration":2,"opacity":8,"speed":3},"repulse":{"distance":200,"duration":0.4},"push":{"particles_nb":4},"remove":{"particles_nb":2}}},"retina_detect":true});
</script>

</body>
</html>
