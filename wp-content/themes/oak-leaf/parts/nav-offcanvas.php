<?php
/**
 * The off-canvas menu uses the Off-Canvas Component
 *
 * For more info: http://jointswp.com/docs/off-canvas-menu/
 */
?>

<div class="top-bar" id="top-bar-menu">
	<div class="top-bar-left">
		<ul class="menu">
			<li><a href="<?php echo home_url(); ?>"><div class="nav-bar-logo" alt="logo"><?php $topBarLogo = get_template_directory_uri() . '/assets/images/logotype.svg'; echo file_get_contents($topBarLogo); ?></div></a></li>
		</ul>
	</div>
	<div class="top-bar-right">
		<ul class="menu">
			<!-- <li><button class="menu-icon" type="button" data-toggle="off-canvas"></button></li> -->
			<li><a data-toggle="off-canvas"><?php joints_top_nav() ?></a></li>
		</ul>
	</div>
</div>
