<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post();
      the_content();
  endwhile;
  else :
      _e( 'No hemos encontrado entradas', 'textdomain' );
  endif;
  get_footer();
?>


<?php get_footer(); ?>