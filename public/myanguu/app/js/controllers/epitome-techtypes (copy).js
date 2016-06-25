app.controller('EpitomeTechtypesCtrl', ['$scope', '$filter', '$http', 'editableOptions', 'editableThemes', 
  function($scope, $filter, $http, editableOptions, editableThemes){
    editableThemes.bs3.inputClass = 'input-sm';
    editableThemes.bs3.buttonsClass = 'btn-sm';
    editableOptions.theme = 'bs3';

    $scope.tabs = [
      { title:'Profile', icon:'user', content:'You can use all Bootstrap plugins purely through the markup API without writing a single line of JavaScript. This is Bootstrap&apos;s first-class API and should be your first consideration when using in a plugin.' },
      { title:'Messages', icon:'envelope', content:'That said, in some situations it may be desirable to turn this functionality off. Therefore, we also provide the ability to.', disabled: true  },
      { title:'Settings', icon:'cog', content:'We also believe you should be able to use all Bootstrap plugins purely through the JavaScript API. All public APIs are single, chainable methods, and return the collection acted upon.' },
    ];
    
    $scope.sections = [
        {id:2, name: "Career Highlights", type: "single", smallname: "CH"},
        {id:3, name: "Career Achievements", type: "single", smallname: "CA"}
        // {id:4, name: "Professional Experience", type: "projects"}
    ];

    $scope.projects = [
        {id:1, name: "FishPond Limited", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "FISH"},
        {id:2, name: "GE", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "GE"},
        {id:3, name: "Value Labs", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "VLABS"},
        {id:3, name: "RANDOM", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "RAN"},
        {id:3, name: "ORBITREMIT", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "ORBIT"},
        {id:3, name: "FISHER", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "SECO"},
        {id:3, name: "wiki", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "WIKI"}
    ];

    $scope.techTypesObject = {};
    $scope.techTypes = [ 
      {id:1, name: "ReactJS"} 
    ];

    $scope.techContent = [
      {id: 1,tech_types_id: 1, content: "This is the carrer Highlights string 1", section_id: 2, project_id: null},
      {id: 2,tech_types_id: 1, content: "This is the Carrer Achievements String 1", section_id: 3, project_id: null},
      {id: 3,tech_types_id: 1, content: "This is Fishpond String 1", section_id: 4, project_id: 1}
    ];

    $scope.headers = [
      {id: 1, name: 'This is the random text This is the random text This is the random text This is the random text '},
      {id: 2, name: 'This is the random text This is the random text This is the random text This is the random text This is the random text This is the random text This is the random text This is the random text This is the random text This is the random text This is the random text This is the random text '},
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
        name: ''
      };
      $scope.headers.push($scope.insertedHead);
      console.log('we are in addSingleHeader');
    };

    
    //Countries
    $scope.addCountry = function() {
        console.log('we are in the add country');
     var item  = {name: 'AAAAAAAAAAAAAAAAAAAA', code: 'AF'};
       $scope.countries.push(item);
    };  
    $scope.removeSelectedCountry = function() {
      console.log('we are in the removeSelectedCountry');
      console.dir(JSON.stringify( $scope.country.selected));
      for(var i = 0; i <  $scope.countries.length; i++) {
          if( $scope.strcmp( $scope.countries[i].name, $scope.country.selected.name ) == 0) {
              $scope.countries.splice(i, 1);
              $scope.country.selected =  $scope.countries[++i];
              break;
          }
      }
    };     
    $scope.strcmp = function (a, b) {  
      return (a<b?-1:(a>b?1:0));  
    };
    $scope.country = {};
    $scope.countries = [ // Taken from https://gist.github.com/unceus/6501985
        {name: 'Afghanistan', code: 'AF'},
        {name: 'Åland Islands', code: 'AX'},
        {name: 'Albania', code: 'AL'},
        {name: 'Algeria', code: 'DZ'},
        {name: 'American Samoa', code: 'AS'},
    ];

}]);
