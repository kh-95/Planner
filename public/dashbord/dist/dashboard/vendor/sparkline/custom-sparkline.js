$('#overall-sales').sparkline([2,3,4,5,7,5,9,3,3,2,1,1,1], {
	height: '30',
	type: 'bar',
	barSpacing: 3,
	barWidth: 6,
	barColor: "#6e67cd",
	tooltipPrefix: 'time: '
});
$('#overall-sales').sparkline([1,1,2,3,4,9,9,11,11,7,3,3,1], {
	composite: true,
	height: '30',
	fillColor:false,
	lineColor: "#ff6dbe",
	tooltipPrefix: 'Users Online: '
});


$('#overall-income').sparkline([5,7,9,11,13,15,17,19,17,15,13,11,9,7,5], {
	height: '30',
	type: 'bar',
	barSpacing: 3,
	barWidth: 6,
	barColor: "#6e67cd",
	tooltipPrefix: 'Income: '
});