'use strict';

/**
 * Config for the router
 */
angular.module('app')
    .config(
        ['$stateProvider', '$urlRouterProvider', 'JQ_CONFIG',
            function($stateProvider, $urlRouterProvider, JQ_CONFIG) {

                $urlRouterProvider
                    .otherwise('/app/dashboard');
                $stateProvider
                    .state('app', {
                        abstract: true,
                        url: '/app',
                        templateUrl: 'partials/app-custom.html'
                    })
                    .state('app.dashboard', {
                        url: '/dashboard',
                        templateUrl: 'partials/soc-dashboard.html',
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load([ 
                                        'js/controllers/vectormap.js'                                    ]);
                                }
                            ]
                        }
                    })
                    .state('app.epitome', {
                        url: '/epitome',
                        template: '<div ui-view class=""></div>'
                    })
                    .state('app.epitome.domain', {
                        url: '/domain',
                        templateUrl: 'partials/epitome-domain.html',
                        controller: 'EpitomeDomainCtrl',
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load('xeditable').then(
                                        function() {
                                            return $ocLazyLoad.load('js/controllers/epitome-domain.js');
                                        }
                                    );
                                }
                            ]
                        }
                    })
                    .state('app.epitome.techtypes', {
                        url: '/techtypes',
                        templateUrl: 'partials/epitome-techtypes.html',
                        controller: 'EpitomeTechtypesCtrl',
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load('xeditable').then(
                                        function() {
                                            return $ocLazyLoad.load('js/controllers/epitome-techtypes.js');
                                        }
                                    );
                                }
                            ]
                        }
                    })
                    .state('app.template', {
                        url: '/template',
                        template: '<div ui-view class=""></div>'
                    })
                    .state('app.template.manager', {
                        url: '/manager',
                        templateUrl: 'partials/template-manager.html',
                        controller: 'TemplateManagerCtrl',
                        resolve: {
                            deps: ['$ocLazyLoad',
                                function($ocLazyLoad) {
                                    return $ocLazyLoad.load('xeditable').then(
                                        function() {
                                            return $ocLazyLoad.load('js/controllers/epitome-techtypes.js');
                                        }
                                    )
                                    .then(
                                      function(){
                                           return $ocLazyLoad.load('js/controllers/template-manager.js');
                                        }
                                    );
                                }
                            ]
                        }
                    })
            }
        ]
    );
