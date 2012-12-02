google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Hour', 'Robo', 'Robo de vehiculo', 'Violencia', 'Autopartes', 'Robo en vivienda'],
          ['1 a.m. - 7 a.m.',  8,	10,	29,	15,	6],
          ['7 a.m. - 1 p.m.',  20,	19,	22,	22,	28],
          ['1 p.m. - 7 p.m.',  30,	28,	28,	32,	39],
          ['7 p.m. - 1 a.m.',  42,	41,	16,	30,	25]
        ]);

        var options = {
          title: 'Hora de ocurrencia de hechos delictivos y violencia (%)',
        };

        var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }