google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Ciudad', 'En el pais', 'En la ciudad', 'En el barrio'],
          ['La Paz',  15,      65,	15],
          ['Cochabamba',  19,      65,	10],
          ['Santa Cruz',  26,       60,	9],
          ['El Alto',  24,      54,	14]
        ]);

        var options = {
          title: 'Probabilidad de ser victima fuera de casa (%)',
          vAxis: {title: 'Ciudad',  titleTextStyle: {color: 'red'}}
        };

        var chart = new google.visualization.BarChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }