var login = angular.module('login', []);

login.controller('SigninFormController', function($scope,$http,CSRF_TOKEN){
  	$scope.login=function() {	
  		$http({
			method:"POST",
  			url:"/signinAction",
  			headers: {'Content-Type' : 'application/x-www-form-urlencoded'},
  			data:$.param({
  					'_token':CSRF_TOKEN,
  					'username': $scope.user.email,
  					'password': $scope.user.password
  				})
  		}).success(function(data){
  			if (data) {
  				//跳转
  			}else{
  				//返回错误
  				$scope.authError=data
  			};	
  		});
  	};
});

