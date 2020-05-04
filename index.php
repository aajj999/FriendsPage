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
   <div>
      <div class="moja_klasa"></div>
      <div id="moje_id">
         <ul>
            <li><a href="https://en.wikipedia.org/wiki/Rachel_Green" class="nawigacja">Rachel</a></li>
            <li><a href="https://en.wikipedia.org/wiki/Chandler_Bing" class="nawigacja">Chandler</a></li>
            <li><a href="" class="nawigacja">Joey</a></li>
            <li><a href="" class="nawigacja">Monica</a></li>
            <li><a href="" class="nawigacja">Ross</a></li>
            <li><a href="" class="nawigacja">Phoebe</a></li>
         </ul>
      </div>
   </div>

   <form action="results.php" method="post">

      <h2>Whose eyes does Ross have?</h2>
      <input type="radio" name="Question1" value="Grandmother's">
      <label for="Grandmother's">Grandmother's</label><br>
      <input type="radio" name="Question1" value="Rachel's">
      <label for="Rachel's">Rachel's</label><br>
      <input type="radio" name="Question1" value="Chandler's">
      <label for="Chandler's">Chandler's</label><br>
      <input type="radio" name="Question1" value="Chichi's">
      <label for="Chichi's">Chichi's</label><br>

      <h2>What is Flimbees?</h2>
      <input type="radio" name="Question2" value="Word Phoebe uses when she can't remember the real thing">
      <label for="Word Phoebe uses when she can't remember the real thing">Word Phoebe uses when she can't remember the real thing</label><br>
      <input type="radio" name="Question2" value="Rachel's">
      <label for="Rachel's">Rachel's</label><br>
      <input type="radio" name="Question2" value="Chandler's">
      <label for="Chandler's">Chandler's</label><br>
      <input type="radio" name="Question2" value="Chichi's">
      <label for="Chichi's">Chichi's</label><br>

      <br><br>
      <input style="background-color: lightgreen; color: red; height: 70px; width: 200px" type="submit" name="" value="Check!">
   </form>

   <script src="http://localhost:35729/livereload.js" charset="utf-8"></script>

</body>

</html>
