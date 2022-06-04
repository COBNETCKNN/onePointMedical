<?php get_header(); ?>

<section id="hero" class="bg-onePointRed py-10 lg:py-24">
  <div class="container mx-auto">
    <div class="grid lg:grid-cols-2 gap-4">
      <!-- CONTENT AREA -->
      <div class="my-auto">
        <?php  
        
        $args = array(
            'page_id' => 38
        );

        $heroQuery = new WP_Query($args);

        while($heroQuery->have_posts()){
            $heroQuery->the_post(); 
            
        $heroTitle = get_field('hero_title');
            
        ?>

            <h1 class="hero_title font-bold text-inter text-white mb-10"><?php echo $heroTitle; ?></h1>
            <div class="hero_content__text text-white font-openSans font-normal text-base mb-10"><?php the_content(); ?></div>
            <div class="flex justify-center lg:justify-start">
              <a href="#">
                <button class="bg-white text-black hover:text-onePointRed font-semibold py-2 px-4 border-2 border-white rounded">Call us: <?php echo the_field('contact_phone_number', 12); ?></button>
              </a>
            </div>
      </div>
      <!-- PICTURE AREA -->
      <div class="flex justify-end relative h-auto w-full">
        <?php echo the_post_thumbnail('post-thumbnail', ['class' => 'hero_image', 'title' => 'One Point']);?>
      </div>
        <?php 
        } 
        wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<section id="aboutUS" class="bg-white pt-14 lg:pt-48 pb-14 lg:pb-24">
  <div class="container mx-auto">
    <div class="grid lg:grid-cols-2 gap-10">
      <?php  
      
      $args = array(
          'page_id' => 7
      );

      $aboutUsQuery = new WP_Query($args);

      while($aboutUsQuery->have_posts()){
          $aboutUsQuery->the_post(); 
          
      $aboutUsTitle = get_field('about_us_title');
          
      ?>
      <!-- PICTURE AREA -->
      <div class="">
        <?php echo the_post_thumbnail('post-thumbnail', ['class' => 'frontPage_aboutUs_picture', 'title' => 'One Point']);?>
      </div>
      <!-- CONTENT SECTION -->
      <div class="my-auto lg:w-11/12">
        <h5 class="text-onePointRed text-lg font-semibold mb-7"><?php the_title(); ?></h5>
        <h2 class="frontPage_aboutUs__title text-onePointBrown font-bold mb-7"><?php echo $aboutUsTitle; ?></h2>
        <div class="mb-7">
          <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
        </div>
        <div class="flex justify-center lg:justify-start">
          <a href="<?php echo site_url('/about')?>">
            <button class="bg-onePointRed hover:bg-white text-white hover:text-onePointRed border-2 border-onePointRed font-bold py-2 px-7">Read More</button>
          </a>
        </div>
      </div>
      <?php 
      } 
      wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<section id="ourServices" class="bg-gray-100 pt-14 lg:pt-24 pb-2 lg:pb-48">
      <div class="container mx-auto">
        <!-- HEADING AREA -->
        <div class="ourServices_title text-center">
          <h5 class="text-onePointRed text-inter font-semibold text-lg mb-7">Our Services</h5>
          <h2 class="frontPage_aboutUs__title text-onePointBrown text-inter font-semibold">All Of Your Home Health Care Needs Are At One Point</h2>
        </div>
        <!-- SERVICES AREA -->
        <div class="grid lg:grid-cols-3 gap-4 mt-10">
        <?php 
        
        $args = array(
            'post_type' => 'service',
            'posts_per_page' => 3,
            'order' => 'DSC',
        );

        $ourServicesQuery = new WP_Query($args);

        while($ourServicesQuery->have_posts()){
            $ourServicesQuery->the_post(); ?>

        <div class="bg-white p-8">
          <!-- PICTURE -->
          <div class="mb-5">
            <?php the_post_thumbnail(); ?>
          </div>
          <!-- CONTENT -->
          <h4 class="text-inter font-semibold text-xl mb-5"><?php the_title(); ?></h4>
          <p class="ourServices_content__text font-openSans text-base font-normal"><?php echo wp_trim_words(get_the_excerpt(), 15); ?></p>
        </div>
        
        <?php
        }
        wp_reset_postdata();
        
        ?>
        </div>
        <!-- VIEW ALL BUTTON -->
        <div class="mt-10 mb-10 lg:mb-36 flex justify-center">
          <a href="<?php echo site_url('/services')?>">
            <button class="bg-onePointRed hover:bg-white text-white hover:text-onePointRed border-2 border-onePointRed font-bold py-2 px-7">View All Services</button>
          </a>
        </div>
        <!-- GIVE US A CALL -->
        <div class="hidden lg:block giveUsCall_wrapper relative">
          <div class="grid grid-cols-2 bg-onePointRed absolute -top-10 right-0">
            <!-- RIGHT SECTION -->
            <?php  
            
            $args = array(
                'page_id' => 56
            );

            $aboutUsQuery = new WP_Query($args);

            while($aboutUsQuery->have_posts()){
                $aboutUsQuery->the_post();              
            ?>
            <div class="bg-onePointRed p-10 flex my-auto">
              <div class="h-full w-full my-auto">
                <h2 class="frontPage_aboutUs__title text-inter font-semibold text-white mb-10"><?php the_title(); ?></h2>
                <div class="text-white font-openSans text-base font-normal mb-10">
                  <?php the_content(); ?>
                </div>
                <a href="<?php echo site_url('/contact')?>">
                  <button class="bg-white hover:bg-onePointRed text-onePointRed hover:text-white border-2 border-white font-bold py-2 px-7">Reserve My Slot!</button>
                </a>
              </div>
            </div>
            <!-- LEFT SECTION -->
            <div class="">
              <?php the_post_thumbnail(); ?>
            </div>
            <?php }
            wp_reset_postdata(); ?>
          </div>
        </div>
      </div>
</section>

<section id="whyChooseUs" class="bg-white my-14 lg:my-48">
  <div class="container mx-auto">
    <!-- HEADING AREA -->
    <div class="ourServices_title text-center mb-10">
      <h5 class="text-onePointRed text-inter font-semibold text-lg mb-7">Why Choose Us</h5>
      <h2 class="frontPage_aboutUs__title text-onePointBrown text-inter font-semibold">We Make Your Medical Care Our Top Priority</h2>
    </div>
    <!-- CONTENT AREA -->
    <div class="grid lg:grid-cols-2 gap-10 bg-gray-100 p-5 lg:p-0">
      <?php 
      
      $args = array(
          'page_id' => 59
      );

      $whyChooseUs = new WP_Query($args);

      while($whyChooseUs->have_posts()){
          $whyChooseUs->the_post(); ?>
      <!-- PICTURE AREA -->
      <div class="">
        <?php the_post_thumbnail(); ?>
      </div>
      <!-- CONTENT AREA -->
      <div class="my-auto ">
        <h2 class="frontPage_aboutUs__title text-inter font-semibold text-onePointBrown mb-10"><?php the_title(); ?></h2>
        <div class="text-black font-openSans text-base font-normal mb-10">
          <?php the_content(); ?>
        </div>
        <div class="flex justify-center lg:justify-start">
          <a href="<?php echo site_url('/contact')?>">
            <button class="bg-onePointRed hover:bg-white text-white hover:text-onePointRed border-2 border-onePointRed font-bold py-2 px-7">Book an Appointment</button>
          </a>
        </div>
      </div>
       <?php }
        wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<section id="testimonials" class="bg-gray-100 py-14 lg:py-24">
  <div class="container mx-auto">
    <!-- HEADING AREA -->
    <div class="ourServices_title text-center mb-10">
      <h5 class="text-onePointRed text-inter font-semibold text-lg mb-7">Testimonials</h5>
      <h2 class="frontPage_aboutUs__title text-onePointBrown text-inter font-semibold">What Our Clients Say</h2>
    </div>
    <!-- CONTENT AREA -->
    <div class="grid lg:grid-cols-3 gap-4">
    <?php 
    
    $args = array(
        'post_type' => 'testimonial',
        'posts_per_page' => 3,
        'order' => 'DSC',
    );

    $ourServicesQuery = new WP_Query($args);

    while($ourServicesQuery->have_posts()){
        $ourServicesQuery->the_post(); ?>

      <div class="p-5 bg-white relative">
        <div class="testimonial_content my-5 text-base font-openSans font-normal">
          <?php the_content(); ?>
        </div>
        <div class="testimonial_pictureName flex justify-start">
          <div class="">
            <?php the_post_thumbnail('thumbnail', ['class' => 'testimonial_image']); ?>
          </div>
          <div class="my-auto ml-7 text-base font-openSans font-semibold">
            <?php the_title(); ?>
          </div>
        </div>
      </div>

<?php }
        wp_reset_postdata(); ?>
    </div>
  </div>
</section>

<section id="scheduleNow" class="hidden lg:block bg-onePointRed py-5">
  <div class="container mx-auto">
    <div class="grid grid-cols-5 gap-2">
      <!-- CALL TODAY -->
      <div class="col-span-1 my-auto">
        <div class="grid grid-cols-3 gap-4">
          <!-- ICON -->
          <div class="col-span-1 mx-auto my-auto">
            <i class="text-onePointRed bg-white p-3 rounded-3xl text-2xl my-auto fa-solid fa-phone"></i>
          </div>
          <!-- CALL TODAY CONTENT -->
          <div class="col-span-2">
            <h5 class="block text-white  text-inter font-semibold text-lg">Call Today</h5>
            <p class=" text-white text-inter font-semibold text-lg"><?php echo the_field('contact_phone_number', 12); ?></p>
          </div>
        </div>
      </div>
      <!-- ADDRESS -->
      <div class="col-span-1 my-auto">
        <div class="grid grid-cols-3 gap-4">
          <!-- ICON -->
          <div class="col-span-1 mx-auto my-auto">
            <i class="text-onePointRed bg-white p-3 rounded-3xl text-2xl my-auto fa-solid fa-location-dot"></i>
          </div>
          <div class="col-span-2">
            <p class="text-white text-inter font-semibold text-lg"><?php echo the_field('contact_address', 12); ?></p>
          </div>
        </div>
      </div>
      <!-- SCHEDULE TEXT -->
      <div class="col-span-2 text-center my-auto">
        <div class="my-auto">
          <h3 class="text-white text-2xl font-inter font-semibold">Schedule a Virtual Appointment</h3>
        </div>
      </div>
      <!-- SCHEDULE NOW BUTTON -->
      <div class="col-span-1 mx-auto my-auto">
        <div class="">
          <a href="<?php echo site_url('/contact')?>">
            <button class="bg-white text-black hover:text-onePointRed font-semibold py-2 px-4 border-2 border-white rounded">Schedule Now</button>
          </a>
        </div>
      </div>
    </div>
  </div>
  </div>
</section>

<?php get_footer(); ?>