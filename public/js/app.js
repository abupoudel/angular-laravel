var myTestApp = angular.module('myTestApp', ['ngRoute','ngSanitize']);

myTestApp.config(function($routeProvider,$locationProvider){
    $locationProvider.html5Mode(true);
    $routeProvider
        .when('/', {
            templateUrl: base_url + "/ajax",
            controller: 'HomeController'
        })
        .when('/view',{
            templateUrl: base_url + 'view/ajax',
            controller: 'ViewController'
        })
        .otherwise({
            redirectTo: '/'
        });
});

myTestApp.filter("trust", ['$sce', function($sce) {
    return function(htmlCode){
        return $sce.trustAsHtml(htmlCode);
    }
}]);


myTestApp.controller('HomeController',function($scope,$http){
    // currently we have nothing inside scope, we do nothing there
    $http.get(urls.home_data).then(function(data){
        $scope.backend = data.data;
    })
});

myTestApp.controller('ViewController',function($scope,$http){
    // currently we have nothing inside scope, we do nothing there
    $http.get(urls.view_data).then(function(data){
        $scope.students = data.data;
    })
});


$(document).ready(function(){
    $("#mainNavBar a").click(function(){
        $("#mainNavBar .nav-item").removeClass("active");
        $(this).parent().addClass("active");
    })
});
