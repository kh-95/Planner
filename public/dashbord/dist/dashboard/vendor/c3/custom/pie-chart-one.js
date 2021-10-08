var chart12 = c3.generate({
	bindto: '#pieChart1',
	data: {
		// iris data from R
		columns: [
			['Mon', 219],
			['Tue', 167],
			['Wed', 115],
			['Thu', 87],
			['Fri', 60],
			['Sat', 30],
		],
		type : 'pie',
		colors: {
			Mon: '#5953b9',
			Tue: '#6e67cd',
			Wed: '#807ada',
			Thu: '#9590e2',
			Fri: '#ada9ef',
			Sat: '#e6e5ff',
		},
		onclick: function (d, i) { console.log("onclick", d, i); },
		onmouseover: function (d, i) { console.log("onmouseover", d, i); },
		onmouseout: function (d, i) { console.log("onmouseout", d, i); }
	},
});