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
$id_num = $_POST["id_num"];
$sql = "DELETE FROM `reg` WHERE id = '$id_num'";
?>
<div class = "sucess" style = "text-align:center; font-size:50px; color : red; margin-top:18%">
<?php
if ($conn->query($sql) === TRUE) {
    echo "Success...<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
 <a href="index"></a>
 <a href="javascript:history.go(-1)"><button style="width: 300px; font-size: medium; margin: auto; background-color: black; color:white" name="couts">Retourner à la page précédente</button></a>
</div>
</body>
</html>