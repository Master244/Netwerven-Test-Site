<?php
/*
Template Name: Front Page
*/
?>

<?php get_header(); ?>

<!-- Adding the ng-app declaration to initialize AngularJS -->

	<!-- The navigation menu will get the value of the "active" variable as a class.
		 The $event.preventDefault() stops the page from jumping when a link is clicked. -->

<!-- When this element is clicked, hide the tooltip -->
<html lang="en" class="no-js">
	<head>


		
	</head>
	<body ng-app="AnimatedBorderMenus" ng-controller="NavCtrl">
		<div class="container">
			<header class="codrops-header">
				<h1>Netwervens Secret Formula <span>a visual explenation on what we do! <a href="http://creativeda.sh/sandbox/bounce_menu/"></a></h1>

				<nav class="codrops-demos">
					<a class="current-demo" href="index.html">Take the Tour!</a>
				</nav>

			</header>
			<nav id="bt-menu" ng-class="{'bt-menu-open': isOpen, 'bt-menu-close': !isOpen}" class="bt-menu">
				<a href="#" ng-click="toggle()" class="bt-menu-trigger"><span>Menu</span></a>
				<ul>
					<li><a href="#" class="bt-icon icon-user-outline">About</a></li>
					<li><a href="#" class="bt-icon icon-sun">Skills</a></li>
					<li><a href="#" class="bt-icon icon-windows">Work</a></li>
					<li><a href="#" class="bt-icon icon-speaker">Blog</a></li>
					<li><a href="#" class="bt-icon icon-star">Clients</a></li>
					<li><a href="#" class="bt-icon icon-bubble">Contact</a></li>
				</ul>
				<div ng-if="isOpen" class="bt-overlay" ng-click="close()"></div>
			</nav>
		</div><!-- /container -->
	</body>
	

</html>







<?php get_footer(); ?>
