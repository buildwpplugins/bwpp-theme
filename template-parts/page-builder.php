<?php

if ( function_exists('the_field') ) :

	// check if the flexible content field has rows of data
	if( have_rows('page_builder') ): ?>

		<div class="page-builder clear">

	    <?php while ( have_rows('page_builder') ) : the_row();

	        if( get_row_layout() == 'content' ): ?>

	        	<div class="layout clear">

		        	<div class="layout-content clear give-padding container">

		        		<?php the_sub_field('content'); ?>

		        	</div>

	        	</div>

	       <?php elseif ( get_row_layout() == 'cta' ) :  ?>

	       		<div class="layout clear">

		       		<div class="layout-cta clear give-padding container">

			        	<div class="cta-title"><?php the_sub_field('title'); ?></div>

			        	<div class="cta-subtitle"><?php the_sub_field('subtitle'); ?></div>

			        	<?php if ( ! empty( get_sub_field( 'button_text' ) ) && ! empty( get_sub_field( 'link' ) ) ) : ?>
							
							<div class="centered"><a href="<?php the_sub_field('link'); ?>" class="button big cta-button"><?php the_sub_field( 'button_text' ); ?></a></div>

			        	<?php endif; ?>

			        </div>

		        </div>

           <?php elseif ( get_row_layout() == 'oembed' ) :  ?>

           		<div class="layout clear">

	           		<div class="layout-oembed clear give-padding container">

	    	        	<?php the_sub_field('oembed'); ?>

	    	        </div>

    	        </div>

           <?php elseif ( get_row_layout() == 'form' ) :  ?>

           		<div class="layout clear">

	           		<div class="layout-form clear give-padding container">

	           			<div class="layout-section-title"><?php the_sub_field('title'); ?></div>

	    	        	<?php $form = get_sub_field('form'); ?>

	    	        	<?php echo do_shortcode( "[gravityform id='{$form}' title='false' description='false' ajax='true']" ); ?>

	    	        </div>

    	        </div>

    	    <?php elseif ( get_row_layout() == 'podcast' ) :  ?>

           		<div class="layout clear">

	           		<div class="layout-podcast clear give-padding container">

	    	        	<?php if ( ! get_sub_field( 'podcast' ) ) : ?>

	    	        		<?php $podcast = get_posts( array( 
	    	        			'post_type' => 'podcast',
	    	        			'posts_per_page' => 1, 
	    	        		) );

	    	        		$podcast = empty( $podcast[0] ) ? false : $podcast[0];

	    	        		if ( $podcast ) : ?>

								<div class="layout-section-title">Latest Podcast Episode</div>

		    	        		<?php echo do_shortcode( "[podcast_episode episode='$podcast->ID' content='title,player,details']" ); ?>

		    	        		<p class="alignright"><a href="<?php echo get_permalink( $podcast->ID ); ?>">View Podcast</a></p>
	    	        		
	    	        		<?php endif;

	    	        		?>

	    	        	<?php else : ?>

	    	        		<?php $podcast = get_sub_field('podcast'); ?>

	    	        		<div class="layout-section-title">Featured Podcast Episode</div>
	    	        		
	    	        		<?php echo do_shortcode( "[podcast_episode episode='$podcast->ID' content='title,player,details']" ); ?>

	    	        		<p class="alignright"><a href="<?php echo get_permalink( $podcast->ID ); ?>">View Podcast</a></p>

	    	        	<?php endif; ?>

	    	        </div>

    	        </div>

            <?php endif; ?>

	    <?php endwhile; ?>

	    </div>

	<?php endif; ?>

<?php endif;

// End of File
