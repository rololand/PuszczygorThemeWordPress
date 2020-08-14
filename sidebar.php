<div class="sidebar_content">
	<div class="sidebar">
		<div class="timer">
			START 31.05<br /><span id="dni"></span>d <span id="godziny"></span>:<span id="minuty"></span>:<span id="sekundy"></span>
		</div>
	</div>
	<div class="sidebar">
		<h1>#info</h1>
		<div class="btn-group">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<img class="img-fluid img-sidebar" src="http://www.puszczygor.pl/wp-content/themes/puszczygor/grafika/puszczygor.png" alt="PUSZCZYGÓR - Bieg ultramaratoński szlakami Puszczy Bukowej">
			<span class="caret"></span>
		  </button>
			<?php
				// Primary navigation menu.
				wp_nav_menu( array(
					'theme_location'    => 'sidebar-menu-puszczygor',
					'depth'             => 1,
					'menu_class'        => 'dropdown-menu',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()
				) );
			?>
		</div>
		<div class="btn-group">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<img class="img-fluid" src="http://www.puszczygor.pl/wp-content/themes/puszczygor/grafika/puszczygorka.png" alt="PUSZCZYGÓR - Bieg ultramaratoński szlakami Puszczy Bukowej">
			<span class="caret"></span>
		  </button>
		  <?php
				// Primary navigation menu.
				wp_nav_menu( array(
					'theme_location'    => 'sidebar-menu-puszczygorka',
					'depth'             => 1,
					'menu_class'        => 'dropdown-menu',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()
				) );
			?>
		</div>
		<div class="btn-group">
		  <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			<img class="img-fluid" src="http://www.puszczygor.pl/wp-content/themes/puszczygor/grafika/dokretka.png" alt="PUSZCZYGÓR - Bieg ultramaratoński szlakami Puszczy Bukowej">
			<span class="caret"></span>
		  </button>
		  <?php
				// Primary navigation menu.
				wp_nav_menu( array(
					'theme_location'    => 'sidebar-menu-dokretka',
					'depth'             => 1,
					'menu_class'        => 'dropdown-menu',
					'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
					'walker'            => new WP_Bootstrap_Navwalker()
				) );
			?>
		</div>

	</div>
	<div class="sidebar">
		<div id="runlabel">RUN FOR<br /><span>FUN</span></div>
	</div>
</div>
