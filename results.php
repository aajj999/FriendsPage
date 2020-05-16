<!DOCTYPE html>
<?php
include 'db_connect.php';
$conn = OpenCon();

$sql = "SELECT how_many FROM results  WHERE res = '<50%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
      $a = strval($row["how_many"]);
   }
}
$sql = "SELECT how_many FROM results  WHERE res = '50%-80%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
      $b = strval($row["how_many"]);
   }
}
$sql = "SELECT how_many FROM results  WHERE res = '>80%'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()) {
      $c = strval($row["how_many"]);
   }
}

setcookie("<50%", $a);
setcookie("50%-80%", $b);
setcookie(">80%", $c);

CloseCon($conn);
 ?>

<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Result</title>

      <link rel="stylesheet" href="styles.css">

      <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

      <script>
      google.charts.load('current', {'packages':['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
         var a = <?php echo $_COOKIE["<50%"]; ?>;
         var b = <?php echo $_COOKIE["50%-80%"]; ?>;
         var c = <?php echo $_COOKIE[">80%"]; ?>;
         // alert(a);
         // alert(b);
         // alert(c);

         var data = google.visualization.arrayToDataTable([
            ['Result', 'Percentage'],
            ['<50%', a],
            ['50%-80%', b],
            ['>80%', c],
         ]);

         var options = {'title':'Results among other Friends fans', 'width':550, 'height':400};
         var chart = new google.visualization.PieChart(document.getElementById('piechart'));
         chart.draw(data, options);
      }</script>

   </head>

   <body>
      <center><p class="results">
         Your result:

      <?php
         $conn = OpenCon();

         $res = 0;
         $all = 7;

         $A1 = htmlspecialchars($_POST['Question1']);
         $A2 = htmlspecialchars($_POST['Question2']);
         $A3 = htmlspecialchars($_POST['Question3']);
         $A4 = htmlspecialchars($_POST['Question4']);
         $A5 = htmlspecialchars($_POST['Question5']);
         $A6 = htmlspecialchars($_POST['Question6']);
         $A7 = htmlspecialchars($_POST['Question7']);

         if($A1 == "Grandmother's"){
            $res = $res + 1;
         }
         if($A2 == "Word Phoebe uses when she can't remember the real thing"){
            $res = $res + 1;
         }
         if($A3 == "2"){
            $res = $res + 1;
         }
         if($A4 == "7"){
            $res = $res + 1;
         }
         if($A5 == "Chandler"){
            $res = $res + 1;
         }
         if($A6 == "Judaism"){
            $res = $res + 1;
         }
         if($A7 == "Rachel"){
            $res = $res + 1;
         }

         echo "$res / $all <br>";

         if($res/$all > 0.8){
            echo "Wow! Congratulations! You know Friends very well <br>";
            $sql = "UPDATE results SET how_many=how_many+1 WHERE res='>80%'";
         }elseif($res/$all < 0.5){
            echo "You definitely need to watch Friends again! <br>";
            $sql = "UPDATE results SET how_many=how_many+1 WHERE res='<50%'";
         }else{
            $sql = "UPDATE results SET how_many=how_many+1 WHERE res='50%-80%'";
         }

         echo"<br>";
         if ($conn->query($sql) === TRUE) {
            $sql = "SELECT * FROM results  ORDER BY NR";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                  echo "Result: " . $row["res"]. " - " . $row["how_many"]. " <br>";
               }
            } else {
               echo "0 results";
            }
         } else {
            echo "Error updating  record: " . $conn->error;
         }

         CloseCon($conn);
      ?>

   <br>
   <div id="piechart"></div>
   </p></center>



   </body>
</html>
