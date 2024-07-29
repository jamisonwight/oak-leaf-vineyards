<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>
<header class="header" role="banner">
  <div class="top-bar-container" data-sticky-container>
    <div class="sticky sticky-topbar" data-sticky data-options="anchor: page; marginTop: 0; stickyOn: small;">
      <div class="off-canvas-content" data-off-canvas-content>
        <div class="top-bar" id="top-bar-menu">
    			<div class="top-bar-left float-left">
    				<ul class="menu">
    					<li><a href="<?php echo home_url(); ?>"><div class="nav-bar-logo" alt="logo"><?php $topBarLogo = get_template_directory_uri() . '/assets/images/logotype.svg'; echo file_get_contents($topBarLogo); ?></div></a></li>
    				</ul>
    			</div>
    			<div class="top-bar-right show-for-medium">
    				<?php joints_top_nav(); ?>
    			</div>
    			<div class="top-bar-right float-right show-for-small-only">
    				<ul class="menu">
    					<li>
    						<button class="offcanvas-trigger this" type="button" data-toggle="off-canvas">
    							<div id="nav-icon">
    								<span></span>
    								<span></span>
    								<span></span>
    								Navigation icon
    							</div>
    						</button>
    					</li>
    				</ul>
    			</div>
    		</div>
  		  <span class="seperator-bar"></span>
      </div>
  	</div>
  </div>
</header> <!-- end .header -->
