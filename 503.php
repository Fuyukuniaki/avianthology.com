<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta property="og:title" content="閃火">
	<meta property="og:type" content="fan-site">
	<meta property="og:url" content="https://avianthology.com">
	<meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/assets/images/AVI_OGP.png">
	<meta property="og:description" content="PSYCHO-PASS 煇・ワシリー・イグナトフ 中心全年齢アンソロジー">
	<meta property="og:site_name" content="PP非公式アンソロジー「閃火」">
	<meta property="og:locale" content="JP">
	<meta name="twitter:card" content="summary_large_image">
	<meta name="twitter:site" content="@AVIantholo2024">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-touch-icon.png">
	<meta http-equiv="Cache-Control" content="no-cache">
	<script>
		(function(d) {
			var config = {
				kitId: 'ulr3hbv',
				scriptTimeout: 3000,
				async: true
			},
			h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
		})(document);
	</script>
	<?php wp_head(); ?>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
	new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
	j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
	'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
	})(window,document,'script','dataLayer','GTM-WQ24VNT5');</script>
	<!-- End Google Tag Manager -->
</head>

<body <?php body_class( 'l-body js-body' ); ?>>
	<!-- Google Tag Manager (noscript) -->
	<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WQ24VNT5"
	height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
	<!-- End Google Tag Manager (noscript) -->

	<!-- <figure class="c-video">
		<video id="video" poster="" webkit-playsinline playsinline muted autoplay loop>
			<source src="https://avianthology.com/wp-content/uploads/mixkit-terrifying-lightening-storm-at-night-during-a-cyclone-47272-medium.mp4" type="video/mp4">
		</video>
	</figure> -->

	<header id="pagetop" class="l-header js-header">
		
		<h1 class="c-logo">
			<a href="/#pagetop" class="p-header__link">閃火</a>
		</h1>
		
		<nav class="p-header__nav">
			<dl class="p-hamburger-menu">
				<dt class="p-hamburger-menu__button"><button class="c-icon__hamburger">Tap to open</button></dt>
				<dd class="p-hidden-menu">
					<ul class="c-hidden-menu__lists">
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-top" href="/#pagetop">top</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-about" href="/#about">about</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-info" href="/#info">info</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-flyer" href="/#flyer">flyer</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-project" href="/#project">project</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-concept" href="/#concept">concept</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-contact" href="/#contact">contact</a>
						</li>
					</ul>
					<button class="c-button__close">close</button>
				</dd>
			</dl>
		</nav>
	</header>
	<main style="text-align: center; padding-top: 200px; height:calc(100svh - 100px)">
		<h2 style="font-size: 20svw">404</h2>
		<p>error</p>
	</main>
	<?php get_footer(); ?>