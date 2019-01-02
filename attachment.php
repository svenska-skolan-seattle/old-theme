<?php get_header(); ?>
<div class="content-layout">
    <div class="content-layout-row">
        <div class="layout-cell content">
			<?php get_sidebar('top'); ?>
			<?php 
				if (have_posts()){
					the_post();
					get_template_part('content', 'attachment');
					comments_template();
				} else {
					theme_404_content();
				}
			?>				
			<?php get_sidebar('bottom'); ?>
          <div class="cleared"></div>
        </div>
    </div>
</div>
<div class="cleared"></div>
<?php get_footer(); ?>