<?php
/**
 * Template Name: template-zopa-zopa
 */
?>

  <?php get_template_part('templates/page', 'header'); ?>
<div class="sage-app-wrap" ng-app="sageApp" >
 <div class="sage-app" ng-controller="sageAppController">
    <div ui-view></div>
		<input type="text" ng-model="firstName">
		<input type="text" ng-model="lastName">

		<p>Hello, {{firstName}} {{lastName}}!</p>
		<ul>
			<li ng-repeat = "name in names">{{name}}</li>
		</ul>
	</div>
</div>
