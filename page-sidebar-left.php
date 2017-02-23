<?php 
/*
    Template Name: Page with left sidebar
*/
?>

<?php get_header() ?>       

    <div class="container">

      <div class="row">

          <?php get_sidebar(); ?>
          
        <div class="col-md-9">
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                    <div class="page-header"><h2><?php the_title() ?></h2></div>
                    <p> <?php the_content(); ?></p>
                             
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, the page does not exist.' ); ?></p>
                <?php endif; ?>
          </div> <!-- ./md-9 -->        
 
      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer() ?>