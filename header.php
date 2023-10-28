<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">

<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="x-ua-compatible" content="IE=edge">
	<meta name="description" content="<?php bloginfo( 'description' ); ?>">
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
</head>

<body <?php body_class( 'l-body js-body' ); ?>>
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
							<dl class="c-hidden-menu__lists--list">
								<dt class="c-hidden-menu__lists--list">
									<a class="c-hidden-menu__link u-about" href="#about">about</a>
								</dt>
								<dd class="c-hidden-menu__lists--list">
									About Top - トップ
								</dd>
								<dd class="c-hidden-menu__lists--list">
									Author List - 寄稿者/サンプル
								</dd>
								<dd class="c-hidden-menu__lists--list">
									Staff - スタッフ
								</dd>
							</dl>
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