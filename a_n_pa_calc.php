<?php
/*
Template Name: a_n_pa_calc
*/
/**
 * @author mindoza
 * @copyright 2013
 */
?>
<?php get_header();?>
<script type="text/javascript" src="http://howto7.com/wp-content/themes/twentyeleven_child/a_form_validation.js"></script>
<?php	require ("a_receive.php") ;                     // eto reseive
		require ("a_my_forms.php") ;             // eto formi 
		require ("a_my_content.php") ;             // eto formi 
		require ("a_right_column.php") ;             // eto right
?>			
<div id="top_partit" style=" display:block; width:100%; height:360 px; "><!--/////////////////////   end of top      ///////////////////////////-->
<?php //$forma->show_my_formt("num_cal"); ?>
<?php //$forma->show_my_formt("sta_cal"); ?>
<?php $forma->show_my_formt("num_pai"); ?>
<?php //$forma->show_my_formt("sta_pai"); ?>
<?php //$forma->show_my_formt("num_fre"); ?>
<?php //$forma->show_my_formt("sta_fre"); ?>
<?php //$forma->show_my_formt("num_cha"); ?>
<?php //$forma->show_my_formt("sta_cha"); ?>
<?php $trecias = New rightColumn($wpdb,$forma->na_dorozku(),$forma->getting_get()); 
	  $trecias->show_right_coll();
	//var_dump($_POST['form_nameq']);
	//var_dump($forma->na_dorozku("num_cal"));
	//echo $forma->list_of_queries(); ?>
</div>
<?php $contentas = New myContent($wpdb,$forma->na_dorozku()); 
	  $contentas->table_generatorius(); ?>
<?php get_footer(); ?>