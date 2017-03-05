/* ========================================================================
 * Angular code goes here:
 * ======================================================================== */

var sageApp = angular.module('sageApp', ['ngAnimate', 'ui.router', 'ui.bootstrap'])

  // Set the configuration
  .run( ['$rootScope', function($rootScope) {
   
  // Variables defined by wp_localize_script
  $rootScope.api = wpapi.api;
   }])
  

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
//--------------------------- my stuff state-----------------
      .state('index.zopa', {
        url: 'zopa',
        templateUrl: GLOBALS.partialsPath + 'zopa.html',
        controller: 'zopaController',
      })

      .state('index.lottery', {
        url: 'lottery/:foo',
		//views: { 
		//'columnTwo': { templateUrl: GLOBALS.partialsPath + 'lottery.html' }
		//},
		templateUrl: GLOBALS.partialsPath + 'lottery.html',
        controller: 'lotteryCtrl'
      })
//-------------------------- end my stuff ----------------------
		;
  })

//--------------------------- controller lotteryCtr {{{--------------

.controller( 'lotteryCtrl', ['$scope', '$http', '$stateParams', function( $scope, $http, $stateParams, $log) {

  var foo = $stateParams.foo;
  var years;

  $scope.totalItems = 64; //example
  $scope.currentPage = 4; //example

  $scope.setPage = function (pageNo) {
      $scope.currentPage = pageNo;
  };

  $scope.pageChanged = function() {
    $log.log('Page changed to: ' + $scope.currentPage);
  };

  $scope.maxSize = 5;
  $scope.bigTotalItems = 175;
  $scope.bigCurrentPage = 1; //example finish

  $scope.status = {
    isopen: false
  };

  $scope.toggled = function(open) {
    $log.log('Dropdown is now: ', open);
  };

  $scope.toggleDropdown = function($event) {
    $event.preventDefault();
    $event.stopPropagation();
    $scope.status.isopen = !$scope.status.isopen;
  };
  
  $scope.appendToEl = angular.element(document.querySelector('#dropdown-long-content'));
//---------------------------------------------------------------------------
//$scope.params = $stateParams;
  $http.get($scope.api + 'lottery/v2/results/10000/').success(function(da) {
    $scope.years = da;
  }).
  error(function(da, status, headers, config) {});

  $http({
    method: 'GET',
    url: $scope.api + 'lottery/v2/results/' + foo,
//  url: $scope.api + 'wp/v2/posts/',
//  url: 'wp-json/wp/v2/posts/',
//  params: {
// 	'foo' : 10
//  },
  }).
  success( function( data, status, headers, config ) {
//	console.log( $scope.api );
//	console.log( data );
	$scope.posts = data;

  }).
  error(function(data, status, headers, config) {});

//add to the real data holder
  $scope.changeYear = function changeYear(year) {
   $scope.setYear = year;
  };

  }])
  

//-------------------------- end my stuff ----------------------

  .controller('zopaController', function($scope) {
    $scope.zopaHello = "zopa Controller";

    $scope.firstName = "Mindaugas";
    $scope.lastName = "Grigonis";
    $scope.names = [ 'zora', 'petia', 'vasia' ];
	//-----------------------------------------------------------

      var firstnames = ['Laurent', 'Blandine', 'Olivier', 'Max'];
      var lastnames = ['Renard', 'Faivre', 'Frere', 'Eponge'];
      var dates = ['1987-05-21', '1987-04-25', '1955-08-27', '1966-06-06'];
      var id = 1;

      function generateRandomItem(id) {

          var firstname = firstnames[Math.floor(Math.random() * 3)];
          var lastname = lastnames[Math.floor(Math.random() * 3)];
          var birthdate = dates[Math.floor(Math.random() * 3)];
          var balance = Math.floor(Math.random() * 2000);

          return {
              id: id,
              firstName: firstname,
              lastName: lastname,
              birthDate: new Date(birthdate),
              balance: balance
          };
      }

      $scope.rowCollection = [];

      for (id; id < 5; id++) {
          $scope.rowCollection.push(generateRandomItem(id));
      }

      //add to the real data holder
      $scope.addRandomItem = function addRandomItem() {
              $scope.rowCollection.push(generateRandomItem(id));
                      id++;
                          };
  
      //remove to the real data holder
      $scope.removeItem = function removeItem(row) {
      var index = $scope.rowCollection.indexOf(row);
      if (index !== -1) {
      $scope.rowCollection.splice(index, 1);
      }
    };
//---------------------------start radio
	  $scope.checkModel = {
		left: false,
	    middle: true,
    };

	  $scope.checkResults = [];

    $scope.$watchCollection('checkModel', function () {
    $scope.checkResults = [];
    angular.forEach($scope.checkModel, function (value, key) {
    if (value) {
       $scope.checkResults.push(key);
    }
   });
 });
//---------------------------end radio
	//-----------------------------------------------------------
  })

  .controller('sageAppController', function($scope) {
    $scope.hello = "Hello sageAppController";
    $scope.firstName = "Mindaugas";
    $scope.lastName = "Grigonis";
    $scope.names = [ 'zora', 'petia', 'vasia' ];
  })

  .controller('sageAppIndexController', function($scope) {
//    $scope.hello = "Hello sageAppIndexController";

   })
   ;

