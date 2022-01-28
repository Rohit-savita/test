<?php
          $paged = get_query_var( 'paged' ) ? get_query_var( 'paged' ) : 1; // setup pagination
          $the_query = new WP_Query( array(
            'post_type' => 'gallery',
            'paged' => $paged,
            'orderby' =>'ID',
            'order' =>'asc',        
            'posts_per_page' => 9)
      );      
          while ( $the_query->have_posts() ) : $the_query->the_post();        
             ?>
             <div class="row align-items-center" style="padding-bottom:100px;">

                <div class="col-lg-4 col-md-12">
                    <div class="about-image">                         
                        <img src="<?php echo the_post_thumbnail_url(); ?>" alt="Image Title">
                    </div>
                </div>

                <div class="col-lg-8 col-md-12">
                    <div class="about-area-content">
                        <span></span>
                        <h3><?php echo get_the_title(); ?></h3>
                        <?php echo get_the_content(); ?>


                    </div>
                <?php endwhile; ?>
                <?php include "card.php"; ?>


