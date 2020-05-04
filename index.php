<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
   <meta charset="utf-8">
   <title>Friends</title>

   <link rel="stylesheet" href="styles.css">
</head>

<body>
   <h1><center>
      Friends
   </center></h1>

   <ul>
      <li><a href="https://en.wikipedia.org/wiki/Rachel_Green" class="nawigacja">Rachel</a></li>
      <li><a href="https://en.wikipedia.org/wiki/Chandler_Bing" class="nawigacja">Chandler</a></li>
      <li><a href="" class="nawigacja">Joey</a></li>
      <li><a href="" class="nawigacja">Monica</a></li>
      <li><a href="" class="nawigacja">Ross</a></li>
      <li><a href="" class="nawigacja">Phoebe</a></li>
   </ul>

   <br><br>

   <form action="results.php" method="post">

      <h2>Whose eyes does Ross have?</h2>
      <label>
         <input type="radio" name="Question1" value="Grandmother's">
         Grandmother's
      </label><br>
      <label>
         <input type="radio" name="Question1" value="Father's">
         Father's
      </label><br>
      <label>
         <input type="radio" name="Question1" value="Aunt's">
         Aunt's
      </label><br>
      <label>
         <input type="radio" name="Question1" value="His cousin's">
         His cousin's
      </label><br>


      <h2>What is Flimbees?</h2>
      <label>
         <input type="radio" name="Question2" value="Name of the company where Rachel had her firt fashion-related job">
         Name of the company where Rachel had her firt fashion-related job
      </label><br>
      <label>
         <input type="radio" name="Question2" value="First Emma's word">
         First Emma's word
      </label><br>
      <label>
         <input type="radio" name="Question2" value="Word Phoebe uses when she can't remember the real thing">
         Word Phoebe uses when she can't remember the real thing
      </label><br>
      <label>
         <input type="radio" name="Question2" value="Mike's dog's name">
         Mike's dog's name
      </label><br>

      <br><br>

      <input style="background-color: lightgreen; color: red; height: 70px; width: 200px" type="submit" name="" value="Check!">
   </form>

</body>

</html>
