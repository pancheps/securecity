google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Lugar', 'Aumento', 'Se mantuvo', 'Disminuyo'],
          ['En el pais',  89.5,      9,	1.5],
          ['En la ciudad',  90.3,      8.9,	0.9],
          ['En el barrio',  66.9,       25.9,	7.2],
        ]);

        var options = {
          title: 'Percepcion del incremento en la inseguridad durante los ultimos doce meses (%)',
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }