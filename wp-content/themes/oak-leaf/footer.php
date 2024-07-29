				<footer class="footer" role="contentinfo">
					<div class="inner-footer">
						<div class="grid-x grid-margin-x grid-padding-x">
	  						<div class="small-12 medium-12 large-12 cell">
	  							<nav role="navigation">
				                  <ul class="menu align-center-middle text-center">
				              			<li><div class="footer-logo" alt="logo"><?php $footerLogo = get_template_directory_uri() . '/assets/images/tree.svg'; echo file_get_contents($footerLogo); ?></div></li>
				              		</ul>
		    					</nav>
		    				</div>
            			</div>
			            <div class="grid-x grid-margin-x grid-padding-x align-center-middle text-center">
				            <div class="small-12 medium-12 large-12 cell">
				                <nav role="navigation">
				                  	<ul class="menu footer-links align-center-middle text-center">
				                    	<li class="text-center wrapping-footer-links"><?php joints_footer_links(); ?></li>
				                  	</ul>
				                </nav>
				            </div>
			            </div>
			            <div class="grid-container-full source-org copyright">
				            <div class="grid-x grid-margin-x grid-padding-x align-center-middle text-center">
				    			<div class="small-12 medium-12 large-12 cell">
				    				<p class="text-center">&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>, Ripon, CA</p>
				    			</div>
				            </div>
			            </div>
					</div> <!-- end #inner-footer -->
				</footer> <!-- end .footer -->
			</div>  <!-- end .off-canvas-content -->
		</div> <!-- end .off-canvas-wrapper -->
		<?php wp_footer(); ?>
	</body>
</html> <!-- end page -->
