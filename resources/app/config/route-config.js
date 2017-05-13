angular
  .module('app')
  .config(config);

function config($stateProvider, $urlRouterProvider) {
  $stateProvider
    .state('dashboard', {
      url: '/dashboard',
      templateUrl: 'public/dashboard.html',
      controller: 'dashboardController'
    })
    .state('expense', {
      url: '/expense',
      templateUrl: 'public/expense.html',
      controller: 'expenseController',
      controllerAs: "expensctrl"
    })
    .state('invoice', {
      url: '/invoice',
      templateUrl: 'public/invoice.html',
      controller: 'invoiceController',
      controllerAs: 'invoicectrl'
    })
    .state('msg', {
        url: '/messageboard',
        templateUrl: 'public/messageboard.html',
        controller: 'messageboardController',
        controllerAs: 'msgctrl'
    })
    .state('reccurr', {
        url: '/reccurrbill',
        templateUrl: 'public/reccurrbill.html',
        controller: 'reccurrbillController',
        controllerAs: 'reccurrctrl'
    })
    .state('profile', {
        url: '/profile',
        templateUrl: 'public/profile.html',
        controller: 'profileController',
        controllerAs: 'profilectrl'
    })
    .state('settings', {
      url: '/settings',
      templateUrl: 'public/settings.html',
      controller: 'settingsController'
    })
    $urlRouterProvider.otherwise('/dashboard');
}
