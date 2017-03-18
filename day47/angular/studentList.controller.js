// retrieve the module
var module = angular.module('myApp');

// create a controller
module.controller('studentList', function($scope) {
    
    var my_var = 11;

    $scope.total_students = 16;
    $scope.present_students = 15;

    $scope.countMissingStudents = function() {
        return $scope.total_students - $scope.present_students;
    }

    $scope.students = [
        { 
            name: 'Jan',
            present: true
        },
        { 
            name: 'OG',
            present: true
        },
        { 
            name: 'Kristina',
            present: false
        },
    ];

    //this.property_of_the_controller = 'Boo';

});

