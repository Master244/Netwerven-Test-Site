/**
 * borderMenu.js v1.0.0
 * http://www.codrops.com
 *
 * Modified for AngularJS by Joakim Bengtson (http://joakim.beng.se)
 *
 * Licensed under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 *
 * Copyright 2013, Codrops
 * http://www.codrops.com
 */
angular.module('AnimatedBorderMenus', ['ngTouch'])
	.controller('NavCtrl', function ($scope) {
		$scope.isOpen = false;

		$scope.open = function () {
			$scope.isOpen = true;
		};

		$scope.toggle = function () {
			$scope.isOpen = !$scope.isOpen;
		};

		$scope.close = function () {
			$scope.isOpen = false;
		};
	});
