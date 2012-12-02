 google.load("visualization", "1", {packages:["corechart"]});
      google.setOnLoadCallback(drawChart);
      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Autor', '%'],
          ['Desconocido',     53],
          ['No vio al autor',      40],
          ['Conocido',  6],
          ['Pariente, familiar', 1],
        ]);

        var options = {
          title: 'Relacion con la victima'
        };

        var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
        chart.draw(data, options);
      }