( function( blocks, element ) {
	const el = element.createElement;
	//registerBlockType でブロックを登録
	blocks.registerBlockType( 
	  //ブロックの名前 （名前空間/ブロック名）
	  'my-blocks/news', 
	  //ブロックのプロパティ（動作を定義するオブジェクト）
	  {
		title: 'AVI News',
		icon: 'editor-ol',
		category: 'layout',
		//エディター内でのブロックの構造を記述する関数
		edit: function() {
		return el(
				'p',
				{ class: 'blockStyle' },
				'Hello World, sample 01 (edit/エディタ用).'
			);
		},
		//ブロックがフロントエンドでどのように表示されるかを記述する関数
		save: function() {
			return el(
				'p',
				{ class: 'blockStyle' },
				'Hello World, sample 01 (save/フロントエンド用).'
			);
		},
	  }
	);
  }(
	window.wp.blocks,
	window.wp.element
  ) );
  