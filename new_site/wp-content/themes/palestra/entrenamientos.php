<?php
/**
 * Template Name: Entrenamientos
 *
 */


get_header(); 

while( have_posts() ) : the_post();
?>

<section id="entrenamientos"> 
    <div class="section_header">
        <img src="<?php bloginfo('template_url') ?>/img/bg_entrenamientos.jpg" class="heading">
        <h2> Entrenamientos </h2>
    </div>

    <div class="container">
       
    </div>

</section>
    
<?php 
endwhile;
get_footer(); 
?>
