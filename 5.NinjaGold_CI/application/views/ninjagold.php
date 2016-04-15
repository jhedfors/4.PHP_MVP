<?php 


 ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<meta name="author" content="Jonathan Ben-Ammi">
 	<title>Ninja Gold PLUS</title>
 	<meta name="description" content="This is an MVC assignment for Coding Dojo">
 	<link rel="stylesheet" type="text/css" href="/assets/css/style.css">

 </head>
 <body>
 	<div id="container">
 		<div id="header">
	 		<h1>Your Gold:</h1>
	 		<h1 id="score"><?= $score ?></h1>
	 		<form action="/actions/reset" method="post">
	 			<input type="submit" value="Reset" />
	 		</form>
 		</div>
 		<div id="gameBody">
 			<div class="earnGold">
 				<H3>Farm</H3>
 				<h4>Collect 10 to 20 golds</h4>
 				<form action="/actions/farm" method="post">
	 				<input type="submit" value="Farm" />
 				</form>
 			</div>
 			<div class="earnGold">
 				<H3>Cave</H3>
 				<h4>Collect 5 to 10 golds</h4>
 				<form action="/actions/cave" method="post">
	 				<input type="submit" value="Cave" />
 				</form>
 			</div>
 			<div class="earnGold">
 				<H3>House</H3>
 				<h4>Collect 2 to 5 golds</h4>
 				<form action="/actions/house" method="post">
	 				<input type="submit" value="House" />
 				</form>
 			</div>
 			<div class="earnGold">
 				<H3>Casino</H3>
 				<h4>Win or Lose 0 to 50 golds</h4>
 				<form action="/actions/casino" method="post">
	 				<input type="submit" value="Casino" />
 				</form>
 			</div> 			 			 			
 		</div>
 		<div id="gameText" style="border: 1px solid black">
 			<p><?= $actions ?></p>
 		</div>
 	</div>
 </body>
 </html>