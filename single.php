<?php get_header() ?>       

    <div class="container">

      <div class="row">
          
          <div class="blog">

                <div class="col-md-9">
            
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                    <h1><?php the_title(); ?></h1>
                    
                            <?php    
                            $thumbnail_id = get_post_thumbnail_id(); //Grab the thumbnail's id 
                            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true); 
                            //Grab the url of the idea based on the thumbnail id that was retrieved
                            $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                            //Retrieve the alt data of the thumbnail image
                            ?>         
                          
                            <div class="item <?php if($the_query->current_post == 0) : ?>active <?php endif; ?>">
                            <img class="img-responsive" src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>">
                            </div>
                    
                            <p><em> By <?php the_author(); ?> 
                            on <?php echo the_time('l, F jS, Y'); ?> 
                            in <?php the_category(', '); ?> |
                            <a href="<?php comments_link();?>">  (<?php comments_number();?>)</a>
                            </em></p>
                    
                            <hr/>
                            <?php the_content();?>
                            </hr>

                    <?php comments_template(); ?>
                             
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, the page does not exist.' ); ?></p>
                <?php endif; ?>
                    
                </div> <!-- ./md-9 -->       
          
           <?php get_sidebar('blog'); ?>
        
        </div>  <!-- ./blog -->
              
      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer() ?>