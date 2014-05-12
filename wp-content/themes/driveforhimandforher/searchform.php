<form role="search" method="get" id="searchform" action="<?php echo home_url( '/' ); ?>" role="form">
    <div class="input-group">
        <input type="text" value="" name="s" id="s" class="form-control input-lg" placeholder="<?php _e('Search', ZEETEXTDOMAIN); ?>" />
        <span class="input-group-btn ">
            <button class="btn btn-lg btn-danger" type="submit"><i class="icon-search"></i> Search</button>
        </span>
    </div>
</form>