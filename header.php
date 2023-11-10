<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
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

	<figure class="c-video">
		<video id="video" poster="" webkit-playsinline playsinline muted autoplay loop>
		<!--
			poster：動画ファイルが利用できない環境で代替表示される画像
			webkit-playsinline：iOS 9までのSafari用インライン再生指定
			playsinline：iOS 10以降のSafari用インライン再生指定
			muted：音声をミュートさせる
			autoplay：動画を自動再生させる
			loop：動画をループさせる
			controls：コントロールバーを表示する
		-->
			<source src="https://avianthology.com/wp-content/uploads/mixkit-terrifying-lightening-storm-at-night-during-a-cyclone-47272-medium.mp4" type="video/mp4">
		</video>
	</figure>



	<header id="top" class="l-header js-header">
		<a class="p-header__link">
			<h1 href="/#top" class="c-logo">閃火</h1>
		</a>
		<nav class="p-header__nav">
			<dl class="p-hamburger-menu">
				<dt class="p-hamburger-menu__button"><button class="c-icon__hamburger">Tap to open</button></dt>
				<dd class="p-hidden-menu">
					<ul class="c-hidden-menu__lists">
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-top" href="#top">top</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a class="c-hidden-menu__link u-about" href="#about">about</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a href="#info" class="c-hidden-menu__link u-info">info</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a href="#flyer" class="c-hidden-menu__link u-flyer">flyer</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a href="#project" class="c-hidden-menu__link u-project">project</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a href="#concept" class="c-hidden-menu__link u-concept">concept</a>
						</li>
						<li class="c-hidden-menu__lists--list">
							<a href="#contact" class="c-hidden-menu__link u-contact">contact</a>
						</li>
					</ul>
					<button class="c-button__close">close</button>
				</dd>
			</dl>
		</nav>
	</header>