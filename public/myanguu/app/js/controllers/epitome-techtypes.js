app.controller('EpitomeTechtypesCtrl', ['$scope', '$filter', '$http', 'editableOptions', 'editableThemes', 
  function($scope, $filter, $http, editableOptions, editableThemes){
    editableThemes.bs3.inputClass = 'input-sm';
    editableThemes.bs3.buttonsClass = 'btn-sm';
    editableOptions.theme = 'bs3';

    $scope.isEmpty = function(obj) {
      for(var prop in obj) {
          if(obj.hasOwnProperty(prop))
              return false;
      }
      return true;
    };

    $scope.myName = "OHH BABY I AM HERE";
    $scope.sections = [ ];
        // {id:2, name: "Career Highlights", type: "single", smallname: "CH"},
        // {id:3, name: "Career Achievements", type: "single", smallname: "CA"}
        // {id:4, name: "Professional Experience", type: "projects"}
    // ];

    $scope.projects = [];
        // {id:1, name: "FishPond Limited", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "FISH"},
        // {id:2, name: "GE", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "GE"},
        // {id:3, name: "Value Labs", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "VLABS"},
        // {id:3, name: "RANDOM", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "RAN"},
        // {id:3, name: "ORBITREMIT", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "ORBIT"},
        // {id:3, name: "FISHER", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "SECO"},
        // {id:3, name: "wiki", desc: "Asjkdjskad asjdjsakd", duration: "Oct 2014 to Present", clients: "", outsourced:"", smallname: "WIKI"}
    // ];
    $scope.techTypesObjectSelected = {};
    $scope.techTypesObject = {};
    $scope.techTypes = [ 
      {id:1, name: "ReactJS"} 
    ];

    $scope.techContent = [];

    $scope.getMainTemplateName = function () {
        return "partials/templates/epitome-techtypes.html";
    };  

    $scope.getTemplateName = function (smallName) {
        return "partials/templates/" + smallName + ".html";
    };  

    $scope.getTemplateData = function (smallName) {
        var result = [];
        for (var counter = 0; counter < $scope.techContent.length; counter++) {
            if($scope.techContent[counter].smallName === smallName){
              return $scope.techContent[counter].data;              
            }
        } 
        return result; 
    };  

    $scope.onSelected = function (selectedItem) {
        $http.get('data/epitome/techcontent.json').success(function(data) {
          $scope.techContent = data;
        });
        
        $scope.techTypesObjectSelected = selectedItem;
    };    
    $scope.deleteContent = function(index, smallName) {
      for (var counter = 0; counter < $scope.techContent.length; counter++) {  
        if($scope.techContent[counter].smallName === smallName) { 
            $scope.techContent[counter].data.splice(index, 1);
        }
      }  
    };
    $scope.addSingleRow = function(sectionId, projectId=null,smallName) {
      var tech_types_id = $scope.techTypesObjectSelected.id;
      var insertedRow = 
      {
        "id": 1,
        "tech_types_id": tech_types_id,
        "content": "",
        "section_id": sectionId,
        "project_id": projectId
      };
      for (var counter = 0; counter < $scope.techContent.length; counter++) {  
          if($scope.techContent[counter].smallName === smallName) { 
            $scope.techContent[counter].data.push(insertedRow);
            // $scope.projects.push(insertedRow);
          }  
      }    
    };

    $scope.init = function () {  
        $http.get('data/epitome/sections.json').success(function(data) {
          $scope.sections = data;
        });
        $http.get('data/epitome/projects.json').success(function(data) {
          $scope.projects = data;
        });
    };  


    $scope.init();
}]);
