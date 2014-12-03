(function(){
var app = angular.module('roomApp',[ ]);
app.controller('roomController', function($scope){
	$scope.users = [
		{ id: 1, firstname: 'Muhammed', lastname: 'Athimannil', spent: 206.98},
		{ id: 2, firstname: 'Roshan', lastname: 'Ismail', spent: 12.23},
		{ id: 3, firstname: 'Muhsin', lastname: 'Manniyil', spent: 302.12},
		{ id: 4, firstname: 'Mohasin', lastname: 'Moorkote', spent: 18.21},
		{ id: 5, firstname: 'Usharif', lastname: 'Kalathingal', spent: 85.85}
	];
	$scope.currentuser = 4;
	$scope.lastspend = 1320.90;
	$scope.todolist = [
		{id: 1, task: 'Some thing to do', asignedto: 1, done: false},
		{id: 2, task: 'Nothing to do', asignedto: 3, done: true},
		{id: 3, task: 'Meeting at 9 PM', asignedto: 1, done: false},
		{id: 4, task: 'Whole cleaning home', asignedto: 5, done: true},
		{id: 5, task: 'Verude oru rasam', asignedto: 2, done: false}
	];
	$scope.addtodo = function () {
	    $scope.todolist.push({id: 3, task: $scope.newtodo, asignedto: $scope.currentuser, done: false});
	    $scope.newtodo = '';
	};
	// alternative for sum
    $scope.sum = function(items, prop){
        return items.reduce(function(a, b){
            return a + b[prop];
        }, 0);
    };
    $scope.percentage = function (num1, num2) {
    	var num = num1 / num2 * 100;
    	return num.toFixed(2);
    };
	$scope.totalamount = $scope.sum($scope.users, 'spent');
});
app.filter('percentage', ['$filter', function ($filter) {
	return function (input, decimals) {
		return $filter('number')(input * 100, decimals) + '%';
	};
}]); 


})();