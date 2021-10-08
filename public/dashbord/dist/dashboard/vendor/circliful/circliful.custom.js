$( document ).ready(function() {
	$("#likes").circliful({
		animation: 1,
		animationStep: 5,
		foregroundBorderWidth: 7,
		backgroundBorderWidth: 5,
		percent: 78,
		fontColor: '#000000',
		foregroundColor: '#6e67cd',
		backgroundColor: '#f5f6fa',
		multiPercentage: 1,
		percentages: [10, 20, 30],
	});
	$("#shares").circliful({
		animation: 1,
		animationStep: 5,
		foregroundBorderWidth: 7,
		backgroundBorderWidth: 5,
		percent: 65,
		fontColor: '#000000',
		foregroundColor: '#6e67cd',
		backgroundColor: '#f5f6fa',
		multiPercentage: 1,
		percentages: [10, 20, 30],
	});
	$("#comments").circliful({
		animation: 1,
		animationStep: 5,
		foregroundBorderWidth: 7,
		backgroundBorderWidth: 5,
		percent: 85,
		fontColor: '#000000',
		foregroundColor: '#ff6dbe',
		backgroundColor: '#f5f6fa',
		multiPercentage: 1,
		percentages: [10, 20, 30],
	});

});