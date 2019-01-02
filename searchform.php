 <form method="get" name="searchform" action="<?php bloginfo('url'); ?>/">
    <div class="search">
        <input name="s" type="text" value="<?php echo esc_attr(get_search_query()); ?>" style="width: 95%;" />
        <span class="button-wrapper">
            <span class="button-l"> </span>
            <span class="button-r"> </span>
            <input class="button" type="submit" name="search" value="<?php  echo esc_attr(__('Search', THEME_NS)); ?>" />
        </span>
    </div>
</form>
