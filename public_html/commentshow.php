<!DOCTYPE html>
<html lang="en">
<head>
<title>Comments</title>
<link rel="icon" href="favicon.ico">
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <style type="text/css">
      .dropdown:hover .dropdown-menu{
        display: block;
    margin-top: 0;
      }
   body{
   padding-bottom: 50px;
   background-image: url("bg.jpg"); 
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
   }
    </style>
</head>
<body>
<div class=container-fluid">
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
          <li><a href="commentinput.php">Leave a comment</a></li>
          <li class="active"><a href="#">See all comments</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
<div class="jumbotron" style="text-align: center; background-color: transparent;">
<h1> Here are all the comments received:</h1>
</div>
<h1>Comments are disabled.</h1>
</div>
</body>
</html>
