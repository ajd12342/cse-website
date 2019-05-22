<!DOCTYPE html>
<html lang="en">
<head>
	<title>Anuj Diwan's homepage</title>
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
	<div class="container-fluid">
    <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" style="font-style: italic;">Anuj Diwan</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Home</a></li>
      <li><a href="about.html">About Me</a></li>
      <li><a href="projects.html">Projects</a></li>
      <li><a href="team.html">The Team</a></li>
      <li><a href="acads.html">Academics</a></li>
      <li><a href="contact.html">Contact Me</a></li>
      <li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">Comments
        <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="commentinput.php">Leave a comment</a></li>
          <li><a href="commentshow.php">See all comments</a></li>
        </ul>
      </li>
    </ul>
  </div>
</nav>
    <div class="jumbotron" style="background-color: transparent; text-align: center;">
		  <h1> Hi, I'm Anuj Diwan</h1>
		  <h2><a style="color:black" data-toggle="modal" href="#description"> I'm a math-and-science-loving, Linux fanboy, currently studying <br> Computer Science and Engineering at IIT Bombay! </a></h2>
    </div>
		<div class="modal fade" id="description" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h3 class="modal-title"> More about me! <button type="button" class="close" data-dismiss="modal">&times;</button></h3>
					</div>
					<div class="modal-body">
						<h4>I am a second year B.Tech student in the Computer Science and Engineering Department at IIT Bombay. I am from Mumbai, India and my parents as well as grandparents are doctors. I deeply enjoy learning about how the universe works and the underlying ideas and principles behind each and every phenomenon, algorithm and invention. I love to chat and debate about everything under the sun, may it be science, technology, politics, books or movies!
						</h4>
					</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        			</div>
        		</div>
        	</div>
        </div>
        <div style="display: block;">
        <div id="imageCarousel" class="carousel slide align-items-center" data-ride="carousel" data-interval="false" style="width: 720px; height: auto; margin: 0 auto" >
    		<ol class="carousel-indicators">
      			<li data-target="#imageCarousel" data-slide-to="0" class="active"></li>
      			<li data-target="#imageCarousel" data-slide-to="1"></li>
      			<li data-target="#imageCarousel" data-slide-to="2"></li>
    		</ol>
    		<div class="carousel-inner">
      			<div class="item active">
        			<img src="images/bday.jpg" alt="Birthday Celebration at BnB">
        			<div class="carousel-caption d-none d-md-block">
    					<p>Birthday Celebration at BnB</p>
    				</div>
      			</div>
      			<div class="item">
        			<img src="images/me.jpg" alt="Me in Goa">
        			<div class="carousel-caption d-none d-md-block">
    					<p>Me in Goa</p>
    				</div>
      			</div>
      			<div class="item">
        			<img src="images/bowling.jpg" alt="Enjoying bowling after Endsems!">
        			<div class="carousel-caption d-none d-md-block">
    					<p>Enjoying bowling after Endsems!</p>
    				</div>
      			</div>
    		</div>
    		<a class="left carousel-control" href="#imageCarousel" data-slide="prev">
      			<span class="glyphicon glyphicon-chevron-left"></span>
      			<span class="sr-only">Previous</span>
    		</a>
    		<a class="right carousel-control" href="#imageCarousel" data-slide="next">
      			<span class="glyphicon glyphicon-chevron-right"></span>
      			<span class="sr-only">Next</span>
    		</a>
  		</div>
  		<h5 style="text-align: right"> Number of page visits: 
    			<?php
	if(file_exists("numberOfHits.txt")){
		$f=fopen("numberOfHits.txt", "r");
		$count=fread($f,filesize("numberOfHits.txt"));
		fclose($f);
		$count=(int)$count+1;
		$f=fopen("numberOfHits.txt", "w");
		fwrite($f, $count);
		fclose($f);
		echo $count;
	}else{
        $f=fopen("numberOfHits.txt", "w");
        $count=1;
		fwrite($f, $count);
		fclose($f);
		echo $count;
	}
	?> 
		</h5>
  		</div>
	</div>
</body>
</html>