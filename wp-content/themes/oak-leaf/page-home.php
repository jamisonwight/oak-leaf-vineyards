<?php
/******************
Template Name: Home Template
******************/ ?>

<?php get_header(); ?>

	<div class="content">
		<div class="inner-content">
		    <main class="main" role="main">

				<!-- Header -->
				<div class="hero-section" style="background:url('<?php echo get_field('header_image');?>')center center no-repeat;">
				  <div class="hero-section-text">
						<div class="grid-container">
							<div class="grid-x grid-margin-x">
						    <div class="cell small-10 small-offset-1 medium-12 medium-offset-0 large-10 large-offset-1 logo text-center">
									<?php $logo = get_field('header_logo'); echo file_get_contents($logo); ?>
								</div>
							</div>
						</div>
				  </div>
				</div>

				<!-- Seperator Bar -->
				<span class="seperator-bar"></span>

				<!-- About -->
				<section class="about">
					<div class="grid-container">
						<div class="grid-x grid-margin-x grid-margin-y align-middle">
							<div class="cell small-6 small-offset-3 medium-4 medium-offset-4 large-3 large-offset-1">
								<img class="awards-logo" src="<?php echo get_field('award_logo');?>" alt="Awards logo">
							</div>
							<div class="cell small-10 small-offset-1 large-6 large-offset-1 text-center large-text-left">
								<h3><?php echo get_field('about_header'); ?></h3>
								<hr align="left" class="show-for-large" style="margin: 1.25rem 0;">
								<hr align="center" class="hide-for-large" style="margin: 1.25rem auto;">
								<p><?php echo get_field('about_paragraph');?></p>
							</div>
						</div>
					</div>
				</section>
				

				<!-- Seperator Bar -->
				<span class="seperator-bar-alt"></span>

				<!-- Wines -->
				<section class="wines">
					<?php
						if( have_rows('wines') ):
							echo '<div class="grid-container-full">';
								echo '<div class="grid-x grid-margin-x grid-margin-y grid-padding-y">';
									while( have_rows('wines') ): the_row();
										// vars
										$bottleImage = get_sub_field('bottle_image');
										$varietalTitle = get_sub_field('varietal_title');
										$varietalButtonText = get_sub_field('varietal_button_text');
										$varietalPDF = get_sub_field('varietal_details_pdf');

										echo '<div class="cell small-10 small-offset-1 medium-4 medium-offset-0 large-3 wine-item-cell text-align-center">';
											echo '<a href="' . $varietalPDF . '"><img class="wine-bottle" alt="Wine image" src="' . $bottleImage . '"></a>';
											echo '<h5 class="varietal-name"><a href="' . $varietalPDF . '">' . $varietalTitle . '</h5></a>';
											echo '<a href="' . $varietalPDF . '"><button class="button hollow">' . $varietalButtonText . '</button></a>';
										echo '</div>';

									endwhile;
								echo '</div>';
							echo '</div>';
						endif;
					?>
				</section>


			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
