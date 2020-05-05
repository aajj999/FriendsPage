// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
   var a = 3;
   var b = 6;
   var c = 3;

   var data = google.visualization.arrayToDataTable([
      ['Result', 'Percentage'],
      ['<50%', a],
      ['50%-80%', b],
      ['>80%', c],
   ]);

   // Optional; add a title and set the width and height of the chart
   var options = {'title':'Results among other Friends fans', 'width':550, 'height':400};

   // Display the chart inside the <div> element with id="piechart"
   var chart = new google.visualization.PieChart(document.getElementById('piechart'));
   chart.draw(data, options);
}
