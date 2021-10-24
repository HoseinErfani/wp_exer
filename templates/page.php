  
  
  <!-- Page Header -->
  <?php if(have_posts()):?>
  <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/contact-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1><?php the_title()?></h1>
            <span class="subheading">Have questions? I have .</span>
          </div>
        </div>
      </div>
    </div>
  </header>



  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
       <div class="alert alert-primary"> <?php the_content()?></div>
      </div>
    </div>
  </div>

  <hr>
  <?php endif;?>