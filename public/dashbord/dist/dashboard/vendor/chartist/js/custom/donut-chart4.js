var chart = new Chartist.Line('.line-1', {
	labels: [1, 2, 3, 4, 5],
	series: [
		[
			{meta: 'Visitors', value: 500 },
			{meta: 'Visitors', value: 1000},
			{meta: 'Visitors', value: 200},
			{meta: 'Visitors', value: 300},
			{meta: 'Visitors', value: 700},
		]
	]
}, {
	// Remove this configuration to see that chart rendered with cardinal spline interpolation
	// Sometimes, on large jumps in data values, it's better to use simple smoothing.
	lineSmooth: Chartist.Interpolation.simple({
		divisor: 2
	}),
	height: "120px",
	fullWidth: true,
	chartPadding: {
		right: 20,
		left: 10,
		top: 10,
		bottom: 0,
	},
	axisX: {
		offset: 0,
		showGrid: false,
		showLabel: false,
	}, 
	axisY: {
		offset: 0,
		showGrid: false,		
		showLabel: false,
	},
	plugins: [
		Chartist.plugins.tooltip()
	],
	low: 0,
});

chart.on('draw', function(data) {
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
      d: {
        begin: 2000 * data.index,
        dur: 2000,
        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
        to: data.path.clone().stringify(),
        easing: Chartist.Svg.Easing.easeOutQuint
      }
    });
  }
});



var chart = new Chartist.Line('.line-2', {
	labels: [1, 2, 3, 4, 5],
	series: [
		[
			{meta: 'Visitors', value: 500 },
			{meta: 'Visitors', value: 200},
			{meta: 'Visitors', value: 100},
			{meta: 'Visitors', value: 300},
			{meta: 'Visitors', value: 500},
		]
	]
}, {
	// Remove this configuration to see that chart rendered with cardinal spline interpolation
	// Sometimes, on large jumps in data values, it's better to use simple smoothing.
	lineSmooth: Chartist.Interpolation.simple({
		divisor: 2
	}),
	height: "120px",
	fullWidth: true,
	chartPadding: {
		right: 20,
		left: 10,
		top: 10,
		bottom: 0,
	},
	axisX: {
		offset: 0,
		showGrid: false,
		showLabel: false,
	}, 
	axisY: {
		offset: 0,
		showGrid: false,		
		showLabel: false,
	},
	plugins: [
		Chartist.plugins.tooltip()
	],
	low: 0,
});

chart.on('draw', function(data) {
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
      d: {
        begin: 2000 * data.index,
        dur: 2000,
        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
        to: data.path.clone().stringify(),
        easing: Chartist.Svg.Easing.easeOutQuint
      }
    });
  }
});



var chart = new Chartist.Line('.line-3', {
	labels: [1, 2, 3, 4, 5],
	series: [
		[
			{meta: 'Visitors', value: 100 },
			{meta: 'Visitors', value: 200},
			{meta: 'Visitors', value: 100},
			{meta: 'Visitors', value: 300},
			{meta: 'Visitors', value: 200},
		]
	]
}, {
	// Remove this configuration to see that chart rendered with cardinal spline interpolation
	// Sometimes, on large jumps in data values, it's better to use simple smoothing.
	lineSmooth: Chartist.Interpolation.simple({
		divisor: 2
	}),
	height: "120px",
	fullWidth: true,
	chartPadding: {
		right: 20,
		left: 10,
		top: 10,
		bottom: 0,
	},
	axisX: {
		offset: 0,
		showGrid: false,
		showLabel: false,
	}, 
	axisY: {
		offset: 0,
		showGrid: false,		
		showLabel: false,
	},
	plugins: [
		Chartist.plugins.tooltip()
	],
	low: 0,
});

chart.on('draw', function(data) {
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
      d: {
        begin: 2000 * data.index,
        dur: 2000,
        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
        to: data.path.clone().stringify(),
        easing: Chartist.Svg.Easing.easeOutQuint
      }
    });
  }
});




var chart = new Chartist.Line('.line-4', {
	labels: [1, 2, 3, 4, 5],
	series: [
		[
			{meta: 'Visitors', value: 100 },
			{meta: 'Visitors', value: 200},
			{meta: 'Visitors', value: 100},
			{meta: 'Visitors', value: 300},
			{meta: 'Visitors', value: 500},
		]
	]
}, {
	// Remove this configuration to see that chart rendered with cardinal spline interpolation
	// Sometimes, on large jumps in data values, it's better to use simple smoothing.
	lineSmooth: Chartist.Interpolation.simple({
		divisor: 2
	}),
	height: "120px",
	fullWidth: true,
	chartPadding: {
		right: 20,
		left: 10,
		top: 10,
		bottom: 0,
	},
	axisX: {
		offset: 0,
		showGrid: false,
		showLabel: false,
	}, 
	axisY: {
		offset: 0,
		showGrid: false,		
		showLabel: false,
	},
	plugins: [
		Chartist.plugins.tooltip()
	],
	low: 0,
});

chart.on('draw', function(data) {
  if(data.type === 'line' || data.type === 'area') {
    data.element.animate({
      d: {
        begin: 2000 * data.index,
        dur: 2000,
        from: data.path.clone().scale(1, 0).translate(0, data.chartRect.height()).stringify(),
        to: data.path.clone().stringify(),
        easing: Chartist.Svg.Easing.easeOutQuint
      }
    });
  }
});







