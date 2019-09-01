<form role="search" method="get" class="searchform zeneth-searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <input type="text" class="zeneth-form-control form-control" name="s" placeholder="<?php esc_attr_e( 'Search&hellip;', 'zeneth' ); ?>" value="<?php the_search_query(); ?>" >
</form>
