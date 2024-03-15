<?php get_header(); ?>
<main class="l-main" id="pagetop">
	<section class="l-top-part">
		<article class="p-key-visual">
			<h2 class="c-keyvisual__logo">
				閃火
			</h2>
			<p class="c-keyvisual__title">
				PSYCHO-PASS<br>
				煇・ワシリー・イグナトフ中心<br>
				非公式全年齢アンソロジー
			</p>
		</article>
		<p class="c-keyvisual__data">
			2024年3月17日<br>
			HARU COMIC CITY 32
		</p>
		<p class="c-keyvisual__text">
			当サイトは2024年3月17日<br>
			HARU COMIC CITY 32にて発行予定の<br>
			煇・ワシリー・イグナトフ中心<br>
			非公式全年齢アンソロジー『閃火』の<br>
			告知・情報サイトです。<br>
			<br>
			非公式ファン企画であり、<br>
			版権元・全ての実在・非実在の団体とは<br>
			関係がありません。
		</p>
	</section>
	<article class="p-news">
		<h2 class="c-news__title">news</h2>
		<dl class="p-news-contents__wrap">
			<?php
				$args = array(
				'posts_per_page' => -1,
				'category' => 2,
				);
				$posts = get_posts( $args );
				foreach ( $posts as $post ):
				setup_postdata( $post );
			?>
			<?php
				the_date('Y年m月d日', '<dd class="c-news-contents__date">', '</dd>'); ?>
				<dt class="c-news-contents__text"><?php the_title(); ?></dt>
			<?php the_content(); ?>
			<?php
				endforeach;
				wp_reset_postdata();
			?>
		</dl>
	</article>
	<article class="p-x-twitter">
		<h2 class="c-x-twitter__title">X（twitter）</h2>
		<section class="c-x-twitter__data">
			<a class="twitter-timeline" href="https://twitter.com/AVIantholo2024?ref_src=twsrc%5Etfw" data-chrome="noborders noscrollbar">Tweets by AVIantholo2024</a>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
		</section>
	</article>
	<section class="l-about-part" id="about">
		<figure class="c-bookcover__image--wrap">
			<img class="c-bookcover__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-about-cover.png" alt="書影" decoding="async">
		</figure>
		<dl class="p-lists-about">
			<dt class="c-lists-about__category">タイトル</dt>
			<dd class="c-lists-about__content">『閃火』</dd>
			<dt class="c-lists-about__category">内容</dt>
			<dd class="c-lists-about__content">
				「PSYCHO-PASS」シリーズ<br>
				煇・ワシリー・イグナトフ中心<br>
				非公式全年齢アンソロジー<br>
				<br>
				イラスト・漫画・小説・写真など<br>
				主催含む35名の創作者が<br>
				それぞれの形で煇への想いを表現する<br>
				アンソロジーです。<br>
				<br>
				<span class="c-text__small">※生存if、過去ifなどを含みます。</span>
			</dd>
			<dt class="c-lists-about__category">発行日・イベント</dt>
			<dd class="c-lists-about__content">2024年3月17日 HARU COMIC CITY 32 /東京</dd>
			<dt class="c-lists-about__category">仕様</dt>
			<dd class="c-lists-about__content">A5サイズ/全220ページうちカラー16ページ<br>表紙：ホログラムペーパー/マットPP/エンボスニス<br>/銀箔押し</dd>
			<dt class="c-lists-about__category">ノベルティ</dt>
			<dd class="c-lists-about__content">捜査資料風ブロマイド</dd>
			<dd class="c-lists-about__content">
				<figure class="c-lists-about__image--wrap">
					<img class="c-lists-about__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/novelty.jpeg" width=600 height=600>
				</figure>
			</dd>
			<dt class="c-lists-about__category">頒布価格</dt>
			<dd class="c-lists-about__content">会場頒布価格2000円<br>ステッカーセット(本+ノベルティ+ステッカー2枚)2300円</dd>
			<dd class="c-lists-about__content">
				<figure class="c-lists-about__image--wrap">
					<img class="c-lists-about__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/stickerset_event.png" width=600 height=600>
				</figure>
			</dd>
		</dl>
		<article class="p-author-list" id="author-list">
			<h2 class="c-author-list__title">author list</h2>
			<p class="c-author-list__caption">クリックして&nbsp;寄稿者一覧・サンプルを開く</p>
			<?php get_template_part('archive-creators') ?>
		</article>
		<article class="p-staff-list">
			<h2 class="c-staff-list__title">staff</h2>
			<dl class="p-staff-list__lists">
				<dt class="c-staff-list__lists--title">
					主催・デザイン
				</dt>
				<dd class="c-staff-list__lists--list">
					<ul class="c-staff-list__name--wrap">
						<li class="c-staff-list__name">はごろ(<a class="c-link" target="_blank" rel="noopener noreferrer" href="https://twitter.com/856_zatta">@856_zatta</a>)</li>
					</ul>
				</dd>
				<dt class="c-staff-list__lists--title">
					副主催
				</dt>
				<dd class="c-staff-list__lists--list">
					<ul class="c-staff-list__name--wrap">
						<li class="c-staff-list__name">オリコ(<a class="c-link" target="_blank" rel="noopener noreferrer" href="https://twitter.com/orico714">@orico714</a>)</li>
						<li class="c-staff-list__name">纏い(<a class="c-link" target="_blank" rel="noopener noreferrer" href="https://twitter.com/matoi_hgmt">@matoi_hgmt</a>)</li>
					</ul>
				</dd>
				<dt class="c-staff-list__lists--title">
					マークアップ
				</dt>
				<dd class="c-staff-list__lists--list">
					<ul class="c-staff-list__name--wrap">
						<li class="c-staff-list__name">藍石要(<a class="c-link" target="_blank" rel="noopener noreferrer" href="https://twitter.com/KanameAiishi_">@KanameAiishi_</a>)</li>
					</ul>
				</dd>
			</dl>
		</article>
	</section>
	<section class="p-information" id="info">
		<dl class="p-information__lists">
			<dt class="c-information__lists--title">
				頒布イベント情報
			</dt>
			<dd class="c-information__lists--list">
				<ul class="c-information__name--wrap">
					<li class="c-information__text">
						2024/3/17 HARU COMIC CITY 32<br>
						<span class="c-text__unbold">東京ビッグサイト / 東4ホールさ03b</span>
					</li>
					<li class="c-information__text">
						<figure class="c-information__image">
							<img class="c-information__image--space" src="<?php echo get_template_directory_uri(); ?>/assets/images/img-info-space.png" alt="東京ビッグサイト / 東4ホールさ03b" decoding="async">
						</figure>
					</li>
				</ul>
			</dd>
			<dt class="c-information__lists--title">
				通信頒布情報
			</dt>
			<dd class="c-information__lists--list">
				<ul class="c-information__name--wrap">
					<li class="c-information__text">
						<span class="c-text__unbold">coming soon</span>
					</li>
				</ul>
			</dd>
		</dl>
	</section>
	<section class="l-flyer-part" id="flyer">
		<figure class="c-flyer__image--wrap">
			<img class="c-flyer__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img_flyer2311.png" alt="フライヤー" decoding="async">
		</figure>
		<p class="c-flyer__explain">
		フライヤーの配布にご協力して頂ける方を<br>
		募集しております。<br>
		同人イベントに出展される方だけでなく、<br>
		通信販売における頒布等をされる際に<br>
		お品物と一緒に同封していただける方なども<br>
		大歓迎です。<br>
		<br>
		ご協力頂ける方は下記Googleフォームより<br>
		ご連絡をいただけますと幸いです。<br>
		ご検討のほど何卒よろしくお願いいたします。
		</p>
		<p class="c-flyer__explain-ends">
		募集受付を終了いたしました。<br>
		たくさんのご協力誠にありがとうございました！<br>
		フライヤー残部はHARU COMIC CITY32にて<br>
		先着順にて配布いたします。
		</p>
		<!-- <a class="c-button__flyer--wrapper" target="_blank" rel="noopener noreferrer" href="https://docs.google.com/forms/d/e/1FAIpQLSfsdqNCo0kN2P8JtywyHgQNeF0b12a9udvS99Bk7XRPBgld-A/viewform?usp=sf_link">
			<p class="c-button__flyer">フライヤー配布ご協力フォーム</p>
		</a> -->
	</section>
	<section class="l-project" id="project">
		<ul class="p-project">
			<li class="c-project__headline">
				運営公式X(Twitter)アカウントにて、<br>
				どなたでもご参加頂けるハッシュタグ企画<br>
				「#こんな煇イグナトフを見てみたい」<br>
				を実施中！<br>
				<p class="c-text__unbold">投稿企画にご参加いただいた上、頒布イベント当日スペースに来てくださった方には<br>
				先着順でノベルティをプレゼント！</p>
				<figure class="c-project__headline--wrap">
					<img class="c-project__headline--image" src="<?php echo get_template_directory_uri(); ?>/assets/images/AVI_CP_0315.png" alt="sample">
				</figure>
				<p class="c-text__unbold">
				参加方法は下記をご覧ください。</p>
			</li>
			<li class="c-project__caption c-text__unbold">
				※投稿数に関わらずお一人様一点のみのお渡しとなります。<br>
				数に限りがございます。<br>
				また、イベントでの頒布が諸般の事情にて困難になった際は他のイベントでの配布に変更、もしくは配布を中止する可能性がございます。あらかじめご了承ください。
			</li>
		</ul>
		<dl class="p-project__detail">
			<dt class="c-project__detail--title" id="project__howto">参加方法・注意事項はこちらをチェック！</dt>
			<dd class="c-project__detail--text">
				<dl class="c-project-detail__text--wrap">
					<dt class="c-project-detail__text--title">参加方法</dt>
					<dd class="c-project-detail__text--text">
						<ol class="c-project-detail-text__wrap c-lists__number">
							<li class="c-project-detail-text__title">①公式アカウントの投稿をチェック！
								<p class="c-project-detail-text__text c-text__unbold">不定期的に公式アカウント(<a href="https://twitter.com/AVIantholo2024" target="_blank" rel="noopener noreferrer">@AVIantholo2024</a>)から発表されるお題と投稿期間をチェック！</p>
							</li>
							<li class="c-project-detail-text__title">②投稿期間内にハッシュタグ<br>「#こんな煇イグナトフを見てみたい」<br>をつけてX(Twitter)に投稿！
								<p class="c-project-detail-text__text c-text__unbold">
									投稿期間内にお題に沿った文章、イラスト、<wbr>写真などにハッシュタグ<wbr>「#こんな煇イグナトフを見てみたい」<wbr>を付けてX(Twitter)にてご投稿ください。<br>
									「〇〇な煇が見てみたい……」<br>
									「煇には〇〇が似合いそう！」<br>
									といった妄想ポスト（ツイート）も大歓迎！<br>
									是非お気軽にご参加ください。<br>
									素敵なご投稿はRPにてご紹介させて頂きます。
								</p>
							</li>
							<li class="c-project-detail-text__title">③アンソロジー頒布イベント当日<br>頒布スペースにてノベルティをゲット！
								<p class="c-project-detail-text__text c-text__unbold">
									頒布イベント当日、頒布スペースにて<br>
									投稿したポスト画面をご提示ください。<br>
									ノベルティをお渡しいたします！
								</p>
							</li>
						</ol>
						<p class="c-text__caption c-text__unbold">
							※投稿数に関わらずお一人様一点のみのお渡しとなります。<br>
							数に限りがございます。<br>
							<br>
							また、イベントでの頒布が諸般の事情にて困難になった際は<wbr>
							他のイベントでの配布に変更、<wbr>
							もしくは配布を中止する可能性がございます。<br>
							あらかじめご了承ください。</p>
					</dd>
					<dt class="c-project-detail__text--title">注意事項</dt>
					<dd class="c-project-detail__text--text">
						<ul class="c-project-detail-text__wrap c-lists__bull">
							<li class="c-project-detail-text__title">・公序良俗に反する内容を含むご投稿や、<br>特定のキャラクター・作品・人物・団体等を<br>批判する意図でのご投稿はご遠慮ください。
								<p class="c-project-detail-text__text c-text__unbold">なるべく多くの方に楽しんでいただきたいため、<br>R-18・R-18Gに該当するご投稿は非推奨ですが、<br>どうしても投稿したい場合は必ずセンシティブ設定や<br>ふせったーなどをご利用の上ご投稿ください。</p>
							</li>
							<li class="c-project-detail-text__title">・運営アカウントがRPする可能性がございます。<br>ご了承の上ご参加ください。
								<p class="c-project-detail-text__text c-text__unbold">ご投稿は運営アカウントがRP（RT）にて<br>ご紹介する可能性がございます。<br>ご了承いただけますと幸いです。<br>選定は優劣を判断するものではございません。<br>また、選定の基準につきましては<br>お問い合わせいただきましても<br>お答え致しかねます。<br>予めご了承ください。</p>
							</li>
							<li class="c-project-detail-text__title">・ネタ被りは気にしすぎず、<br>同じ趣味である喜びを分かち合いましょう
								<p class="c-project-detail-text__text c-text__unbold">情報量が少ないキャラクターのため、<br>投稿するネタが被る可能性は<br>十分に考えられます。<br>もし誰かとネタが被っても落ち込まず/怒らず<br>ポジティブに楽しんでいただければ幸いです。</p>
							</li>
						</ul>
					</dd>
				</dl>
				<button href="#project__howto" class="c-button__modal-close">閉じる</button>
			</dd>
			<dd class="c-project__detail--posts">
				<a class="c-button__project--wrapper" target="_blank" rel="noopener noreferrer" href="https://bit.ly/AVIantholoHashTag">
					<p class="c-button__project">#こんな煇イグナトフが見てみたい<br>投稿作品を見る</p>
				</a>
			</dd>
		</dl>
	</section>
	<section class="l-concept-part" id="concept">
		<dl class="c-concept__lists">
			<dd class="c-concept__lists--picture">
				<picture class="c-concept__wrap">
					<img class="c-concept__image" src="<?php echo get_template_directory_uri(); ?>/assets/images/sub-visual.png" width="620" height="200" decoding="async">
				</picture>
			</dd>
			<dt class="c-concept__lists--category">
				閃火&nbsp;タイトルコンセプト
			</dt>
			<dd class="c-concept__lists--text">
				銃火器を握り続けなければならなかった<br>
				人生の在り方、<br>
				最期のシーンで打ち上がる花火、<br>
				そして「煇」という名前から<br>
				「火」のニュアンスを取り入れつつ、<br>
				彼が短い生涯の中で視聴者に見せてくれた、<br>
				儚くも鮮烈な輝きをイメージしました。
			</dd>
		</dl>
	</section>
	<section class="l-contact" id="contact">
		<dl class="c-contact__lists">
			<dd class="c-contact__lists--explain">
				当企画はファンによる非公式企画です。<br>
				版権元、実在の組織・団体とは一切関係ありません。<br>
				<br>
				アンソロジーに関するお問い合わせは企画アカウントのDMもしくはメールアドレスまでお願いいたします。
			</dd>
			<dt class="c-contact__lists--category">
				運営公式
			</dt>
			<dd class="c-contact__lists--list">
				<ul class="c-icon__list">
					<li class="c-icon"><a href="mailto:avianthology2024@gmail.com" class="c-icon__mail c-link">mail</i></a></li>
					<li class="c-icon"><a href="https://twitter.com/AVIantholo2024" target="_blank" rel="noopener noreferrer" class="c-icon__sns c-link">X</a></li>
				</ul>
			</dd>
			<dt class="c-contact__lists--category">
				主催（はごろ）
			</dt>
			<dd class="c-contact__lists--list">
				<ul class="c-icon__list">
					<li class="c-icon"><a href="mailto:info@avianthology.com" class="c-icon__mail c-link">mail</a></li>
					<li class="c-icon"><a href="https://twitter.com/856_zatta" target="_blank" rel="noopener noreferrer" class="c-icon__sns c-link">X</a></li>
				</ul>
			</dd>
		</dl>
	</section>
</main>
	<?php get_footer(); ?>