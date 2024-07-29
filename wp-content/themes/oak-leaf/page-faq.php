<?php
/******************
Template Name: FAQ
******************/ ?>

<?php get_header(); ?>


	<div class="content">
		<div class="inner-content">
		    <main class="main" role="main">
					<section>
						<div class="grid-container">
							<div class="grid-x grid-margin-x grid-margin-y">
								<div class="cell small-10 small-offset-1 text-center large-text-left">
									<h1 class="page-title"><?php the_title(); ?></h1>
								</div>
							</div>
						</div>
					</section>
					<!-- Seperator Bar -->
					<span class="seperator-bar-alt"></span>
					<section>
						<div class="grid-container">
							<div class="grid-x grid-margin-x grid-margin-y">
								<div class="cell small-10 small-offset-1 medium-8 medium-offset-2 large-6 large-offset-3">
									<?php the_content(); ?>
									<?php
										if( have_rows('faq') ):
											echo '<ul class="accordion" data-accordion data-multi-expand="true" data-allow-all-closed="true">';
												while( have_rows('faq') ): the_row();
													// vars
													$questionTitle = get_sub_field('question_title');
													$questionDescription = get_sub_field('question_description');

													echo '<li class="accordion-item" data-accordion-item>';
														echo '<a href="#" class="accordion-title"><span>' . $questionTitle . '</span></a>';
														echo '<div class="accordion-content" data-tab-content>';
															echo '<p>' . $questionDescription . '</p>';
														echo '</div>';
													echo '</li>';
													echo '<span class="seperator-bar-faq"></span>';

												endwhile;
											echo '</div>';
										endif;
									?>
								</div>
							</div>
						</div>
					</section>
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
