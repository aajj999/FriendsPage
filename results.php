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
         $res = 1;
         $all = 3;

         $A1 = htmlspecialchars($_POST['Question1']);
         $A2 = htmlspecialchars($_POST['Question2']);

         if($A1 == "Grandmother's"){
            $res = $res + 1;
         }
         if($A2 == "Word Phoebe uses when she can't remember the real thing"){
            $res = $res + 1;
         }

         echo "$res / $all <br>";

         if($res/$all > 0.8){
            echo "Wow! Congratulations! You know Friends very well";
         }
         if($res/$all < 0.5){
            echo "You definitely need to watch Friends again!";
         }

      ?>

   </p></center>

   </body>
</html>
