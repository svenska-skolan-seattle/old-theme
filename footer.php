		<div class="footer">
			<?php get_sidebar('footer'); ?>
			<div class="footer-text">
				<?php  echo do_shortcode(theme_get_option('theme_footer_content')); ?>
			</div>
		</div>
	</main>

	<div id="wp-footer">
		<?php wp_footer(); ?>
		<!-- <?php printf(__('%d queries. %s seconds.', THEME_NS), get_num_queries(), timer_stop(0, 3)); ?> -->
	</div>
</body>
</html>