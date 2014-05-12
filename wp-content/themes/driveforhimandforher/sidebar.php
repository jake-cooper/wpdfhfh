<?php if ( is_active_sidebar( 'sidebar' ) ) { ?>
    <div id="sidebar" class="col-md-3" role="complementary">
        <div class="sidebar-inner">
            <aside class="widget-area">
                <?php dynamic_sidebar( 'sidebar' ); ?>
            </aside>
        </div>
    </div>
<?php }