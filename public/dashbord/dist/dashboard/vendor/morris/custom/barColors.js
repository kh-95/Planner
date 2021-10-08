// Morris Bar Colors
Morris.Bar({
	element: 'barColors',
	data: [
		{x: 'Mon', Sales: 6},
		{x: 'Tue', Sales: 1},
		{x: 'Wed', Sales: 2},
		{x: 'Thu', Sales: 3},
		{x: 'Fri', Sales: 2},
		{x: 'Sat', Sales: 4},
		{x: 'Sun', Sales: 7},	],
	xkey: 'x',
	ykeys: ['Sales'],
	labels: ['Sales'],
	resize: true,
	gridLineColor: "#e4e6f2",
	hideHover: "auto",
	barColors:['#5953b9', '#ff6bbe','#6e67cd', '#807ada','#9590e2','#ada9ef','#e6e5ff'],
});