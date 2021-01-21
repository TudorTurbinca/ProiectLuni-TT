<?php

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";


$sql = "SELECT Articol_ID, Titlu_Articol, Continut_Articol, Categorie  FROM articole_table";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Articol_ID: " . $row["Articol_ID"]. " - Name: " . $row["Titlu_Articol"]. " " . $row["Continut_Articol"]." " .$row["Categorie"]. "<br>";
  }
} else {
  echo "0 results";
}

?>