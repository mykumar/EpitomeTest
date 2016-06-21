<!DOCTYPE html>
<html lang="en" ng-app="demo">
<head>
    <meta charset="utf-8">
    <title>AngularJS ui-select</title>

    <!--
      IE8 support, see AngularJS Internet Explorer Compatibility http://docs.angularjs.org/guide/ie
      For Firefox 3.6, you will also need to include jQuery and ECMAScript 5 shim
    -->
    <!--[if lt IE 9]>
      <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/es5-shim/2.2.0/es5-shim.js"></script>
      <script>
        document.createElement('ui-select');
        document.createElement('ui-select-match');
        document.createElement('ui-select-choices');
      </script>
    <![endif]-->

    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.0/angular-sanitize.js"></script>

    <!-- ui-select files -->

    <link rel="stylesheet" href="/assets/css/select.css">

    <script type="text/javascript" src="/assets/js/select.js"></script>
    <link rel="stylesheet" href="/assets/css/select.css">
    <script type="text/javascript" src="/assets/js/demo.js"></script>

    <!-- themes -->
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/select2/3.4.5/select2.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/css/selectize.default.css">
    <!-- <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/css/selectize.bootstrap2.css"> -->
    <!--<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.8.5/css/selectize.bootstrap3.css">-->

    <style>
        body {
            padding: 15px;
        }

        .select2 > .select2-choice.ui-select-match {
            /* Because of the inclusion of Bootstrap */
            height: 29px;
        }

        .selectize-control > .selectize-dropdown {
            top: 36px;
        }
        /* Some additional styling to demonstrate that append-to-body helps achieve the proper z-index layering. */
        .select-box {
          background: #fff;
          position: relative;
          z-index: 1;
        }
        .alert-info.positioned {
          margin-top: 1em;
          position: relative;
          z-index: 10000; /* The select2 dropdown has a z-index of 9999 */
        }
    </style>
</head>

<body class="ng-cloak" ng-controller="DemoCtrl as ctrl">
  <button class="btn btn-default btn-xs" ng-click="ctrl.enable()">Enable ui-select</button>
  <button class="btn btn-default btn-xs" ng-click="ctrl.disable()">Disable ui-select</button>
  <button class="btn btn-default btn-xs" ng-click="ctrl.clear()">Clear ng-model</button>

  <h3>Bootstrap theme <small>(remote data source)</small></h3>
  <p>Selected: {{ctrl.address.selected.formatted_address}}</p>
  <ui-select ng-model="ctrl.address.selected"
             theme="bootstrap"
             ng-disabled="ctrl.disabled"
             reset-search-input="false"
             style="width: 300px;"
             title="Choose an address">
    <ui-select-match placeholder="Enter an address...">{{$select.selected.formatted_address}}</ui-select-match>
    <ui-select-choices repeat="address in ctrl.addresses track by $index"
             refresh="refreshAddresses($select.search)"
             refresh-delay="0">
      <div ng-bind-html="address.formatted_address | highlight: $select.search"></div>
    </ui-select-choices>
  </ui-select>

  <h3>Select2 theme</h3>
  <p>Selected: {{ctrl.person.selected}}</p>
  <ui-select ng-model="ctrl.person.selected" theme="select2" ng-disabled="ctrl.disabled" style="min-width: 300px;" title="Choose a person">
    <ui-select-match placeholder="Select a person in the list or search his name/age...">{{$select.selected.name}}</ui-select-match>
    <ui-select-choices repeat="person in ctrl.people | propsFilter: {name: $select.search, age: $select.search}">
      <div ng-bind-html="person.name | highlight: $select.search"></div>
      <small>
        email: {{person.email}}
        age: <span ng-bind-html="''+person.age | highlight: $select.search"></span>
      </small>
    </ui-select-choices>
  </ui-select>

  <h3>Selectize theme</h3>
  <p>Selected: {{ctrl.country.selected}}</p>
  <ui-select ng-model="ctrl.country.selected" theme="selectize" ng-disabled="ctrl.disabled" style="width: 300px;" title="Choose a country">
    <ui-select-match placeholder="Select or search a country in the list...">{{$select.selected.name}}</ui-select-match>
    <ui-select-choices repeat="country in ctrl.countries | filter: $select.search">
      <span ng-bind-html="country.name | highlight: $select.search"></span>
      <small ng-bind-html="country.code | highlight: $select.search"></small>
    </ui-select-choices>
  </ui-select>
</body>
</html>
