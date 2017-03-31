<?php if (strpos($_SERVER["REQUEST_URI"], "404.php") !== false ) {header($_SERVER["SERVER_PROTOCOL"] . " 404 Not Found");}; ?>
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
		<?php include("../includes/head.php"); ?>
		<script type="text/javascript">
		<!--
			function e(){
				alert("Congrats on finding this! You've probably been here a while, if you managed to find this. In our team, I do most of the coding, so I just had to include some sort of hidden secret somewhere in the site. \n\nAnyway, I just wanted to say THANK YOU for looking through our site so thoroughly. It's great to know that you put in so much effort to look through every single part, despite having to evaulate so many of these websites. We really enjoyed making this site and we hope you enjoyed reading through it as well. Thank you for your time and your patience.\n\n-Darin");
			}
		//-->
		</script>
    </head>
    <body>
	<?php include("../includes/navbar.php"); ?>
	<div class="container">
		<div class="page-header">
			<h2>
				The requested URL "<?php echo $_SERVER["REQUEST_URI"]; ?>" was not found on this server
			</h2>
		</div>
		<p>Don't stop looking, though! NASA scientists <a href="https://www.nasa.gov/press-release/nasa-confirms-evidence-that-liquid-water-flows-on-today-s-mars" style="color: white; text-decoration: underline;">found water on Mars</a> after <i>years</i> of searching<span onClick="e();">!</span>
		<br><img src="http://www.nasa.gov/sites/default/files/thumbnails/image/15-195_perspective_2.jpg" style="width:100%;">	   
	</div>
    <?php include("../includes/footer.php"); ?>    
    </body>
</html>
