<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
    <script src="scriptos.js"></script>
    <a href="index"><button style="width: 300px; font-size: medium; margin: auto; background-color: black; color:white" name="couts">Retourner à la page précédente</button></a>
    <?php include("buttons.php")?>
</head>
</head>
<body>
<?php
include ("connect.php");
$sql = "SELECT  SUM(couts) from reg";
$result = $conn->query($sql);
//display data on web page
while($row = mysqli_fetch_array($result)){
    echo " <h2>Revenu total:</h2> ". "<h1>" . $row['SUM(couts)'] . "</h1>";
    echo "<br>";
}
echo htmlspecialchars($_SERVER["PHP_SELF"]);
$conn->close();
?>

