registerapp.controller('ctrl', function ($scope, $http) {
    $scope.accounttypes = ["Recruiter", "Seeker"];
    $scope.schoollevel = ["Undergraduate", "Graduate"];
    $registerfailed = false;
    $scope.submitrecruiter = function(){
       $http.post("submitrecruiter.php", {"cname":$scope.cname,"cemail":$scope.cemail,"cusername":$scope.cusername,"cpsw":$scope.cpsw,"cstreet":$scope.cstreet,"ccity":$scope.ccity,"cstate":$scope.cstate,"czip":$scope.czip,"carea":$scope.carea,"clocal":$scope.clocal})
       .then(function(response){
            if (response.data == 1) {
                window.location.href = "login.php";
            }else{
                $registerfailed = true;
            }
       });
   }

   //change this one get all the values from html and make page submitseeker.php and add the values to databases
   $scope.submitseeker = function(){
       $http.post("submitseeker.php", {"fname":$scope.fname,"lname":$scope.lname,"semail":$scope.semail,"susername":$scope.susername,"spsw":$scope.spsw,"respsw":$scope.respsw,"sstreet":$scope.sstreet,"scity":$scope.scity,"sstate":$scope.sstate,"szip":$scope.szip,"sarea":$scope.sarea,"slocal":$scope.slocal,"sLevel":$scope.selectedlevel})
       .then(function(response){
        if (response.data == 1) {
            window.location.href = "login.php";
        }else{
            $registerfailed = true;
        }
           
       });
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