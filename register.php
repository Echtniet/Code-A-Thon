<!DOCTYPE html>
<html>
	<head>
		<title>register page</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.4/angular.min.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	    <style type="text/css">

	    	input.ng-invalid.ng-dirty{
			    border-color: red;
			}
			input.ng-valid {
				border-color: green;
			}
			select.ng-dirty{
				border-color: green;
			}

	    </style>
	</head>

	<body>
		<div class="row" id="controller" ng-app="app" ng-controller="ctrl">
			<div class="col-lg-6 col-lg-offset-3 well">
				<div class="row">
					<form name="registerform">
						<div class="col-lg-12">
							<div class="row">
								<div class="col-lg-4">
									<label>Account type</label>
									<select ng-model="selectedtype"  class="form-control input-sm" ng-options="t for t in accounttypes">
										
									</select>
								</div>
							</div>
							<div ng-switch="selectedtype">
								<div ng-switch-when="Recruiter">
									<div class="row">
										<div class="col-lg-12">
											<label>Company Name:</label>
											<input type="text" name="cname" ng-model="$parent.cname" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<label>Email</label>
											<input type="email" name="cemail" ng-model="$parent.cemail" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-6">
											<label>Username</label>
											<input type="text" name="cusername" ng-model="$parent.cusername" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<label>Password</label>
											<input type="password" name="cpsw" ng-model="$parent.cpsw" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-6">
											<label>Re-Password</label>
											<input type="password" name="recpsw" ng-model="$parent.recpsw" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5">
											<label>Street</label>
											<input type="text" name="cstreet" ng-model="$parent.cstreet" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-3">
											<label>City</label>
											<input type="text" name="ccity" ng-model="$parent.ccity" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-2">
											<label>State</label>
											<input type="text" name="cstate" ng-model="$parent.cstate" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-2">
											<label>Zip</label>
											<input type="text" name="czip" ng-model="$parent.czip" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-2">
											<label>Phone area</label>
											<input type="number" name="carea" ng-model="$parent.carea" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-3">
											<label>local</label>
											<input type="number" name="clocal" ng-model="$parent.clocal" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<br>
										<div class="col-lg-2 col-lg-offset-5">
											<button class="btn btn-success" ng-disabled="registerform.$invalid" ng-click="submitrecruiter()">Register</button>
										</div>
									</div>
								</div>
								<div ng-switch-when="Seeker">
									<div class="row">
										<div class="col-lg-6">
											<label>First Name:</label>
											<input type="text" name="fname" ng-model="$parent.fname" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-6">
											<label>Last Name:</label>
											<input type="text" name="lname" ng-model="$parent.lname" class="form-control" ng-required="true">
										</div>										
									</div>
									<div class="row">
										<div class="col-lg-6">
											<label>Email</label>
											<input type="email" name="semail" ng-model="$parent.semail" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-6">
											<label>Username</label>
											<input type="text" name="susername" ng-model="$parent.susername" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-6">
											<label>Password</label>
											<input type="password" name="spsw" ng-model="$parent.spsw" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-6">
											<label>Re-Password</label>
											<input type="password" name="respsw" ng-model="$parent.respsw" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-5">
											<label>Street</label>
											<input type="text" name="sstreet" ng-model="$parent.sstreet" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-3">
											<label>City</label>
											<input type="text" name="scity" ng-model="$parent.scity" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-2">
											<label>State</label>
											<input type="text" name="sstate" ng-model="$parent.sstate" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-2">
											<label>Zip</label>
											<input type="text" name="szip" ng-model="$parent.szip" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-2">
											<label>Phone area</label>
											<input type="number" name="sarea" ng-model="$parent.sarea" class="form-control" ng-required="true">
										</div>
										<div class="col-lg-3">
											<label>local</label>
											<input type="number" name="slocal" ng-model="$parent.slocal" class="form-control" ng-required="true">
										</div>
									</div>
									<div class="row">
										<div class="col-lg-4">
											<label>School Level:</label>
											<select ng-model="$parent.selectedlevel"  class="form-control input-sm" ng-required="true">
												<option ng-repeat="l in schoollevel" value="{{l.level}}">{{l.level}}</option>
											</select>
										</div>
										
									</div>
									<div class="row">
										<br>
										<div class="col-lg-2 col-lg-offset-5">
											<button class="btn btn-success" ng-disabled="registerform.$invalid" ng-click="submitseeker()">Register</button>
										</div>
									</div>
								</div>
							</div>
						</div>
					</form>
				</div>
			</div>{{selectedlevel}}
		</div>
		<script src="js/jobdatingApp.js"></script>
		<script src="js/jobdatingControllers.js"></script>
	</body>
</html>