<!DOCTYPE html>
<html>
<head>
	<title>Live Search using AJAX</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="script.js"></script>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Ajax Live Search</h1>
  </div>
</div>
<nav class="navbar navbar-inverse">
    <div class="collapse navbar-collapse" id="myNavbar">
    	<ul class="nav navbar-nav">
    		<li><a href="index.php">Database</a></li>
    		<li><a href="xml.php">XML</a></li>
    		<li><a href="json.php">JSON</a></li>
    	</ul>
    </div>
  </div>
</nav>
<article>
<div class="container">
<form>
<div class="input-group">
    <span class="input-group-addon">Search</span>
    <input type="text" id="search" placeholder="Search Countries" class="form-control" name="search" >
  </div>
</form>
<div id="display">
</div>
</div>
</article>
<!-- <footer class="container-fluid text-center">hiii</footer> -->
</body>
</html>