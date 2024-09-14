<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="scriptos.js"></script>
    <link rel="stylesheet" type="text/css" href="styl.css">
</head>
<body>
<div class = "buttonsi" style = "text-align : center;">
<button style="width: 100px; font-size: medium;" class="b" onclick="myFunction7()" name="fname">Insérer</button>
<button style="width: 100px; font-size: medium;" class="c" onclick = "myFunction8()">Mise à jour</button>
<button style="width: 100px; font-size: medium;" class="d" onclick="myFunction9()" name="whatsapp">Supprimer</button>
</div>

<form id="form_1" action="insert.php" method="post" style ="display: none;"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
  <label class = "input_1" for="fname">Prenom:</label><br>
  <input type="text" id="fname" name="fname" required><br>
  <label class = "input_1" for="cost">Cout:</label><br>
  <input type="number" id="cost" name="cost" required><br>
  <label class = "input_1" for="email">Email:</label><br>
  <input type="email" id="mail" name="email" required><br>
  <label class = "input_1" for="country">Pays:</label><br>
  <input type="text" id="country" name="country" required><br>
  <label class = "input_1" for="wts">Whatsapp:</label><br>
  <input type="number" id="wts" name="wts" required><br>
  <label class = "input_1" for="dat">Date:</label><br>
  <input type="date" id="dat" name="dat" required><br>
  <button name = "submit">Sumettre</button>
</form>


<form id = "form_2" method = "post" action = "update.php" style = "display: none; text-align: center; margin-top: 1%;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label class = "input_2">Numéro d'identification: </label><br>
<input type = "number" name = "id_num" style = "font-size: large;" required><br>
<label class = "input_2">Nom de ranger: </label><br>
<input type = "text" name = "column_name" style = "font-size: large;" required><br>
<label class = "input_2">Modification: </label><br>
<input type = "" name = "modification" style = "font-size: large;" required><br>
<button type = "submit">Sumettre</button>
</form>

<form id = "form_3" method = "post" action = "delete.php" style = "display: none; text-align: center; margin-top: 1%;" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<label class = "input_3">Numéro d'identification: </label><br>
<input type = "number" name = "id_num" style = "font-size: large;" required><br>
<button type = "submit">Sumettre</button>
</form>

</body>