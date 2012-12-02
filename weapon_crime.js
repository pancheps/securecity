google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ciudad', 'Arma de fuego', 'Arma blanca', 'Sin arma'],
          ['La Paz',  		1.1,	34.2,	64.7],
          ['Cochabamba',  	5.6,	21.9,	72.5],
          ['Santa Cruz',  	22.2,	17.3,	60.5],
		  ['El Alto',  		0.9,	30.0,	69.1],
        ]);

        var options = {
          title: 'Uso de armas en hechos delictivos por ciudades (%)',
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }