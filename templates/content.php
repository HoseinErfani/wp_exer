<!-- Main Content -->
<div class="container">
  <div class="row">
    <div class="col-lg-8 col-md-12 mx-auto">




      <?php while (have_posts()) : the_post(); ?>


        <div class="post-preview ">
          <a href="<?php the_permalink() ?>">
            <h2 class="post-title">
              <?php the_title() ?>

            </h2>
            <h3 class="post-subtitle">
              Problems look mighty small from 150 miles up
            </h3>
          </a>
          <p class="post-meta">Posted by
            <a href="#">Start Bootstrap</a>
         <?php the_date() ?>
          </p>
        </div>


        <hr>



      <?php endwhile; ?>

  <div class="clearfix">
  <?php next_posts_link('Older Posts '); ?>
  <?php previous_posts_link('newer Posts '); ?>

        <!-- <a class="btn btn-primary float-right" href="#">Older Posts &rarr;</a> -->
      </div>





    

    </div>
<div class="col-lg-4 col-md-12 mx-auto">

<?php get_sidebar() ?>

</div>
    
  </div>
</div>

