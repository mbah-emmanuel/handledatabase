<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="stylosi_4.css">
    <script src="scriptos.js"></script>
    <a href="index"><button style="width: 300px; font-size: medium; margin: auto; background-color: black; color:white" name="couts">Retourner à la page précédente</button></a>
    <?php include("buttons.php")?>
</head>
<body>
<?php
 include ("connect.php");
  $input = $_POST["date"];
  $sql = "SELECT id, couts, email, whatsapp, prenom, pays, dates  FROM reg WHERE dates = '$input'";
  $result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  ?>
  <div>
    <?php
    echo "id: "."<b>".$row["id"]. "</b>" . "   -Couts: " . "<b>". $row["couts"]. "</b>". "   -email: " . "<b>". $row["email"]. "</b>". "   -whatsapp: " . "<b>". $row["whatsapp"]. "</b>". 
    "   -prenom: " . "<b>". $row["prenom"]. "</b>". "   -pay: " . "<b>". $row["pays"]. "</b>". "   -  date: " . "<b>". $row["dates"]. "<br>";
  ?>
  </div>
<?php
}
} else {
  echo "0 results";
}
echo htmlspecialchars($_SERVER["PHP_SELF"]);
$conn->close();
?>
</body>