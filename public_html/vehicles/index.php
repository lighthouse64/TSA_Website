<!DOCTYPE html>
<html>
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
			}
			div.vehicle-description {
				margin-top: 1%;
			}
			@media (min-width: 768px) {
				div.panel-body figure {
					width: 30%;
					float: left;
				}
				div.panel-body div.vehicle-description {
					width: 65%;
					float: right;
					margin-top: 0px;
				}
			}
		</style>
				<script type="text/javascript">
		<!--
			$(function()
			{
				var data = <?php include("../../data/vehicles.json"); ?>;
				$.each(data, function(index, event)
				{
					var name = event.name;
					var description = event.description;
					var image = event.image;
					var caption = event.caption;
					var displayString = "<div class=\"panel panel-default\"><div class=\"panel-heading\">";
					displayString += name;
					displayString += "</div><div class=\"panel-body\"><figure><img class=\"img-responsive\" src=\"";
					displayString += image;
					displayString += "\" /><figcaption>";
					displayString += caption;
					displayString += "</figcaption></figure><div class=\"vehicle-description\">";
					displayString += description;
					displayString += "</div></div></div>";
					$(".vehicles").append(displayString);
				});
			});
		//-->
		</script>
    </head>
    <body>
<?php include("../../includes/navbar.php"); ?>
	<div class="container">
		<div class="page-header">
			<h2>
				Space Vehicles
			</h2>
		</div>
		<p>
		Ever since the launch of Sputnik, space vehicles have constantly been evolving.  This page outlines some major changes that have happened over time.	
		</p>
		<div class="vehicles">
		</div>
	<div class="panel-heading"><p><h2>Cited Sources (APA)</h2></p></div>
	    <div class="panel-body">
		  <p><b>Sputnik</b></p>
		    <p>Garber, S. (2007, October 10). Sputnik and The Dawn of the Space Age. Retrieved March 09, 2017, from https://history.nasa.gov/sputnik/</p> 
		    <p>Greene, N. (2017, March 2). The Shining Little Sphere that Triggered the Space Race. Retrieved March 09, 2017, from https://www.thoughtco.com/sputnik-1-first-artificial-satellite-3071226</p>
		  <p><b>Explorer 1</b></p>
		    <p>Explorer-I and Jupiter-C. (n.d.). Retrieved March 09, 2017, from http://history.nasa.gov/sputnik/expinfo.html </p>
		    <p>N. (2017, March 2). Meet the First U.S. Satellite Sent to Space. Retrieved March 09, 2017, from https://www.thoughtco.com/explorer-1-first-us-satellite-3073486</p>
		  <p><b>Mariner 2</b></p>
		    <p>Mariner 2. (n.d.). Retrieved March 3, 2017, from http://nssdc.gsfc.nasa.gov/nmc/spacecraftDisplay.do?id=1962-041A</p>
		  <p><b>Luna 16</b></p>
		    <p>Luna 16. (n.d.). Retrieved March 9, 2017, from http://nssdc.gsfc.nasa.gov/nmc/spacecraftDisplay.do?id=1970-072A </p>
		  <p><b>Mars Sojourner and Pathfinder</b></p>
		    <p>Mars Pathfinder. (n.d.). Retrieved March 09, 2017, from http://mars.jpl.nasa.gov/MPF/default.html </p>
	    </div>
   <?php include("../../includes/footer.php"); ?> 
    </body>
</html>
