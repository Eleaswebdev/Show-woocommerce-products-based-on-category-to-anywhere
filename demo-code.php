  <!--/.products by category-->
        <div class="container">
        	 <ul class="products">
        	 
        	<div class="row">
        		 <?php
		        $args = array( 'post_type' => 'product', 'posts_per_page' => 21, 'product_cat' => 'category1', 'orderby' => 'rand' );
		        $loop = new WP_Query( $args );
		        while ( $loop->have_posts() ) : $loop->the_post(); global $product; ?>
        		
        		<div class="col-lg-4">
        			  <li class="product">    

		                    <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">

		                        <?php woocommerce_show_product_sale_flash( $post, $product ); ?>

		                        <?php if (has_post_thumbnail( $loop->post->ID )) echo get_the_post_thumbnail($loop->post->ID, 'shop_catalog'); else echo '<img src="'.woocommerce_placeholder_img_src().'" alt="Placeholder" width="300px" height="300px" />'; ?>

		                        <h3><?php the_title(); ?></h3>

		                        <span class="price"><?php echo $product->get_price_html(); ?></span>                    

		                    </a>

		                    <?php woocommerce_template_loop_add_to_cart( $loop->post, $product ); ?>

		                </li>
        		</div>
        		 <?php endwhile; ?>
		    <?php wp_reset_query(); ?>
        	</div>

          </ul><!--/.products-->
        </div>
