<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Result</title>

      <link rel="stylesheet" href="styles.css">
   </head>
   <body>
      <h1><center>
         Your result:

      <?php
         $res = 0;
         $all = 2;

         $A1 = htmlspecialchars($_POST['Question1']);
         $A2 = htmlspecialchars($_POST['Question2']);

         if($A1 == "Grandmother's"){
            $res = $res + 1;
         }
         if($A2 == "Word Phoebe uses when she can't remember the real thing"){
            $res = $res + 1;
         }

         echo "$res / $all";
      ?>

      </center></h1>

   </body>
</html>
