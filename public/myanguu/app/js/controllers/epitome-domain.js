app.controller('EpitomeDomainCtrl', ['$scope', '$filter', '$http', 'editableOptions', 'editableThemes', 
  function($scope, $filter, $http, editableOptions, editableThemes){
    editableThemes.bs3.inputClass = 'input-sm';
    editableThemes.bs3.buttonsClass = 'btn-sm';
    editableOptions.theme = 'bs3';
    
    $scope.tabs = [
      { title:'Profile', icon:'user', content:'You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap&apos;s first-class API and should be your first consideration when using in a plugin.' },
      { title:'Messages', icon:'envelope', content:'That said, in some situations it may be desirable to turn this functionality off. Therefore, we also provide the ability to.', disabled: true  },
      { title:'Settings', icon:'cog', content:'We also believe you should be able to use all Bootstrap plugins purely through the JavaScript API. All public APIs are single, chainable methods, and return the collection acted upon.' },
    ];
    
    $scope.headers = [
      {id: 1, tag_name: 'name', value:'Elisha'},
      {id: 2, tag_name: 'email', value:'email@rmail.com'}
    ];
    $scope.saveHeader = function(data, id) {
      // console.log ("we are in the saveHeader");
      // console.dir(data);   
      // console.dir($scope.headers);
      //$scope.user not updated yet
      angular.extend(data, {id: id});
      // return $http.post('data/saveUser', data);
    };
    $scope.removeSingleHeader = function(index) {
      $scope.headers.splice(index, 1);
      // console.log('we are in removeSingleHeader');
      // console.dir(index);
    };
    $scope.addSingleHeader = function() {
      $scope.insertedHead = {
        id: $scope.headers.length+1,
        tag_name: '',
        value: null
      };
      $scope.headers.push($scope.insertedHead);
      console.log('we are in addSingleHeader');
    };
    
    
    //test
    $scope.myChkModelArray = [];
    $scope.myChkModel = true;
    $scope.myClickAllData = true;
    $scope.myClick = function(val) {
        console.dir($scope.myChkModelArray);
        console.log("we are in the myClick");
        console.dir($scope.headers);
        console.dir(val);
        index = $scope.getIndexOfHeaders(val);
        $scope.headers[index].check = !$scope.headers[index].check;
        // console.dir($scope.headers[val]);
    };    
    $scope.myClickAll = function() {
        console.log("we are in the myClickAll");
        console.dir($scope.myClickAllData);
        for (var i = 0; i < $scope.headers.length; i++) {
             $scope.headers[i].check = $scope.myClickAllData;
        }   
        $scope.myClickAllData = !$scope.myClickAllData;
    };    
    $scope.getIndexOfHeaders = function(id) {
        for (var i = 0; i < $scope.headers.length; i++) {
             if($scope.headers[i].id == id) { return i;}
        }   
        return -i;
        console.dir($scope.headers);
    };

    $scope.myFunctionRandom = function() {
        console.dir('we are in the myFunction');
        for (var i = 0; i < $scope.headers.length; i++) {
             $scope.headers[i].check = false;
        }   
        console.dir($scope.headers);
    };
    $scope.myFunctionRandom();
}]);
