<!DOCTYPE HTML>
<html lang="pl">
<?php

?>
<head>
	<?php include('headinclude.php') ?>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title><?php bloginfo( 'name' ); ?></title>
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
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div class="entry">
				 <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				 <div class="fancy-divider"><div></div></div>
				 <div class="entry-metadata">Opublikowano <?php the_time('d-m-Y'); ?> przez <?php the_author(); ?></div>
				 <?php if ( has_post_thumbnail() ) : ?>
					<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
					<img class="img-fluid" src="<?php the_post_thumbnail_url(); ?>" alt="<?php the_title_attribute(); ?>"/>
					</a>
				<?php endif; ?>
				 <?php the_content('Czytaj dalej &rarr;'); ?>
			</div><!-- /.entry -->

			<?php endwhile; else: ?>
			   <p><?php _e('Nie znaleziono postów spełniających podane kryteria.'); ?></p>
			 <?php endif; ?>
			 <?php the_posts_pagination(); /*wyświetlamy paginację*/ ?>

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
