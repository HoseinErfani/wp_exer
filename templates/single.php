<?php if (have_posts()) :  ?>



  <!-- Page Header -->
  <header class="masthead" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/img/post-bg.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="post-heading">
            <h1>
              <?php the_title(); ?>
            </h1>
            <h2 class="subheading">Problems look mighty small from 150 miles up</h2>
            <span class="meta">Posted by
              <a href="#">Start Bootstrap</a>
              on August 24, 2019</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">



          <?php the_content() ?>
<?php wp_link_pages();?>



        </div>
      </div>
      <div class="d-flex justify-content-between">

        <div>
          <?php previous_post_link(); ?>
        </div>
        <div>
          <?php next_post_link(); ?>
        </div>
      </div>


    </div>
  </article>

  <hr>

<?php endif; ?>