<?php 
/*
    Template Name: Portfolio Grid Template
*/
?>

<?php get_header() ?>       

    <div class="container-fluid">

      <div class="row">

        <div class="col-sm-12">
                 
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                        
                    <h2 class="blog-post-title"><?php the_title() ?></h2>
                    <p> <?php the_content(); ?></p>
                             
                <?php endwhile; else : ?>
                    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
                <?php endif; ?>
            
        </div> <!-- /. sm-12 -->

      </div><!-- /.row -->
        
        
        <div class="row">
           
            <?php $args = array('post_type' => 'portfolio');
                  $the_query = new WP_Query($args);
            ?>  <!-- Make an argument & query the custom post type 'portfolio' made with Advanced Custom Fields Plugin -->

            <!-- Wordpress "The Loop" needed to loop through any content -->    
            <?php if ( have_posts() ) : while ( $the_query -> have_posts() ) : $the_query -> the_post(); ?>
            
            <div class="col-xs-3 portfolio-piece">
                
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
                <h3><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h3>
            
            </div>
            <!-- Set portfolio count equal to the current post -->
            <?php $portfolio_count = $the_query ->current_post + 1; ?> 
            <!-- Make it so that if it's the 4th post, it will close the row and open a new one-->
            <?php if ( $portfolio_count % 4 == 0) : ?> 
            </div> <div class="row">
            <?php endif; ?> <!-- End Portfolio count -->
            
            <?php endwhile; endif; ?> <!-- End the Wordpress Codex: "The Loop" -->
        
        </div>
        
    </div><!-- /.container -->

<?php get_footer() ?>