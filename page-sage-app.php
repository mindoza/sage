<div class="sage-app-wrap" ng-app="sageApp" >
  <div class="sage-app" ng-controller="sageAppController">
    <div ui-view></div>
  </div>
<div>
		<input type="text" ng-model="name">

		<p>Hello, {{name}}!</p>
	</div>
</div>
