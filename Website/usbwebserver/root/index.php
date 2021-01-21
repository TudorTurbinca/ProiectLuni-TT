<html>
<head>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

<style>
  *{
	  font-family:Arial, Helvetica, sans-serrif;
	  
  }
  
  </style>

</head>

<body>

<h1> WELCOME TO COVID-19 DATA CENTER</h1>

<?php

include  "db_connect.php";

//include "search_all_art.php";
?>

<form class="form-horizontal" action="search_keyword.php">
<fieldset>

<!-- Form Name -->
<legend>Search for an article in the database</legend>

<!-- Search input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="Keyword">Search Input</label>
  <div class="col-md-5">
    <input id="Keyword" name="Keyword" type="search" placeholder="e.g Rompetrol" class="form-control input-md" required="">
    <p class="help-block">Enter a word to search for in the article database</p>
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Search</button>
  </div>
</div>

</fieldset>
</form>




<form class="form-horizontal" action="add_articol.php">
<fieldset>

<!-- Form Name -->
<legend>Add an article</legend>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newtitle">Enter the title of your article</label>  
  <div class="col-md-6">
  <input id="newtitle" name="newtitle" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Enter the title of your article</span>  
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label class="col-md-4 control-label" for="newcontent">Enter the content of your article</label>  
  <div class="col-md-5">
  <input id="newcontent" name="newcontent" type="text" placeholder="" class="form-control input-md" required="">
  <span class="help-block">Enter the content of your article</span>  
  </div>
</div>

<!-- Button -->
<div class="form-group">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="col-md-4">
    <button id="Submit" name="Submit" class="btn btn-primary">Add a new article</button>
  </div>
</div>

</fieldset>
</form>




<?php
//include "search_keyword.php";

$mysqli->close();

?>


</body>

</html>
