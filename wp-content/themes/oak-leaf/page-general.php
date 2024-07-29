<?php
/******************
Template Name: General Page Template
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
								<div class="cell small-10 small-offset-1">
									<?php the_content(); ?>
								</div>
							</div>
						</div>
					</section>
			</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
	</div> <!-- end #content -->

<?php get_footer(); ?>
