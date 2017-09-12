<?php
/**
 * The template for displaying pages
  *Template Name:modal-iot1
 * @package WordPress
 * @subpackage ivp-hp
 * @since ivp-hp 1.0
 */

 get_header('modal')
?>
<div id="modal-include">
<div id="modal-options1" data-izimodal-group="group1" data-izimodal-loop="" data-izimodal-title="<?php echo get_post_meta($post->ID, _aioseop_title, true); ?>">
	<div class="modal-base">
			<?php
				if ( have_posts() ) :
					get_template_part( 'content', get_post_format() );
				else:
					get_template_part( 'content', 'none' );
				endif;
			?>
	</div>
</div>
</div>
<span class="js-edit_modal">
<?php wp_footer(); ?>
</span>
