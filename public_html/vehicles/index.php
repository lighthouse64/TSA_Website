<!DOCTYPE html>
<style>
#bld{
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
	<div class="panel-heading"><p><h2>Cited Sources (MLA 8)</h2></p></div>
	    <div class="panel-body">
		  <p id ="bld">Sputnik</p>
		    <p>Garber, Steve. “Sputnik and The Dawn of the Space Age.” NASA, NASA, 10 Oct. 2007, history.nasa.gov/sputnik/. Accessed 16 Mar. 2017. </p>
	    
	    </div>
   <?php include("../../includes/footer.php"); ?> 
    </body>
</html>
