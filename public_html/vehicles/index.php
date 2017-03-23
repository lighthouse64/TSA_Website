<!DOCTYPE html>
<style>
.bld{
	font-weight:bold;
	}	
</style>	
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
					var attribution = event.attribution;
					var displayString = "<div class=\"panel panel-default\"><div class=\"panel-heading\">";
					displayString += name;
					displayString += "</div><div class=\"panel-body\"><figure><img class=\"img-responsive\" src=\"";
					displayString += image;
					displayString += "\" /><figcaption>";
					displayString += caption;
					displayString += "<div class=\"image-attribution\">";
					displayString += attribution;
					displayString += "</div></figcaption></figure><div class=\"vehicle-description\">";
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
			Ryan Kim
		</div>
		<p>
		Ever since the launch of Sputnik, space vehicles have constantly been evolving.  This page outlines some major changes that have happened over time.	
		</p>
		<div class="vehicles">
		</div>
	<div class="panel-heading"><p><h2>Cited Sources (MLA 8)</h2></p>
	    <div class="panel-body">
		  <p id ="bld">Sputnik</p>
		    <p>Garber, Steve. “Sputnik and The Dawn of the Space Age.” NASA, NASA, 10 Oct. 2007, history.nasa.gov/sputnik/. Accessed 16 Mar. 2017. </p>
		    
		    <p class ="bld">Explorer 1</p>
		   	 <p>“Explorer-I and Jupiter-C.” NASA, NASA, history.nasa.gov/sputnik/expinfo.html. Accessed 23 Mar. 2017. </p>
		    	 <p>NASA/JPL. “Meet the First U.S. Satellite Sent to Space.” ThoughtCo, ThoughtCo., space.about.com/od/spaceexplorationhistory/p/explorer1.htm. Accessed 23 Mar. 2017. </p>
		    <p class="bld">Mariner 2</p>
		    	 <p>“Mariner 2.” NASA, NASA, nssdc.gsfc.nasa.gov/nmc/spacecraftDisplay.do?id=1962-041A. Accessed 23 Mar. 2017. </p>    
		    <p class="bld">Luna 16</p>
		    	 <p>“Luna 16.” NASA, NASA, nssdc.gsfc.nasa.gov/nmc/spacecraftDisplay.do?id=1970-072A. Accessed 23 Mar. 2017. </p>
		    <p class="bld">Mars Sojourner Rover and Pathfinder Lander</p>
		    	 <p>“Mars Pathfinder Mission.” NASA, NASA, mars.jpl.nasa.gov/MPF/mpf/rover.html. Accessed 23 Mar. 2017. </p>
		    <p class="bld">Mars Odyssey</p>
		    	 <p>“Overview - Mars Odyssey.” NASA, NASA, mars.jpl.nasa.gov/odyssey/mission/overview/. Accessed 23 Mar. 2017. </p>
		    <p class="bld">Curiosity Rover</p>
		    	 <p>Greicius, Tony. “Mars Science Laboratory - Curiosity.” NASA, NASA, 20 Jan. 2015, www.nasa.gov/mission_pages/msl/index.html. Accessed 23 Mar. 2017. </p>
		    	 <p>Greicius, Tony. “Mars Rock-Ingredient Stew Seen as Plus for Habitability.” NASA, NASA, 13 Dec. 2016, www.nasa.gov/feature/jpl/mars-rock-ingredient-stew-seen-as-plus-for-habitability. Accessed 23 Mar. 2017. </p>
		    	 <p>“Mars Science Laboratory.” NASA, NASA, mars.jpl.nasa.gov/msl/. Accessed 23 Mar. 2017. </p>
		    <p class="bld">InSight</p>
		    	 <p>“Introduction.” NASA, NASA, insight.jpl.nasa.gov/home.cfm. Accessed 23 Mar. 2017. </p>
		</div>
	    </div>
   <?php include("../../includes/footer.php"); ?> 
    </body>
</html>
