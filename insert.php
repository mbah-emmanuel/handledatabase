<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    
</head>
<body>
<?php
include ("connect.php");
$name = $_POST["fname"];
$cost = $_POST["cost"];
$email = $_POST["email"];
$country = $_POST["country"];
$whatsapp = $_POST["wts"];
$dat = $_POST["dat"];
$sql = "INSERT INTO reg (prenom, couts, email, whatsapp, pays, dates)
VALUES ('$name', '$cost', '$email', '$whatsapp', '$country', '$dat')";
?>
<div class = "sucess" style = "text-align:center; font-size:50px; color:blue; margin-top:18%">
    <?php
if ($conn->query($sql) === TRUE) {
    echo "Inséré avec succès...<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?> 
<a href="javascript:history.go(-1)"><button style="width: 300px; font-size: medium; margin: auto; background-color: black; color:white" name="couts">Retourner à la page précédente</button></a>
</div>
</body>
</html>

