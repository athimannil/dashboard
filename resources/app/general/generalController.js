angular
    .module('app')
    .controller('generalCtrl', SomeController);

function SomeController($scope) {
    $scope.showMenu = true;
    console.log("general controller");
    console.log($scope.showMenu);
    console.log("general controller");
}


// app.controller('myCtrl', function($scope) {
//     $scope.firstName = "John";
//     $scope.lastName = "Doe";
// });
