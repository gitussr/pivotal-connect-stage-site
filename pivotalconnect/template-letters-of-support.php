<?php 
/*
*Template Name: Letters of Support
*/
?>
<?php get_header(); ?>

	 

<?php include 'inner-banners.php' ?>


	<section class="letters-of-support">
     <div class="container">
         
                 <div class="pdf-block">
                     <?php 
            while(have_posts()) : the_post();
                the_content(); 
            endwhile;
        ?>
                 </div>
             
         
     </div>   
    </section>



        
	 
<?php get_footer(); ?>