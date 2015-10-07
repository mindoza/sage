/* ========================================================================
 * Angular code goes here:
 * ======================================================================== */

var sageApp = angular.module('sageApp', ['ui.router', 'ui.bootstrap'])
  .config(function($stateProvider, $urlRouterProvider) {
  // For any unmatched url, redirect to /
  $urlRouterProvider.otherwise("/");

  // Routes
  $stateProvider
    .state('index', {
      url: '/',
      controller: 'sageAppIndexController',
      templateUrl: GLOBALS.partialsPath + 'index.html',
    })
      .state('index.substate', {
        url: 'substate',
        templateUrl: GLOBALS.partialsPath + 'substate.html',
        controller: 'substateController'
      })
    ;
  })

  .controller('sageAppController', function($scope) {
    $scope.hello = "Hello World";
  })

  .controller('sageAppIndexController', function($scope) {
    $scope.hello = "Hello World";
  })
;
