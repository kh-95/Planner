// Europe
$(function(){
	$('#mapEurope').vectorMap({
		map: 'europe_mill',
		zoomOnScroll: false,
		series: {
			regions: [{
				values: gdpData,
				scale: ['#b8b3fb', '#6e67cd'],
				normalizeFunction: 'polynomial'
			}]
		},
		backgroundColor: '#ffffff',
	});
});