<?php get_template_part('templates/page', 'header'); ?>

<?php if (!have_posts()) : ?>
  <div class="alert alert-warning">
    <?php _e('Sorry, no results were found.', 'sage'); ?>
  </div>
  <?php get_search_form(); ?>
<?php endif;

?>
<div ng-app = "myapp">
	<!-- one example -->
        <h3>DIY binding with Angular.js USE - multi form filling values</h3>    
        Name: <input ng-model="name" type="text"/>
        <br>
        Name: <input ng-model="name" type="text"/>
        <br>
        Name: <input ng-model="name" type="text"/>
        <br>
        Hello {{name}}
        <!-- one example end -->  


        <!-- two example -->
        <h3>DIY binding with Angular.js</h3>    
        First name: <input ng-model="firstName" type="text"/>
        <br>
        Last name: <input ng-model="lastName" type="text"/>
        <br>
        Hello {{firstName}} {{lastName}}
        <!-- two example end -->

        <!-- third example -->
        <!-- in header -->
        <script>
            // this is call function controller but it bad coding because 
            // it polutes global name space (use nameCtrl var name) when app 
            // became more complex. for proper way use next example
            function NameCtrl($scope) {  //Ctrl just angular convention for controller
                $scope.firstName = 'Mindaugas';
                $scope.lastName = 'Grigonis';
            }
        </script>
        <!-- <body ng-controller = "NameCtrl"> -->
        <!-- try to replace <body ng-controller = "NameCtrl"> -->
        <div ng-controller="NameCtrl"><!-- use this function as controller -->
            <h3>DIY binding with Angular.js + Controller</h3>
            First name: <input ng-model="firstName" type="text"/>
            <br>
            Last name: <input ng-model="lastName" type="text"/>
            <br>
            Hello {{firstName}} {{lastName}}
        </div>
        <!-- third example end -->
        
        
        <!-- third example -->
        <!-- in header 
        <html ng-app>  // this may be anywhere in dom -->
        <script>
            // this not poluts global name space
            // this controller can be use in any part html, body, div , tr,
            // you can use many of this apps in page
            var nameApp = angular.module('nameApp', []);
            nameApp.controller('NameCtrl', function($scope) {
                $scope.firstName = 'Mindaugas';
                $scope.lastName = 'Grigonis';
            }
        </script>
        <!-- <body ng-controller = "NameCtrl"> -->
        <!-- try to replace <body ng-controller = "NameCtrl"> -->
        <div ng-controller="NameCtrl">
            <h3>DIY binding with Angular.js <br>
                + Controller and proper angular way,<br>
                not polute global space
            </h3>
            First name: <input ng-model="firstName" type="text"/>
            <br>
            Last name: <input ng-model="lastName" type="text"/>
            <br>
            Hello {{firstName}} {{lastName}}
        </div>
</div> 

<div ng-controller="mycontroller">
	<article ng-repeat="post in posts">
		<h3>{{ post.title }}</h3>
		<p>{{ post.excerpt }}</p>
	</article>
</div>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format()); ?>
<?php endwhile; ?>

<?php the_posts_navigation(); ?>
