<!DOCTYPE html>
<html>
	<head> 
	<title>Shabeer S Hussain</title> 
	<meta name="description" content="Shabeer S Hussain, Freelance Flash/Website Developer" />
<meta name="keywords" content="HTML,CSS,PHP,Actionscript,as3,as2,flash,freelance,games" />
<meta name="author" content="Shabeer S Hussain" />
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
	
	<meta name="viewport" content="width=device-width, initial-scale=1"> 

	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.css" />
	<script src="http://code.jquery.com/jquery-1.7.1.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.1.0/jquery.mobile-1.1.0.min.js"></script>
	</head> 
<body> 
<div data-role="page">

	<div data-role="header">
		<h1>HTML5 & JQuery</h1>
		<div data-role="navbar">
		<ul>
			<li><a href="index.php">Home</a></li>
			<li><a href="geo.php">GeoLocation</a></li>
			<li><a href="animation.php">Animation</a></li>
		</ul>
	</div><!-- /navbar -->

	<div data-role="content">
<p><style>
            body {
                margin: 0px;
                padding: 0px;
            }
            
            #myCanvas {
                border: 1px solid #9C9898;
            }
        </style>
        <script>
            window.requestAnimFrame = (function(callback){
                return window.requestAnimationFrame ||
                window.webkitRequestAnimationFrame ||
                window.mozRequestAnimationFrame ||
                window.oRequestAnimationFrame ||
                window.msRequestAnimationFrame ||
                function(callback){
                    window.setTimeout(callback, 1000 / 60);
                };
            })();
            
            function animate(lastTime, myRectangle){
                var canvas = document.getElementById("myCanvas");
                var context = canvas.getContext("2d");
                
                // update
                var date = new Date();
                var time = date.getTime();
                var timeDiff = time - lastTime;
                var linearSpeed = 100; // pixels / second
                var linearDistEachFrame = linearSpeed * timeDiff / 1000;
                var currentX = myRectangle.x;
                
                if (currentX < canvas.width - myRectangle.width - myRectangle.borderWidth / 2) {
                    var newX = currentX + linearDistEachFrame;
                    myRectangle.x = newX;
                }
                lastTime = time;
                
                // clear
                context.clearRect(0, 0, canvas.width, canvas.height);
                
                // draw
                context.beginPath();
                context.rect(myRectangle.x, myRectangle.y, myRectangle.width, myRectangle.height);
                
                context.fillStyle = "#8ED6FF";
                context.fill();
                context.lineWidth = myRectangle.borderWidth;
                context.strokeStyle = "black";
                context.stroke();
                
                // request new frame
                requestAnimFrame(function(){
                    animate(lastTime, myRectangle);
                });
            }
            
            window.onload = function(){
                var myRectangle = {
                    x: 0,
                    y: 150,
                    width: 100,
                    height: 50,
                    borderWidth: 5
                };
                
                var date = new Date();
                var time = date.getTime();
                animate(time, myRectangle);
            };
        </script>
</p>
</div>
</body>
</html>