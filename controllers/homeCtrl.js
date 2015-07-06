angular
  .module('app')
  .controller('homeCtrl', ['$scope', function($scope) {
    $scope.title="Internet, the final frontier!";
    $scope.pitch="When it comes to growing your business and getting your name out as much as possible, the Internet really is the final frontier.  Unfortunately for a lot of businesses, they just aren't equipped to handle such a task.  Whether it be a lack of time or technical know how, building a website can seem daunting. We here at Final Frontier Design & Development are going to take all that burden off your hands. We will talk with you to find out exactly what you want and based on that, give recommendations on how to proceed in launching your business into warp drive. If you'd like to know more, click the button below!";
    $scope.contact="Beam me up, Scotty!";
  }]);