angular
	.module('app', [
		'ui.router'
	])
	.config(['$urlRouterProvider', '$stateProvider', function($urlRouterProvider, $stateProvider) {
      $urlRouterProvider.otherwise('/');
      $stateProvider
        .state('home', {
        	url: '/',
        	templateUrl: './templates/home.html',
        	controller: 'homeCtrl'
        })
        .state('projects', {
        	url: '/projects',
        	templateUrl: './templates/projects.html',
        	controller: 'projectsCtrl'
        })
        .state('contact', {
        	url: '/contact',
        	templateUrl: './templates/contact.html',
        	controller: 'contactCtrl'
        })
	}])