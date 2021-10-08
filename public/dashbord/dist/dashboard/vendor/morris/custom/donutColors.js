// Morris Donut
Morris.Donut({
	element: 'donutColors',
	data: [
		{value: 70, label: 'foo'},
		{value: 15, label: 'bar'},
		{value: 10, label: 'baz'},
		{value: 5, label: 'A really really long label'}
	],
	backgroundColor: '#ffffff',
	labelColor: '#666666',
	colors:['#5953b9', '#ff6bbe','#6e67cd', '#807ada','#9590e2','#ada9ef','#e6e5ff'],
	resize: true,
	hideHover: "auto",
	gridLineColor: "#e4e6f2",
	formatter: function (x) { return x + "%"}
});