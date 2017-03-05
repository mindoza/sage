<?php
/**
 * Template Name: history
 */
?>

<?php get_template_part('templates/page', 'header'); ?>
<div class="sage-app-wrap" ng-app="sageApp" >
 <div class="sage-app" ng-controller="sageAppController">
 <!-- <div ui-view></div> -->

			<div class=\"hentry\">
				<div class=\"boxes box-header-middle round-corners-top\">
				<h3>Full Euromillions Lottery Results</strong></h3></div>
				<div class=\"entry-content\" style=\" padding: 5px; \">
				<p style=\" padding:0px 22px;\"><img class=\"size-medium sq_image alignleft\" title=\"euromillions results history\" 
				src=\"https://www.national-lottery.co.uk/player/i/game/em_results_logo.png\" alt=\"euromillions results history\" 
				width=\"68\" height=\"68\" /></p>
				


			<h2>Full Euromillions Results History:</h2>
			<a title=\"euromillions results history\" href=\"?page_id=659\">ticket checker page</a><br>
			<a title=\"euromillions results history\" href=\"?page_id=132\">show last draw</a><br>

			<p style=\" padding:0px 22px;\">Here you can find all history of Euromillions.</p>
			<form action=\"%s\" method=\"post\">
			<input type=\"radio\" name=\"choice\" title=\"view results like numbers \" value=\"view_n\" %s 
			style=\" font-weight: bold; margin:5px;\">Numbers view ( Paid members only )<br>
			<input type=\"radio\" name=\"choice\" title=\"view results like balls\" value=\"view_b\" %s 
			style=\" font-weight: bold; margin:5px;\">Balls view<br>

<div id="top_partit" ><!--////////////   end of top      /////////-->
<?php	$myReceiver = new MyReceiver($wpdb,$aa_strings,"euro","all_history_check");

		$myForms = new MyForms($aa_strings, $myReceiver); ?>	
		
</div>

<div id="top_partit" ><!--///////////   end of top   //////////////-->
<?php $myForms->show_my_form(); ?>
</div>

<?php	$myContent = new MyContent($wpdb,$aa_strings,$myReceiver,$myForms); 
		$myContent->table_generatorius(); ?>

