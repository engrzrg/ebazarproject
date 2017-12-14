<!DOCTYPE html>
<html>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
<body>

<div ng-app="myApp" ng-controller="myCtrl">

    <p>Today's welcome message is:</p>
    <button ng-click="getMessage()"> get Message</button>
    <h1 ng-show="countdown">@{{countdown}}</h1>
    <h1>@{{myWelcome}}</h1>

</div>

<p>The $http service requests a page on the server, and the response is set as the value of the "myWelcome" variable.</p>

<script>

    var app = angular.module('myApp', []);
    app.controller('myCtrl', function($scope, $http, $timeout,$interval) {
        $scope.countdown=10;
        $scope.countdone=false;
        $interval(function () {
            $scope.countdown--;
            if($scope.countdown<=0  ){
                $scope.countdone=true;

            }
        },1000);
        $timeout(function () {
            $http.get("api").then(function (response) {
                $scope.myWelcome = response.data;
            });
        },10000);

    });
</script>

</body>
</html>
