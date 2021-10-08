// Denmark
$(function(){
	$('#mapDenmark').vectorMap({
		map: 'dk_mill',
		zoomOnScroll: false,
		regionStyle:{
			initial: {
				fill: '#b8b3fb',
			},
			hover: {
				"fill-opacity": 0.8
			},
			selected: {
				fill: '#A9BD7A'
			},
		},
		backgroundColor: '#ffffff',
	});
});