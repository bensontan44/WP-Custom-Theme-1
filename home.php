<?php get_header() ?>       

    <div class="container">

      <div class="row">

        <div class="col-md-9">
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                <article>
                    <a href="<?php the_permalink();?>"> <h1><?php the_title(); ?></h1></a>
                    <hr/>
                    <p>By <?php the_author(); ?> on <?php echo the_time('l, F jS, Y')?></p>
                </article>
        
                    <p> <?php the_content(); ?></p>
                             
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, the page does not exist.' ); ?></p>
                <?php endif; ?>
          </div> <!-- ./md-9 -->       
          
           <?php get_sidebar(); ?>
 
      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer() ?>