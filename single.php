


<?php 
get_header();
 get_template_part('templates/top-nav');
 get_template_part('templates/single');


if(comments_open()||get_comments_number()){
    comments_template();
}


 get_footer() 
// get_template_part('templates/top-header') 
 ?>


 





