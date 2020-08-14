
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<header>
				 <a href="http://www.puszczygor.pl/"><img class="img-fluid" src="http://www.puszczygor.pl/wp-content/themes/puszczygor/grafika/logo.png" alt="PUSZCZYGÓR - Bieg ultramaratoński szlakami Puszczy Bukowej"></a>
			</header>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<nav class="navbar navbar-inverse navbar-expand-lg navbar-light" >
				<div class="container-fluid">
					<div class="navbar-header">
						<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-icon"></span>
					  </button>
					</div>
						<?php
							// Primary navigation menu.
							wp_nav_menu( array(
								'theme_location'    => 'primary',
		            'depth'             => 2,
		            'container'         => 'div',
		            'container_class'   => 'collapse navbar-collapse',
		            'container_id'      => 'navbarSupportedContent',
		            'menu_class'        => 'nav navbar-nav mr-auto',
		            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
		            'walker'            => new WP_Bootstrap_Navwalker()
							) );
						?>
				</div>
			</nav>
		</div>
	</div>
