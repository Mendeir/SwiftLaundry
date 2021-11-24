<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">

      google.charts.load('current', {'packages':['corechart']});

      google.charts.setOnLoadCallback(drawPieChart);

      google.charts.setOnLoadCallback(drawBarChart);

      google.charts.setOnLoadCallback(drawLineChart);
    
      function drawPieChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Services');
        data.addColumn('number', 'done');
        data.addRows([
          ['Cleaning and Drying', 200],
          ['Cleaning, Drying, Folding', 500],
          ['Cleaning, Ironing, Drying, Folding', 650],
        ]);

        var options = {title:'Popular Services',
                       width:860,
                       height:500};

        var chart = new google.visualization.PieChart(document.getElementById('Pie_chart_div'));
        chart.draw(data, options);
      }

      function drawBarChart() {

        var data = new google.visualization.DataTable();
        data.addColumn('string', 'Years');
        data.addColumn('number', 'Sales');
        data.addRows([
          ['2016', 10000],
          ['2017', 25000],
          ['2018', 35000],
          ['2019', 50000],
          ['2020', 70000]  
        ]);

        var options = {title: 'Yearly Sales',
                       width:860,
                       height:500,
                     };

        var chart = new google.visualization.BarChart(document.getElementById('Bar_chart_div'));
        chart.draw(data, options);
      }

      function drawLineChart() {
        var data = google.visualization.arrayToDataTable([
          ['Year', 'Sales', 'Expenses'],
          ['2016',  900,      1000],
          ['2017',  1170,      900],
          ['2018',  660,       1120],
          ['2019',  1030,      540],
          ['2020',  1500,      1000]
        ]);

        var options = {
          title: 'SwiftLaundry Performance',
          curveType: 'function',
          legend: { position: 'bottom' }
        };

        var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <!--Table and divs that hold the pie charts-->
    <table class="columns">
      <tr>
        <td><div id="Pie_chart_div" style="border: 1px solid #ccc"></div></td>
        <td><div id="Bar_chart_div" style="border: 1px solid #ccc"></div></td>
        <div id="curve_chart" style="border: 1px solid #ccc; width: 1731px; height: 500px"></div>
      </tr>
    </table>
  </body>
</html>

