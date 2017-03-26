	<header class="clearfix">	
<!--		<div class="navbar-header">
			<a class="navbar-brand" href="/">Mission To Mars</a>
		</div>-->
		<button type="button" class="navbar-toggle offcanvas-toggle" data-toggle="offcanvas" data-target="#navbar-offcanvas">
			<span class="sr-only">Toggle navigation</span>
			<span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span> 
			</span>
		</button>
		<nav class="navbar navbar-inverse navbar-offcanvas navbar-offcanvas-touch offcanvas-transform" role="navigation" id="navbar-offcanvas">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="/">Mission To Mars</a>
				</div>
				<div>
					<ul class="nav navbar-nav">
						<li class="<?php if ($_SERVER["PHP_SELF"] == "/index.php"){echo "active";} ?>"><a href="/">Home</a></li>
						<li class="<?php if ($_SERVER["PHP_SELF"] == "/privatization/index.php"){echo "active";} ?>"><a href="/privatization">Privatization</a></li>
						<li class="<?php if ($_SERVER["PHP_SELF"] == "/timeline/index.php"){echo "active";} ?>"><a href="/timeline">Timeline</a></li>
						<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/vehicles/") !== false){echo "active";} ?>"><a href="/vehicles">Vehicles</a></li>
						<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/career/") !== false){echo "active";} ?>"><a href="/career">Career Fields</a></li>
						<li class="<?php if ($_SERVER["PHP_SELF"] == "/fail/index.php"){echo "active";} ?>"><a href="/fail">Failure</a></li>
						<li class="<?php if (strpos($_SERVER["PHP_SELF"], "/interviews/") !== false){echo "active";} ?>"><a href="/interviews">Interviews</a></li>
						<li class="<?php if ($_SERVER["PHP_SELF"] == "/resources/index.php"){echo "active";} ?>"><a href="/resources">Resources</a></li>
					</ul>
				</div>
			</div>
		</nav>
	</header>
