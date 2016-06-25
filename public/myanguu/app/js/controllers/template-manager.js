app.controller('TemplateManagerCtrl', ['$scope', '$filter', '$http', 'editableOptions', 'editableThemes', '$controller',  
  function($scope, $filter, $http, editableOptions, editableThemes, $controller){
    $controller('EpitomeTechtypesCtrl', {$scope: $scope}); //This works

    $scope.getTemplateManager = function () {
        return "partials/templates/template-manager.html";
    };  

    $scope.getTemplateGenerators = function () {
        return "partials/templates/template-generators.html";
    };  
    $scope.randomName = "THIS IS THE RANDOM NAME FOR TESTING";

    $scope.multipleDemo = {};
    $scope.lastRemoved = {};

    $scope.removed = function (item, model) {
      console.log("we are in the removed");
      $scope.lastRemoved = {
          item: item,
          model: model
      };
    };

    $scope.people = [
      { name: 'Adam',      email: 'adam@email.com',      age: 12, country: 'United States' },
      { name: 'Amalie',    email: 'amalie@email.com',    age: 12, country: 'Argentina' },
      { name: 'Estefanía', email: 'estefania@email.com', age: 21, country: 'Argentina' },
      { name: 'Adrian',    email: 'adrian@email.com',    age: 21, country: 'Ecuador' },
      { name: 'Wladimir',  email: 'wladimir@email.com',  age: 30, country: 'Ecuador' },
      { name: 'Samantha',  email: 'samantha@email.com',  age: 30, country: 'United States' },
      { name: 'Nicole',    email: 'nicole@email.com',    age: 43, country: 'Colombia' },
      { name: 'Natasha',   email: 'natasha@email.com',   age: 54, country: 'Ecuador' },
      { name: 'Michael',   email: 'michael@email.com',   age: 15, country: 'Colombia' },
      { name: 'Nicolás',   email: 'nicolas@email.com',    age: 43, country: 'Colombia' }
    ];

    $scope.testme = function() {
      console.log('I am in the testme');
      console.dir($scope.projects);
    };
}]);
