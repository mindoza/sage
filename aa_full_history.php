<?php
/*
Template Name: aa_full_history
*/
/**
 * @author mindoza
 * @copyright 2014/04/21
 */ ?>
 

<?php get_template_part('templates/page', 'header'); ?>
<div class="sage-app-wrap" ng-app="sageApp" >
  <div class="sage-app" ng-controller="sageAppController">
  <!-- <div  ng-controller="lotteryCtrl"> -->
	<a ui-sref="index.lottery()">Click here to load lottery above:</a>
	<br>
	<p>Here you can find all history of Euromillions.</p>
    <div ui-view></div>
  </div>
</div>
