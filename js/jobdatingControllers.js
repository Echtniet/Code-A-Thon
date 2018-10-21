registerapp.controller('ctrl', function ($scope, $http) {
    $scope.accounttypes = ["Recruiter", "Seeker"];
    $scope.schoollevel = ["Undergraduate", "Graduate"];

    $scope.submitrecruiter = function(){
        $http.post("submitrecruiter.php", {"cname":$scope.cname,"cemail":$scope.cemail,"cusername":$scope.cusername,"cpsw":$scope.cpsw,"cstreet":$scope.cstreet,"ccity":$scope.ccity,"cstate":$scope.cstate,"czip":$scope.czip,"carea":$scope.carea,"clocal":$scope.clocal})
        .then(function(response){
            alert(response.data);
        });
    }

    $scope.submitseeker = function(){
        $http.post("submitseeker.php", {"username":$scope.username,"psw":$scope.psw})
        .then(function(response){
            if (response.data == 0) {
                $scope.loginfailed = !$scope.loginfailed;
            }else{
                window.location.href = "index.html";
            }
        });
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
                window.location.href = "index.html";
            }
        });
    }
       
});