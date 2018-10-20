registerapp.controller('ctrl', function ($scope, $http) {
    $scope.accounttypes = ["Recruiter", "Seeker"];
    $scope.schoollevel = ["Undergraduate", "Graduate"];

    $scope.submitrecruiter = function(){
        alert("Recruiter has been submitted");
        $scope.selectedtype = null;
    }

    $scope.submitseeker = function(){
        alert("Seeker has been submitted");
    }
});