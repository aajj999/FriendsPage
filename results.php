<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Result</title>
   </head>
   <body>
      Ania

      <?php
         $A1 = htmlspecialchars($_POST['Question1']);
         $A2 = htmlspecialchars($_POST['Question2']);
         if($A1 == "Grandmother's" && $A2 == "Word Phoebe uses when she can't remember the real thing"){
            echo "Well done";
         } else {
            echo "Wrong!";
         }

      ?>

      Ania
   </body>
</html>
