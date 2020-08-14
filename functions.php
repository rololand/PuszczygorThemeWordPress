<?php
	// Register Custom Navigation Walker
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
	register_nav_menus( array(
		'primary' => __( 'Primary Menu',      'puszczygor' ),
		'sidebar-menu-puszczygor' => __( 'Sidebar Menu Puszczygor',      'puszczygor' ),
		'sidebar-menu-puszczygorka' => __( 'Sidebar Menu Puszczygorka',      'puszczygorka' ),
		'sidebar-menu-dokretka' => __( 'Sidebar Menu Dokretka',      'dokretka' ),
		'social'  => __( 'Social Links Menu', 'puszczygor' ),
	) );

	?>
