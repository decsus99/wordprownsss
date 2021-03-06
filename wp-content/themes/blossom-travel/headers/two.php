<?php
/**
 * Header Six
 *
 * @package Blossom_Travel
 */

$ed_search = get_theme_mod( 'ed_header_search', true ); ?>

<header id="masthead" class="site-header header-six" itemscope itemtype="http://schema.org/WPHeader">
	<div class="header-t">
		<div class="container">
			<?php blossom_travel_site_branding(); ?>
		</div>	
	</div><!-- .header-t -->
	<div class="header-main">
		<div class="container">
			<nav id="site-navigation" class="main-navigation" role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
				<button class="toggle-btn" data-toggle-target=".main-menu-modal" data-toggle-body-class="showing-main-menu-modal" aria-expanded="false" data-set-focus=".close-main-nav-toggle">
					<span class="toggle-bar"></span>
					<span class="toggle-bar"></span>
					<span class="toggle-bar"></span>
				</button>
				<?php
					wp_nav_menu( array(
						'theme_location' => 'primary',
						'menu_id'        => 'primary-menu',
						'menu_class'     => 'nav-menu',
						'fallback_cb'    => 'blossom_travel_primary_menu_fallback',
					) );
				?>
			</nav><!-- #site-navigation -->
			<div class="header-right">
				<?php blossom_travel_social_links(); ?>
				<?php if( $ed_search ) {
					echo '<div class="header-search">'; 
					blossom_travel_header_search();
					echo '</div>';
				} ?>
			</div>
		</div>
	</div><!-- .header-main -->
</header>