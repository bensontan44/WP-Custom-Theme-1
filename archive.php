<?php get_header() ?>       

    <div class="container">

      <div class="row">
          
          <div class="blog">

                <div class="col-md-9">
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                <article>
                    
                    <a href="<?php the_permalink();?>"> <h1><?php the_title(); ?></h1></a>

                    <p><em> By <?php the_author(); ?> 
                        on <?php echo the_time('l, F jS, Y'); ?> 
                        in <?php the_category(', '); ?> |
                        <a href="<?php comments_link();?>">  (<?php comments_number();?>)</a>
                    </em></p>
                    
                    <?php the_excerpt();?>
                    <hr/>
                </article>
                             
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, the page does not exist.' ); ?></p>
                <?php endif; ?>
                    
                </div> <!-- ./md-9 -->       
          
           <?php get_sidebar('blog'); ?>
        
        </div>  
              
      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer() ?>