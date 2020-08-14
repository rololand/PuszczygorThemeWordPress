<?php
/*
Template Name: single_page
*/
?>
<!DOCTYPE HTML>
<html lang="pl">
<?php

?>
<head>
	<?php include('headinclude.php') ?>
	<link rel="stylesheet" href="http://www.puszczygor.pl/wp-content/themes/puszczygor/fontello/css/fontello.css" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php wp_title(); ?></title>
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
    <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
    <?php wp_head(); ?>
</head>

<body>
<?php include('background.php') ?>
<div class="container">
	<div> <!--header-->
		<?php get_header(); ?>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-4">
			<?php get_sidebar(); ?>
		</div>
		<div class="col-xs-12 col-sm-8">
			<div class="strona_szablon">
				<?php
					if (have_posts()) :
						while (have_posts()) : the_post(); ?>
							<h1><?php the_title(); ?></h1>
							<?php the_content(); ?>
						<?php endwhile;
					else :
						echo "<p>Na tej stronie nie ma żadnych wpisów.</p>";
					endif;
				?>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-12">
			<div class="footer">
				<?php get_footer(); ?>
			</div>
		</div>
	</div>
</div>
<?php wp_footer(); ?>


<script src="http://www.puszczygor.pl/wp-content/themes/puszczygor/js/jquery.js"></script>
</body>
</html>
