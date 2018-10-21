registerapp.controller('ctrl', function ($scope, $http) {
    $scope.accounttypes = ["Recruiter", "Seeker"];
    $scope.schoollevel = ["Undergraduate", "Graduate"];

    $scope.submitrecruiter = function(){
        alert("Recruiter has been submitted");
        $scope.selectedtype = null;
    }

    $scope.submitseeker = function(){
        alert("Seeker has been submitted");
        $scope.selectedtype = null;
    }
});

loginapp.controller('loginctrl', function ($scope, $http) {
    $scope.loginfailed = false;

    $scope.login = function(){
        $http.post("login.php", {"username":$scope.username,"psw":$scope.psw})
        .then(function(response){
            if (response.data == 0) {
                $scope.loginfailed = !$scope.loginfailed;
            }else{
                window.location.href = "register.php";
            }
        });
    }
       
});

seekapp.controller('seekctrl', function ($scope, $http) {
    $scope.jobs = [{cname:"Nortwest Missouri State University", email:"info@nwmissouri.edu", phone:"(660) 541-1234", title:"This is a job", descr:"This is a description", logo:"NWprofilePic.png"}, {cname:"Nortwest Missouri State", email:"info@nwmissouri.edu", phone:"(660) 541-1234", title:"This is a job", descr:"This is a description", logo:"NWprofilePic.png"}];

    $scope.next = function(){
        $scope.jobs.shift();
    }
       
});