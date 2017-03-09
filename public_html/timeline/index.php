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
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
		<style type="text/css">
			.container {
				color: white;
			}
			.timeline {
				list-style: none;
				padding: 20px 0 20px;
				position: relative;
				display: none;
			}
			.timeline:before {
				top: 0;
				bottom: 0;
				position: absolute;
				content: " ";
				width: 3px;
				background-color: white;
				left: 50%;
				margin-left: -1.5px;
			}
			.timeline > li {
				margin-bottom: 20px;
				position: relative;
			}
			.timeline > li.timeline-marker {
				width: 50px;
				left: 50%;
				margin-left: -25px;
				border-radius: 7.5px;
				text-align: center;
				background-color: #999999;
			}
			.timeline > li:before,
			.timeline > li:after {
				content: " ";
				display: table;
			}

			.timeline > li:after {
				clear: both;
			}
			.timeline > li > .timeline-panel {
				width: calc(50% - 35px);
				float: left;
				border-radius: 2px;
				padding: 20px;
				position: relative;
				background-color:white;
				color:black;
			}
			.timeline > li > .timeline-panel:before {
				position: absolute;
				top: 26px;
				right: -15px;
				display: inline-block;
				border-top: 15px solid transparent;
				border-bottom: 15px solid transparent;
				content: " ";
			}

			.timeline > li > .timeline-panel:after {
				position: absolute;
				top: 27px;
				right: -13px;
				display: inline-block;
				border-top: 14px solid transparent;
				border-bottom: 14px solid transparent;
				border-left: 14px solid #fff;
				border-right: 0 solid #fff;
				content: " ";
			}
			.timeline > li > .timeline-badge {
				color: white;
				width: 25px;
				height: 25px;
				line-height: 25px;
				font-size: 1em;
				text-align: center;
				position: absolute;
				top: 28px;
				left: 50%;
				margin-left: -12.5px;
				background-color: #999999;
				z-index: 100;
				border-top-right-radius: 50%;
				border-top-left-radius: 50%;
				border-bottom-right-radius: 50%;
				border-bottom-left-radius: 50%;
			}
			.timeline > li.inverted > .timeline-panel {
				float: right;
			}
			.timeline > li.inverted > .timeline-panel:before {
				border-left-width: 0;
				border-right-width: 15px;
				left: -15px;
				right: auto;
			}
			.timeline > li.inverted > .timeline-panel:after {
				border-left-width: 0;
				border-right-width: 14px;
				left: -13px;
				right: auto;
			}
			.timeline-title {
				margin-top: 0;
			}
			div.modal-body ul {
				padding-left: 10px;
			}
			div.modal-body ul li a {
				overflow-wrap: break-word;
				word-wrap: break-word;
			}
			ul.timeline-event-links {
				list-style-type:disc;
			}
			figure > figcaption {
				font-size: 0.875em;
			}
			img.timeline-loading {
				width: 20%;
				position: relative;
				left: 40%;
			}
			@media (max-width: 767px) {
				ul.timeline:before {
					left: 40px;
				}
				ul.timeline > li.timeline-marker {
					left: 40px;
				}
				ul.timeline > li > .timeline-panel {
					width: calc(100% - 80px);
				}
				ul.timeline > li > .timeline-badge {
					left: 27.5px;
					margin-left: 0;
				}
				ul.timeline > li > .timeline-panel {
					float: right;
				}
				ul.timeline > li > .timeline-panel:before {
					border-left-width: 0;
					border-right-width: 15px;
					left: -15px;
					right: auto;
				}

				ul.timeline > li > .timeline-panel:after {
					border-left-width: 0;
					border-right-width: 14px;
					left: -13px;
					right: auto;
				}
			}
		</style>
		<script type="text/javascript">
		<!--
			$(window).on('load', function() {
				$("img.timeline-loading").fadeOut("slow", function() {
					$("ul.timeline").fadeIn("slow");
				});
			});
			var dateNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
			var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
			$(function()
			{
				var data = <?php include("../../data/timeline.json"); ?>;
				var lastYear = 0;
				$.each(data, function(index, event)
				{
					var name = event.name;
					var date = new Date(event.date);
					var dateString = dateNames[date.getDay()] + ", " + monthNames[date.getMonth()] + " " + date.getDate() + ", " + date.getFullYear();
					var descriptionShort = event.descriptionShort;
					var descriptionFull = event.descriptionFull;
					var image = event.image;
					var caption = event.caption;
					var attribution = event.attribution;
					var links = event.links;
					var displayString = "";
					if (date.getFullYear() > lastYear)
					{
						displayString += "<li class=\"timeline-marker\">";
						displayString += date.getFullYear();
						displayString += "</li>";
						lastYear = date.getFullYear();
					}
					displayString += "<li class=\"timeline-event";
					if (index % 2 == 1)
					{
						displayString += " inverted";
					}
					displayString += "\"><div class=\"timeline-badge\"><i class=\"fa fa-rocket\" aria-hidden=\"true\"></i></div><div class=\"timeline-panel\"><div class=\"timeline-heading\"><h4 class=\"timeline-title\">"
					displayString += name;
					displayString += "</h4><p><small class=\"text-muted\"><i class=\"glyphicon glyphicon-time\" aria-hidden=\"true\"></i> ";
					displayString += dateString;
					displayString += "</small></div><div class=\"timeline-body\"><p>";
					displayString += descriptionShort;
					displayString += "</div><div class=\"timeline-event-full-description\"><button type=\"button\" class=\"btn btn-primary\" data-toggle=\"modal\" data-target=\"#full-description-";
					displayString += index;
					displayString += "\">READ MORE</button><div id=\"full-description-";
					displayString += index;
					displayString += "\" class=\"modal fade\" role=\"dialog\"><div class=\"modal-dialog\"><div class=\"modal-content\"><div class=\"modal-header\"><button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button><h4 class=\"modal-title\">";
					displayString += name;
					displayString += "</h4></div><div class=\"modal-body\"><p>";
					displayString += descriptionFull;
					if (image != "") 
					{
						displayString += "<figure><img class=\"img-responsive\" src=\"";
						displayString += image;
						displayString += "\" /><figcaption>";
						displayString += caption;
						displayString += "<div class=\"image-attribution\">";
						displayString += attribution;
						displayString += "</div></figcaption></figure>";
					}
					displayString += "<ul class=\"timeline-event-links\">";
					for (i = 0; i < links.length; i++) 
					{
						displayString += "<li>";
						displayString += links[i];
						displayString += "</li>";
					}
					displayString += "</ul>";
					displayString += "</div><div class=\"modal-footer\"><button type=\"button\" class=\"btn btn-default\" data-dismiss=\"modal\">Close</button></div></div></div></div></div></div>";
					$(".timeline").append(displayString);
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
				The Privatization of the Space Program and the United States's Space Program
			</h2>
		</div>
		<img src="/images/loading.gif" class="timeline-loading img-responsive">
		<ul class="timeline">
		</ul>
	</div>
<?php include("../../includes/footer.php"); ?>    
    </body>
</html>