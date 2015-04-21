<div id="main-nav">
	<div class="site-branding col-lg-4 col-md-4 col-sm-4 col-xs-12">
		<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><span><?php bloginfo( 'name' ); ?></span> // <?php bloginfo( 'description' ); ?></a></h1>
	</div><!-- .site-branding -->

	<nav id="site-navigation" class="main-navigation col-lg-6 col-md-6 col-sm-6 col-xs-12" role="navigation">
		<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Primary Menu', 'kayleighjohnston' ); ?></button>
		<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
	</nav><!-- #site-navigation -->

	<div class="site-social col-lg-2 col-md-2 col-sm-2 col-xs-12">
		<ul class="row">
			<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<a href="http://ca.linkedin.com/in/kayleighjohnston/en" target="_blank">
					<img src="<?php echo get_template_directory_uri();?>/img/linkedin.png" alt="LinkedIn"/>
				</a>
			</li>
			<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<a href="http://www.twitter.com/kayleighmj" target="_blank">
					<img src="<?php echo get_template_directory_uri();?>/img/twitter.png" alt="Twitter"/>	
				</a>
			</li>
			<li class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
				<a href="http://ca.linkedin.com/in/kayleighjohnston/en" target="_blank">
					<img src="<?php echo get_template_directory_uri();?>/img/github.png" alt="GitHub"/>
				</a>
			</li>
		</ul>	
	</div>
</div>	