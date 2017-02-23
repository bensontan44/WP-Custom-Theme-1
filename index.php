<?php get_header() ?>       

    <div class="container">

      <div class="row">

        <div class="col-sm-12 blog-main">
            
            <div class="blog-post">
                
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                    <h2 class="blog-post-title"><?php the_title() ?></h2>
                    <p> <?php the_content(); ?></p>
                             
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
 
            </div>  <!-- /.blog-post -->
            
        </div> <!-- /.blog-main -->

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer() ?>