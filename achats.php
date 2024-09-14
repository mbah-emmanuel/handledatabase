<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="stylo1.css">
    <script src="scripts.js"></script>
    <a href="index"><button style="width: 300px; font-size: medium; margin: auto; background-color: black; color:white" name="couts">Retourner à la page précédente</button></a>
    <?php include("buttons.php");?>
</head>
<body>
<?php
include ("connect.php");
$sql = "SELECT id, couts, email, whatsapp, prenom, pays, dates  FROM reg ORDER BY id";
if($result=mysqli_query($conn, $sql))    
{
    //Return the number of rows in result set
    $rowcount = mysqli_num_rows($result);
    printf("<h2>Nombre d'achats:</h2><h1>%d</h1>.\n", $rowcount);
    //Free result set
    mysqli_free_result($result);
}
mysqli_close($conn);
echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>