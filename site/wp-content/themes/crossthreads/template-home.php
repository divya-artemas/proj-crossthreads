<?php 
/* Template name: Home */
?>
<?php
if (have_posts()) : while (have_posts()) : the_post();
get_header();
?> 

  
    <!--Banner-section-start-->
    <div class="banner" style="background: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) );?>) no-repeat top center / cover;">
        <div class="banner-text">
        <h1 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('banner_heading');?></h1>
                <p data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('banner_content');?></p>
                <div class="arrow-container">
                    <img src="<?php bloginfo("template_url")?>/img/down-arrow.svg" alt="arrow" decoding="async" />
                </div>
            </div>
        </div>
        <!--Banner-section-end-->
        <!--Image-listing-start-->
        <div class="image-listing">
            <div class="container">
                <div class="text-content">
                    <h2 data-aos="fade-in" data-aos-easing="ease-in-out"><?php echo get_field('categ_title');?></h2>
                </div>
                <div class="image-cart-sec flex g-0">
                    <?php
                    $i=1;
                        while( have_rows('prod_categories') ): the_row();
                            $categ_name    =  get_sub_field('categ_name');                            
                            $categ_image   =  get_sub_field('categ_image');
                            $categ_link    =  get_sub_field('categ_link');
                    ?> 
                    <div class="image-cart-block" data-aos="fade-up" data-aos-delay="<?php echo $i;?>00">
                        <img src="<?php echo $categ_image;?>" alt="arrow" decoding="async" />
                        <h3><?php echo $categ_name;?></h3>
                    </div>
                    <?php $i++; endwhile;?>                   
                </div>

            <a href="<?php echo get_field('categ_button_link');?>" class="btn green" data-aos="fade-in" data-aos-easing="ease-in-out"><?php echo get_field('categ_button_text');?></a>
            </div>
        </div>
        <!--Image-listing-end-->
        <!--Quality-section-start-->
        <div class="quality-sec">
            <div class="medium-container">
            <h3 data-aos="fade-in" data-aos-easing="ease-in-out"><?php echo get_field('icon_title');?></h3>
                <ul>
                <?php
                    $i=1;
                        while( have_rows('icon_details') ): the_row();
                            $icon_image  =  get_sub_field('icon_image');                            
                            $icon_name   =  get_sub_field('icon_name');                         
                ?>
                    <li data-aos="fade-up" data-aos-delay="<?php echo $i;?>00">
                        <img src="<?php echo $icon_image;?>" alt="">
                        <span><?php echo $icon_name;?></span>
                    </li>
                <?php $i++; endwhile; ?>                   
                </ul>
            </div>
        </div>
        <!--Quality-section-end-->
        <!--product-section-start-->
        <div class="product bg-image">
            <div class="container">
                <h2 data-aos="fade-in" data-aos-easing="ease-in-out">Products</h2>
                <ul data-aos="fade-in" data-aos-easing="ease-in-out">
                    <li>
                        <a href="#">Men</a>
                    </li>
                    <li>
                        <a href="#">Women</a>
                    </li>
                    <li><a href="#"> Kids </a></li>
                    <li><a href="#"> Wellness Cloths </a></li>
                    <li><a href="#"> Accessories</a></li>
                </ul>
                <div class="product-list">
                    <div class="product-set" data-aos="fade-up" data-aos-delay="100">
                        <img src="<?php bloginfo("template_url")?>/img/img-five.jpg" alt="">
                        <div class="product-desc">
                            <strong>Organic Linen Shirt</strong>
                            <b>$49.99</b>
                            <div class="flex divide-flex">
                                <a href="#" class="line">View Details</a>
                                <a href="#" class="btn">BUY NOW</a>
                            </div>
                        </div>

                    </div>
                    <div class="product-set" data-aos="fade-up" data-aos-delay="200">
                        <img src="<?php bloginfo("template_url")?>/img/img-ix.jpg" alt="">
                        <div class="product-desc">
                            <strong>Organic Cotton Button-Up</strong>
                            <b>$49.99</b>
                            <div class="flex divide-flex">
                                <a href="#" class="line">View Details</a>
                                <a href="#" class="btn">BUY NOW</a>
                            </div>
                        </div>

                    </div>
                    <div class="product-set" data-aos="fade-up" data-aos-delay="300">
                        <img src="<?php bloginfo("template_url")?>/img/img-six.jpg" alt="">
                        <div class="product-desc">
                            <strong>Sustainable Classic</strong>
                            <b>$49.99</b>
                            <div class="flex divide-flex">
                                <a href="#" class="line">View Details</a>
                                <a href="#" class="btn">BUY NOW</a>
                            </div>
                        </div>

                    </div>
                </div>

                <a href="#" class="line brown" data-aos="fade-in" data-aos-delay="200">See All Collections</a>
            </div>
        </div>
        <!--product-section-end-->
        <!--about-section-start-->
        <div class="about-sec" style="background: url(<?php echo get_field('ab_background_image');?>) no-repeat center center/cover;">
            <div class="small-container">
                <h4 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('ab_heading');?></h4>
                <p data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('ab_content');?></p>
                <a href="<?php echo get_field('ab_button_link');?>" data-aos="fade-in" data-aos-delay="100" class="btn green"><?php echo get_field('ab_button_text');?></a>
            </div>
        </div>
        <!--about-section-end-->
        <!--product-section-start-->
        <div class="product bg-image">
            <div class="container">
                <h2 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo get_field('season_title');?></h2>

                <div class="product-list">
                <?php
                    $i=1;
                        while( have_rows('sea_prod') ): the_row();
                            $prod_name        =  get_sub_field('prod_name');                            
                            $prod_image       =  get_sub_field('prod_image');
                            $prod_link        =  get_sub_field('prod_link');                            
                            $prod_price       =  get_sub_field('prod_price');  
                            $prod_button_link =  get_sub_field('prod_button_link');                   
                            
                ?>
                    <div class="product-set" data-aos="fade-up" data-aos-delay="<?php echo $i;?>00">
                        <img src="<?php echo $prod_image;?>" alt="">
                        <div class="product-desc">
                            <strong><?php echo $prod_name;?></strong>
                            <b><?php echo $prod_price;?></b>
                            <div class="flex divide-flex">
                                <a href="<?php echo $prod_link;?>" class="line">View Details</a>
                                <a href="<?php echo $prod_button_link;?>" class="btn">BUY NOW</a>
                            </div>
                        </div>
                    </div>
                    <?php $i++; endwhile;?>
                </div>
                <a href="<?php echo get_field('coll_button_link');?>" data-aos="fade-in" data-aos-delay="100" class="line brown"><?php echo get_field('coll_button_text');?></a>
            </div>
        </div>
        <!--product-section-end-->
        <!--offer-section-start-->
        <div class="offer">
            <?php
                $i=1;
                    while( have_rows('discount_prod') ): the_row();
                        $disc_prod_image   =  get_sub_field('disc_prod_image');                  
                        $disc_percentage   =  get_sub_field('disc_percentage');
                        $disc_prod_name    =  get_sub_field('disc_prod_name');                            $disc_prod_price   =  get_sub_field('disc_prod_price');  
                        $prod_button_link  =  get_sub_field('prod_button_link');                   
                            
            ?>
            <div class="offer-sec" style="background: url(<?php echo $disc_prod_image;?>) no-repeat center center/cover;">
                <div class="offer-content">
                    <h4 data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo $disc_percentage;?></h4>
                    <strong data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo $disc_prod_name;?></h4>
                    </strong>
                    <b data-aos="zoom-in" data-aos-easing="ease-in-out"><?php echo $disc_prod_price;?></b>
                    <a href="<?php echo $prod_button_link;?>" class="btn outline" data-aos="zoom-in" data-aos-easing="ease-in-out">BUY NOW</a>
                </div>
            </div>
            <?php endwhile;?>           
        </div>
        <!--offer-section-end-->
        <!--Happy-section-start-->
        <div class="customers">
            <div class="small-container">
                <h2><?php echo get_field('cust_title');?></h2>
                <div class="carousel" data-flickity='{ "freeScroll": false, "contain": false, "prevNextButtons": false, "autoPlay": 1000, "pageDots": true }'>
                <?php
                $i=1;
                    while( have_rows('customers_quotes') ): the_row();
                        $cust_image   =  get_sub_field('cust_image');                  
                        $cust_content   =  get_sub_field('cust_content');
                        $cust_name    =  get_sub_field('cust_name');                            $cust_rating   =  get_sub_field('cust_rating');  
                                      
                ?>
                    <div class="carousel-cell">
                        <img src="<?php echo $cust_image;?>" alt="" class="profile-pic">
                        <div class="customer-content">
                            <img src="<?php echo $cust_rating;?>" alt="">
                            <p><?php echo $cust_content;?></p>
                            <span><?php echo $cust_name;?></span>
                        </div>
                    </div>
                <?php $i++; endwhile;?>
                </div>
            </div>
        </div>
        <!--Happy-section-end-->
        <!--full-slider-start-->
        <div class="full-width-slider">
            <div class="carousel" data-flickity='{ "freeScroll": false, "contain": false, "prevNextButtons": true, "pageDots": false }'>
                <?php               
                    while( have_rows('product_slider') ): the_row();
                        $slider_prod_image   =  get_sub_field('slider_prod_image');                  
                        $slider_prod_name    =  get_sub_field('slider_prod_name');
                        $slider_prod_price   =  get_sub_field('slider_prod_price');                      $slider_detail_link  =  get_sub_field('slider_detail_link');  
                        $slider_buy_link  =  get_sub_field('slider_buy_link'); 
                                      
                ?>
                <div class="carousel-cell" style="background: url(<?php echo $slider_prod_image;?>) no-repeat top center/cover;">
                    <div class="slider-content">
                        <h4><?php echo $slider_prod_name;?>
                        <?php echo $slider_prod_price;?></h4>
                        <div class="flex divide-flex">
                            <a href="<?php echo $slider_detail_link;?>" class="line white">View Details</a>
                            <a href="<?php echo $slider_buy_link;?>" class="btn">BUY NOW</a>
                        </div>
                    </div>
                </div>
                <?php endwhile;?>              

            </div>
        </div>
        <!--full-slider-end-->
       
    
<?php endwhile; endif;?> 
<?php get_footer();?>