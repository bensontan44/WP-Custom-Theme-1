<?php 
/*
    Template Name: Page with widgets
*/
?>

<?php get_header() ?>       
    
      <div class="container">
                <div class="row">
                    <div class="col-md-12">
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                    <h2 class="blog-post-title"><?php the_title() ?></h2>
                    <p> <?php the_content(); ?></p>
          
                    </div> <!-- End Column -->
                </div>      <!-- End Row -->  
          
                <div class="row">
                    <div class="col-md-4">
                     <?php if (dynamic_sidebar('front-left') ); 
          
                     ?>
                    </div>    
                    
                    <div class="col-md-4">
                     <?php if (dynamic_sidebar('front-mid') ); 
          
                     ?>
                    </div>
                    
                    <div class="col-md-4">
                     <?php if (dynamic_sidebar('front-right') ); 
          
                     ?>
                    </div>
                </div>
                    

                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, the page does not exist.' ); ?></p>
                <?php endif; ?>
 
      
     </div> <!-- End Container -->

<?php get_footer() ?>



