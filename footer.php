<footer>
    <section id="footer" class="bg-white py-10">
        <div class="container mx-auto">
            <div class="grid lg:grid-cols-5 gap-4">
                <!-- RIGHT SECTION -->
                <div class="lg:col-span-2 lg:w-9/12">
                    <div class="flex justify-center lg:justify-start footer_logo mb-10">
                        <?php the_custom_logo(); ?>
                    </div>
                    <div class="footer_content flex justify-center lg:justify-start  mb-10 font-openSans text-center lg:text-left">
                        <?php  
                        
                        $args = array(
                            'page_id' => 24
                        );

                        $footerQuery = new WP_Query($args);

                        while($footerQuery->have_posts()){
                            $footerQuery->the_post(); ?>

                            <p><?php the_content(); ?></p>
                            

                        <?php 
                        } 
                        wp_reset_postdata(); ?>
                    </div>
                    <!-- SOCIAL MEDIA -->
                    <div class="flex justify-center lg:justify-start">
                        <!-- FACEBOOK -->
                        <div class="flex justify-center lg:justify-start ">
                            <a href="<?php the_field('social_media_facebook', 12) ?>" target="_blank">
                                <i class="text-xl mx-3 p-2 bg-gray-200 hover:bg-onePointRed rounded-2xl text-onePointRed hover:text-white fa-brands fa-facebook-f"></i>
                            </a>
                        </div>
                        <!-- GOOGLE -->
                        <div class="flex justify-center lg:justify-start ">
                            <a href="<?php the_field('social_media_google', 12) ?>" target="_blank">
                                <i class="text-xl mx-3 p-2 bg-gray-200 hover:bg-onePointRed rounded-2xl text-onePointRed hover:text-white fa-brands fa-google"></i>
                            </a>
                        </div>
                        <!-- INSTAGRAM -->
                        <div class="flex justify-center lg:justify-start ">
                            <a href="<?php the_field('social_media_instagram', 12) ?>" target="_blank">
                                <i class="text-xl mx-3 p-2 bg-gray-200 hover:bg-onePointRed rounded-2xl text-onePointRed hover:text-white fa-brands fa-instagram"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- QUICK LINKS -->
                <div class="hidden lg:block col-span-1">
                    <h2 class="text-xl font-inter text-black font-normal mb-10">Quick Links</h2>
                    <?php wp_nav_menu(
                        array(
                        'theme_location' => 'primary-menu',
                        'menu_class' => 'footer_menu text-black text-lgfont-medium block font-openSans')
                        ); 
                    ?>
                </div>
                <!-- SERVICES -->
                <div class="hidden lg:block col-span-1">
                    <h2 class="text-xl font-inter text-black font-normal mb-10">Services</h2>
                    <?php 
                    
                    $args = array(
                        'post_type' => 'service',
                        'post_per_page' => -1
                    );

                    $footerServiceQuery = new WP_Query($args);

                    while($footerServiceQuery->have_posts()){
                        $footerServiceQuery->the_post(); ?>

                    <a href="<?php echo site_url('/services')?>">
                        <span class="footerService_title block py-1 font-openSans">
                            <?php the_title(); ?>
                        </span>
                    </a>
                    
                    <?php
                    }
                    wp_reset_postdata();
                    
                    ?>
                </div>
                <!-- BUSINESS HOURS -->
                <div class="hidden lg:block col-span-1">
                    <h2 class="text-xl font-inter text-black font-normal mb-10">Hours</h2>
                    <p class="text-lg font-inter text-black font-normal mb-10">Our Phones are answered 24/7, 365 days a year.</p>
                    <p class="text-lg font-inter text-black font-light mb-10">Our main Office is open Monday through Friday 9AM to 5PM.</p>

                </div>
            </div>
        </div>
    </section>
</footer>


<?php wp_footer(); ?>

</body>
</html>