<h1>
    this is 404 page
	  this is admin edit!
</h1>
<!--    使用一个默认循环-->
<?php if(have_posts()) :while (have_posts()) :the_post();?>
 <?php the_title()?>
<?php endwhile;?>
<?php endif;?>

