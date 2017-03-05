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
	<a ui-sref="index.lottery({foo: '2007'})">Click here to load lottery above:</a>
	<a title="euromillions ticket checker" href="?page_id=659">ticket checker page</a><br>
	<a title="latest results" href="?page_id=132">show last draw</a><br>
	<p>Here you can find all history of Euromillions.</p>
	<div class="btn-group">
		<label class="btn btn-primary" ng-model="radioModel" uib-btn-radio="'Left'">Balls view</label>
		<label class="btn btn-primary" ng-model="radioModel" uib-btn-radio="'Middle'">Numbers view</label>
	</div>

	<input type="radio" name="choice" title="view results like numbers " value="view_n" %s 
		style=" font-weight: bold; margin:5px;">Numbers view ( Paid members only )<br>
	<input type="radio" name="choice" title="view results like balls" value="view_b" %s 
		style=" font-weight: bold; margin:5px;">Balls view<br>
    <div ui-view></div>
  </div>
</div>
