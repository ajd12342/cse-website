<?php
$name=$comment=$error="";
if(!empty($_POST)){
	$name=test_input($_POST["name"]);
	$comment=test_input($_POST["comment"]);
	$fields=array($name,$comment);
	$h=fopen("comments.csv","a");
	fputcsv($h,$fields);
	fclose($h);
	$name=$comment="";
	$error='<h3 class="text-success col-sm-offset-2">Thanks for leaving a comment!</h3>';
}
function test_input($data) {
  $data = trim($data);
  $data = htmlspecialchars($data);
  return $data;
}
?><!DOCTYPE html>
<html lang="en">
<head>
	<title>Leave a Comment</title>
	<link rel="icon" href="favicon.ico">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<link rel="stylesheet" href="css/bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  	<style type="text/css">
  	body{
      padding-bottom: 50px;
      background-image: url("bg.jpg"); 
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;
     }
      .dropdown:hover .dropdown-menu{
        display: block;
    margin-top: 0;
      }
    </style>
</head>
<body>
	<div class="container-fluid">
		<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="font-style: italic;">Anuj Diwan</a>
    </div>
    <ul class="nav navbar-nav">
      <li><a href="index.php">Home</a></li>
      <li><a href="about.html">About Me</a></li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="team.html">The Team</a></li>
      <li><a href="acads.html">Academics</a></li>
      <li><a href="contact.html">Contact Me</a></li>
      <li class="dropdown active">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Comments
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li class="active"><a href="#">Leave a comment</a></li>
          <li><a href="commentshow.php">See all comments</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
		<div class="jumbotron" style="text-align: center; background-color: transparent;">
		<h1> Leave a comment! </h1>
		</div>
		<?php echo($error); ?>
			<form method="post">
				<div class="form-group">
					<h3> 
					<label class="col-sm-2" for="name">Name:</label>
					<input class="col-sm-10" name="name" type="text" class="form-control" id="name" required>
					</h3>
				</div>
				<div class="form-group">
					<h3>
					<label class="col-sm-2" for="comment">Write your comment:</label>
					<textarea class="col-sm-10" name="comment" type="text" rows="5" class="form-control" id="comment" required></textarea>
					</h3>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-success btn-lg col-sm-offset-2 col-sm-2">Submit!</button>
				</div>
			</form>
		</div>
	</div>
</body>
</html>