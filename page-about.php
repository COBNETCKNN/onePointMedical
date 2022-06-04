<?php get_header(); ?>

<section id="aboutUs_hero" class="bg-onePointRed py-24">
    <div class="container mx-auto">
        <div class="">
          <h1 class="aboutUs_title font-semibold text-white font-inter text-center"><?php the_title(); ?></h1>
        </div>
    </div>
</section>

<section id="aboutUs_content" class="bg-white py-24">
    <div class="container mx-auto">
        <!-- CONTENT -->
        <div class="grid grid-cols-2 gap-14">
            <!-- IMAGE -->
            <div class="col-span-1">
                <?php echo the_post_thumbnail('post-thumbnail', ['class' => 'aboutUs_hero__image rounded', 'title' => 'One Point']);?>
            </div>
            <!-- CONTENT -->
            <?php 
            $aboutUsTitle = get_field('about_us_title');
            ?>
            <div class="col-span-1 my-auto">
                <h5 class="font-inter text-onePointRed text-lg font-semibold mb-7">Our Story</h5>
                 <h2 class="font-inter frontPage_aboutUs__title text-onePointBrown font-bold mb-7"><?php echo $aboutUsTitle; ?></h2>
                <div class="mb-7 font-openSans font-normal text-base">
                 <?php the_content(); ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- OUR VALUES -->
<section id="ourValues" class="py-24 bg-gray-100">
    <div class="container mx-auto">
        <div class="ourValues_heading">
            <h5 class="font-inter text-onePointRed text-lg font-semibold mb-7 text-center">Our Values</h5>
            <h2 class="font-inter frontPage_aboutUs__title text-onePointBrown font-bold mb-7 text-center">Our Work Is Heavily Shaped by Our Core Values</h2>
        </div>
        <!-- CARDS -->
        <div class="grid grid-cols-2 gap-8 my-14">
        <?php 
        
        $args = array(
            'post_type' => 'values',
            'posts_per_page' => -1,
            'order' => 'DSC',
        );

        $ourValuesQuery = new WP_Query($args);

        while($ourValuesQuery->have_posts()){
            $ourValuesQuery->the_post(); ?>

            <div class="p-5 bg-white">
                <h5 class="text-2xl font-inter font-semibold text-onePointBrown mb-3"><?php the_title(); ?></h5>
                <div class="font-openSans font-normal text-base">
                    <?php the_content(); ?>
                </div>
            </div>

            <?php }
            wp_reset_postdata(); ?>
        </div>
    </div>
    <div class="flex justify-center">
        <a href="<?php echo site_url('/contact')?>">
        <button class="bg-onePointRed hover:bg-white text-white hover:text-onePointRed border-2 border-onePointRed font-bold py-2 px-7">Book an Appointment</button>
        </a>
    </div>
</section>

<!-- TESTIMONIALS -->
<section id="testimonials" class="bg-white py-14 lg:py-24">
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

      <div class="p-5 bg-gray-100 relative">
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