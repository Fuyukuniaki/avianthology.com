	const element = React.createElement('p', { id: 'the-text', className: 'text' }, ['Hello world']);

// 描画元の親要素を取得する
	const root = document.getElementById('root');

// React 要素を描画する
	ReactDOM.render(element, root);