var app_shop = angular.module('appShop', [],function($interpolateProvider){
    $interpolateProvider.startSymbol('<%');
    $interpolateProvider.endSymbol('%>');
});
app_shop.controller('pizzaShop', function($scope,$http) {
});