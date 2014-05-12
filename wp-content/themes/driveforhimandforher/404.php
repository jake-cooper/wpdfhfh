<?php get_header(); ?>
<div id="content" class="site-content" role="main">
	
    <div id="error" class="container ">
        <h1><?php _e( '404, Page not found', ZEETEXTDOMAIN );?>  <a class="btn btn-lg btn-danger" href="<?php echo home_url(); ?>"><?php _e( ' GO BACK TO THE HOMEPAGE ', ZEETEXTDOMAIN );?> <span class="glyphicon glyphicon-home"></span> </a> </h1>
        <p><?php _e( 'The Page you are looking for doesnt exist or another error occurred', ZEETEXTDOMAIN );?> </p>
        <div class="col-md-4 col-md-offset-4" ><?php get_search_form(); ?></div>
    </div><!--/#error-->
</div><!-- #content -->
<?php get_footer();