registerapp.controller('ctrl', function ($scope, $http) {
    $scope.accounttypes = ["Recruiter", "Seeker"];
    $scope.schoollevel = ["Undergraduate", "Graduate"];

    $scope.submitrecruiter = function(){
        window.location.href = "login.php";
    }

    $scope.submitseeker = function(){
        window.location.href = "login.php";
    }
});

loginapp.controller('loginctrl', function ($scope, $http) {
    $scope.loginfailed = false;

    $scope.login = function(){
        $http.post("logincheck.php", {"username":$scope.username,"psw":$scope.psw})
        .then(function(response){
            if (response.data == 0) {
                $scope.loginfailed = !$scope.loginfailed;
            }else{
                window.location.href = "index.php";
            }
        });
    }
       
});

seekapp.controller('seekctrl', function ($scope, $http) {
    $scope.jobs = [{cname:"Nortwest Missouri State University", email:"info@nwmissouri.edu", phone:"(660) 541-1234", title:"This is a job", descr:"This is a description", logo:"NWprofilePic.png"}, 
    {cname:"The FED", email:"info@fed.gov", phone:"(660) 541-4321", title:"This is a fed job", descr:"For this position you need to design websites using php, angular, jquery, html, css, bootstrap", logo:"fedLogo.png"}];

    $scope.next = function(){
        $scope.jobs.shift();
    }
       
});