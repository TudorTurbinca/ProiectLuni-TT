<head>
 <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <link rel="stylesheet" href="/resources/demos/style.css">
	<script>
  $( function() {
    $( "#accordion" ).accordion();
  } );
  </script>
</head>

<style>
  *{
	  font-family:Arial, Helvetica, sans-serrif;
	  
  }
  
  </style>

<?php

include "db_connect.php";

$keywordfromform = $_GET["Keyword"];

/// new
echo "<h1> Search Result for $keywordfromform  </h1>";

$sql = "SELECT Articol_ID, Titlu_Articol, Continut_Articol, Categorie  FROM articole_table WHERE Titlu_Articol LIKE '%" . $keywordfromform  ."%'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  
  
?>

<div id="accordion"> 

 
 <?php
  while($row = $result->fetch_assoc()) {
    //echo "Articol_ID: " . $row["Articol_ID"]. " - Name: " . $row["Titlu_Articol"]. " " . $row["Continut_Articol"]." " .$row["Categorie"]. "<br>";
	echo "<h3>$row[Titlu_Articol]</h3>";
	echo "<div><p>$row[Continut_Articol]</p></div>";
  }
} else {
  echo "0 results";
}

?>

</div>
<a href ="index.php">Return to main page </a>