<!DOCTYPE html>
<html lang="en">
    <head>
		<!-- 
		*******************************
		*
		*  Made for Technology 
		*  Student Association
		*		
		*  By Ethan James, Ryan Kim,
		*  Darin Mao, Jason Kim,
		*  and Ben Miller.
		*
		*******************************
		-->
		<meta charset="utf-8">
		<title>Mission To Mars</title>	
		<?php include("../../includes/head.php"); ?>
		<style type="text/css">
			div.panel {
				color: black;
				width: 100%;
				margin-bottom: 5px;
			}
			img {
				width:100%;
				height:auto;
			}
			@media (min-width: 768px) {
				div.panel#rob {
					width: 47.5%;
					float: left;
				}
				div.panel#asdf {
					width: 47.5%;
					float: right;
				}
			}
		</style>
    </head>
    <body>
	<?php include("../../includes/navbar.php"); ?>
	<div class="container">
		<div class="page-header">
			<h2>
				Interviews
			</h2>
		</div>
		<p>We contacted and interviewed two individuals related to the field of space exploration. You can watch the interviews below. </p>
		<div class="panel panel-default" id="rob">
			<div class="panel-heading">Rob Chalmers</div>
			<div class="panel-body">
				<a href="/interviews/robchalmers">
					<img src="/images/robchalmers.jpg">
				</a>
				<a href="robchalmers/videorelease.pdf" style="font-size: 0.75em; color: white;">Video Release</a>
			</div>
		</div>
		<div class="panel panel-default" id="asdf">
			<div class="panel-heading">Effie Shaw</div>
			<div class="panel-body">
				<a href="/interviews/effieshaw">
					<img src="/images/effieshaw.jpg">
				</a>
				<a href="effieshaw/videorelease.pdf" style="font-size: 0.75em; color: white;">Video Release</a>
			</div>
		</div>
	</div>
	<?php include("../../includes/footer.php"); ?>    
    </body>
</html>
