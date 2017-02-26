<?php get_header() ?>       

    <div class="container">
            
      <div class="row">
          
          <div class="blog">

            <div class="col-md-9">
                
                <div class="page-header">
                <h2><?php wp_title();?></h2>
                </div>
                
                <!-- Carousel -->    
                    <?php 
                    $args = array(
                    'post_type' => 'post',
                    'category_name' => 'featured'
                    
                    );
                    
                    $the_query = new WP_Query($args);
                    
                    ?>
                    

                    <!-- Wordpress "The Loop" needed to loop through any content -->    
    
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                      <!-- Indicators -->
                      <ol class="carousel-indicators">
                        <?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                        <li data-target="#carousel-example-generic" data-slide-to="<?php echo $the_query ->current_post; ?>" 
                            class="<?php if($the_query->current_post == 0) : ?>active <?php endif; ?>"></li>
                        <?php endwhile; endif;?>    
                      </ol>

                        
                        <?php rewind_posts(); ?>
                        
                      <!-- Wrapper for slides -->
                      <div class="carousel-inner" role="listbox">
                           <?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
                          
                            <?php    
                            $thumbnail_id = get_post_thumbnail_id(); //Grab the thumbnail's id 
                            $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true); 
                            //Grab the url of the idea based on the thumbnail id that was retrieved
                            $thumbnail_meta = get_post_meta( $thumbnail_id, '_wp_attachment_image_alt', true);
                            //Retrieve the alt data of the thumbnail image
                            
                            ?>         
                          
                            <div class="item <?php if($the_query->current_post == 0) : ?>active <?php endif; ?>">
                            <a href="<?php the_permalink(); ?>"> <img src="<?php echo $thumbnail_url[0]; ?>" alt="<?php echo $thumbnail_meta; ?>"> </a>
                                    <div class="carousel-caption">
                                        <?php the_title(); ?>
                                    </div>
                            </div>
                          
                          <?php endwhile; endif;?>   
                          

                      </div>

                        
                        
                      <!-- Controls -->
                      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                    </div>
             
            <!-- Carousel -->        
                    
            <!-- Blog List -->        
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