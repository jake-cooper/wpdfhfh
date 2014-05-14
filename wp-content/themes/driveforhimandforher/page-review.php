<?php
    /**
    * Template Name: Review Post
    */
    get_header();
    $col= 'col-md-12';
    if ( is_active_sidebar( 'sidebar' ) ) {
        $col = 'col-md-9';
    }

    ?>

    <section id="reviews">
        <div class="container">
            <div class="row">
                <div id="content" class="site-content <?php echo $col; ?>" role="main">
                    <header class="entry-header col-sm-12">
                        <div class="col-sm-2">
                            <div class="date-wrap">
                                <span class="date magenta-bg"><time class="entry-date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('j'); ?></time></span>
                                <span class="month"><time class="entry-date" datetime="<?php the_time( 'c' ); ?>"><?php the_time('M'); ?></time></span>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <?php if ( is_single() ) { ?>
                            <h1 class="entry-title"><?php the_title(); ?>
                                <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right">', '</small>' ); ?>
                            </h1>
                            <?php } else { ?>
                            <h2 class="entry-title">
                                <a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
                                <?php edit_post_link( __( 'Edit', ZEETEXTDOMAIN ), '<small class="edit-link pull-right">', '</small>' ); ?>
                            </h2>
                            <?php } //.entry-title ?>

                        </div>
                        <div class="col-sm-2">
                            <div class="author">
                                <?php echo __('By', ZEETEXTDOMAIN ); ?> <?php the_author_posts_link() ?>
                            </div>
                        </div>
                        <div class="col-sm-10">
                            <div>
                                <h4 class="entry-title">
                                    <?php the_title(); ?>
                                </h4>
                            </div>
                        </div>
                        <h4><?php _e('Our Location', ZEETEXTDOMAIN); ?></h4>
                            
                        
                    </header>
                </div><!--/#content-->
                
            </div><!--/.row-->
        </div><!--/.container-->
    </section><!--/#contact-us-->

    <?php get_footer(); ?>