<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Result</title>

      <link rel="stylesheet" href="styles.css">
   </head>
   <body>
      <center><p class="results">
         Your result:

      <?php

         include 'db_connect.php';
         $conn = OpenCon();

         $res = 1;
         $all = 4;

         $A1 = htmlspecialchars($_POST['Question1']);
         $A2 = htmlspecialchars($_POST['Question2']);
         $A4 = htmlspecialchars($_POST['Question4']);

         if($A1 == "Grandmother's"){
            $res = $res + 1;
         }
         if($A2 == "Word Phoebe uses when she can't remember the real thing"){
            $res = $res + 1;
         }
         if($A4 == "7"){
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
            $sql = "SELECT * FROM results ORDER BY NR";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
               while($row = $result->fetch_assoc()) {
                  echo "Result: " . $row["res"]. " - " . $row["how_many"]. " <br>";
               }
            } else {
               echo "0 results";
            }
         } else {
            echo "Error updating record: " . $conn->error;
         }

         CloseCon($conn);
      ?>

   <br>
   <div id="piechart"></div>
   </p></center>

   <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

   <script type="text/javascript" src="results.js"></script>


   </body>
</html>
