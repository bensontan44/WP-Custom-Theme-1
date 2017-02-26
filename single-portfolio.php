<?php get_header() ?>    


    <div class="container-fluid">
        <div class="page-header">
            <div class="row">
                <div class="col-xs-8">
                <h1>Portfolio</h1>
                </div>

                <div class="col-xs-4 prev-next">
                    <?php previous_post_link ('%link', '<span class="glyphicon glyphicon-circle-arrow-left"></span>'); ?>
                <a href="<?php bloginfo('url')?>/?p=81"><span class="glyphicon glyphicon-th"></span></a>
                    <?php next_post_link ('%link', '<span class="glyphicon glyphicon-circle-arrow-right"></span>'); ?>
                    
                </div>
            </div>
        </div>
        
        
        
        
      <div class="row">

        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
          
                <div class="col-sm-8 portfolio-image">
                     <?php    
                        $thumbnail_id = get_post_thumbnail_id(); //Grab the thumbnail's id 
                        $thumbnail_url = wp_get_attachment_image_src($thumbnail_id, 'thumbnail-size', true); 
                        //Grab the url of the idea based on the thumbnail id that was retrieved    
                      ?>
                
                    <!-- Img responsive class from bootstrap to ensure images scale to user device --> 
                    <!-- The index 0 in the array is the image when you get the contents of wp_get_attachment_image_src -->    
                    <p>
                        <a href="<?php the_permalink();?>">
                        <img class="img-responsive" src="<?php echo $thumbnail_url[0];?>" alt="<?php the_title(); ?>" />
                        </a>
                    </p>    

                </div>
          
                <div class="col-sm-4">
                    <h2 class="blog-post-title"><?php the_title() ?></h2>
                    <p> <?php the_content(); ?></p>
                    <a target="_blank" href="<?php the_field('link')?>"><button class="btn btn-success btn-lg">View Final Piece<span class="glyphicon glyphicon-menu-right"</span></button></a>
                </div>
          
          
        <?php endwhile; else : ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
        <?php endif; ?>

      </div><!-- /.row -->

    </div><!-- /.container -->

<?php get_footer() ?>