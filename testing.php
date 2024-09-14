<?php
$sql = "SELECT id, couts, email, whatsapp, prenom, pays, dat  FROM reg;
$result = $conn->query($sql);

if ($result->num_rows > 0) {
   while($row = $result->fetch_assoc()){
      echo "id: " . $row["id"]. " - Couts: " . $row["couts"]. " - email: " . $row["email"]." - whatsapp: " . $row["whatsapp"]. 
      " - prenom: " . $row["prenom"]. " - pay: " . $row["pays"]. " - dat: " . $row["dat"]. "<br";
    }
} else {
    echo "0 results";
}
echo htmlspecialchars($_SERVER["PHP_SELF"]);
$conn->close();
?>