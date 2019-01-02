<?php get_header(); ?>
<div class="content-layout">
    <div class="content-layout-row">
        <div class="layout-cell sidebar1">
          <?php get_sidebar('default'); ?>
          <div class="cleared"></div>
        </div>
        <div class="layout-cell content">
			<?php get_sidebar('top'); ?>
			<?php theme_404_content(); ?>
			<?php get_sidebar('bottom'); ?>
          <div class="cleared"></div>
        </div>
    </div>
</div>
<div class="cleared"></div>
<?php get_footer(); ?>