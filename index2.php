<!DOCTYPE html>
<html ng-app>
<head>
<script src="https://code.angularjs.org/1.0.7/angular.min.js"></script>
<meta charset=utf-8 />
<title>ng-controller</title>
</head>
<body>
  
   
	<div ng-controller="TodoCrtl">
		My name is {{ name }}!
		<h1>{{ rate }}</h1>
	</div>
	
    
  
</body>

<script>
function TodoCrtl($scope) {
    
  $scope.name = "Anna";
  $scope.rate = 100;
 
}
</script>
</html>


