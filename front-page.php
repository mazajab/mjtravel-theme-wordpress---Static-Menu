<?php
/**
 * Template Name: Front Page
 *
 */?>
<?php get_header(); ?>
    <section class="bg-warning" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">Live, Love , Travel</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Because it’s not just about having a nice looking, modern website. Anyone can do it. The idea is to have a converting one. Your website will only convert when it is properly planned, designed and tested.</p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    

    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
      
          </div>

          <div class="col-lg-4 ml-auto text-center">
            <?php echo do_shortcode("[mj20_contact_form]");  ?>
          </div>
          <div class="col-lg-4 ml-auto text-center">
           
          </div>

        </div>
        <br>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fas fa-phone fa-3x mb-3 sr-contact-1"></i>
            <p>123-456-6789</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fas fa-envelope fa-3x mb-3 sr-contact-2"></i>
            <p>
              <a href="mailto:your-email@your-domain.com">feedback@mjcreative.com</a>
            </p>
          </div>
        </div>
      </div>
    </section>


<?php get_footer(); ?>