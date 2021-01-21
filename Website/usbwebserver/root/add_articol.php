<?php

include "db_connect.php";
$new_articol_title = $_GET["newtitle"];
$new_articol_content = $_GET["newcontent"];

$new_articol_title = addslashes($new_articol_title);
$new_articol_content = addslashes($new_articol_content);

/// new
echo "<h2> Trying to add a new article $new_articol_title and $new_articol_content  </h2>";

$sql = "INSERT INTO articole_noi (Titlu, Articol) VALUES ('$new_articol_title', '$new_articol_content' )";
$result = $mysqli->query($sql);


?>
<a href ="index.php">Return to main page </a>