$(function () {

	var data, chartOptions;
	
	data = [
		{ label: "HTML", data: Math.floor (Math.random() * 100 + 190) }, 
		{ label: "CSS", data: Math.floor (Math.random() * 100 + 220) }, 
		{ label: "PHP", data: Math.floor (Math.random() * 100 + 370) }, 
		{ label: "jQuery", data: Math.floor (Math.random() * 100 + 120) },
		{ label: "RUBY", data: Math.floor (Math.random() * 100 + 430) }
	];

	chartOptions = {		
		series: {
			pie: {
				show: true,  
				innerRadius: 0, 
				stroke: {
					width: 0
				}
			}
		},
		grid:{
			hoverable: true,
			clickable: false,
			borderWidth: 0,
			tickColor: '#f5f6fa',
			borderColor: '#f5f6fa',
		},
		legend: {
			position: 'nw'
		},
		shadowSize: 0,
		tooltip: true,
		
		tooltipOpts: {
			content: '%s: %y'
		},
		colors: ['#5953b9', '#ff6bbe','#6e67cd', '#807ada','#9590e2','#ada9ef','#e6e5ff'],
	};

	var holder = $('#pie-chart');

	if (holder.length) {
		$.plot(holder, data, chartOptions );
	}
});