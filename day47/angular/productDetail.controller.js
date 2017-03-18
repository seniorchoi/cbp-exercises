// retrieve the module
var module = angular.module('myApp');

module.controller('productDetail', function($scope, $http) {

    var controller = this;
    
    // retrieve some data from the server
    $http.get('data.php').then(function(response) {

        // put the data from the response into the view (view's variable scope)
        $scope.product_name = response.data.product_name;
        $scope.description = response.data.description;

    });

});