<!DOCTYPE html>
<html ng-app="scotchApp">
    <head>
        <!-- SCROLLS -->
        <!-- load bootstrap and fontawesome via CDN -->
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" />
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.0/css/font-awesome.css" />

        <!-- SPELLS -->
        <!-- load angular via CDN -->
        <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.2.25/angular-route.js"></script>
    </head>

    <!-- define angular controller -->
    <body ng-controller="mainController">

        <div class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Brand</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li><a href="#/">Home</a></li>
                        <li><a href="#/about">About Us</a></li>
                        <li><a href="#/contact">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- MAIN CONTENT AND INJECTED VIEWS -->
        <div id="main">
            <!-- angular templating -->
            <!-- this is where content will be injected -->
            <div ng-view></div>
        </div>
        <script>
                            // script.js

                            // create the module and name it scotchApp
                            // also include ngRoute for all our routing needs
                            var scotchApp = angular.module('scotchApp', ['ngRoute']);

                            // configure our routes
                            scotchApp.config(function ($routeProvider) {
                                $routeProvider

                                        // route for the home page
                                        .when('/', {
                                            templateUrl: 'pages/home.html',
                                            controller: 'mainController'
                                        })

                                        // route for the about page
                                        .when('/about', {
                                            templateUrl: 'pages/about.html',
                                            controller: 'aboutController'
                                        })

                                        // route for the contact page
                                        .when('/contact', {
                                            templateUrl: 'pages/contact.html',
                                            controller: 'contactController'
                                        });
                            });

                            // create the controller and inject Angular's $scope
                            scotchApp.controller('mainController', function ($scope) {
                                // create a message to display in our view
                                $scope.message = 'Everyone come and see how good I look!';
                            });

                            scotchApp.controller('aboutController', function ($scope) {
                                $scope.message = 'Look! I am an about page.';
                            });

                            scotchApp.controller('contactController', function ($scope) {
                                $scope.message = 'Contact us! JK. This is just a demo.';
                            });
        </script>
    </body>
</html>