
<?php get_header(); 

$prefix = 'clean_blog';
?>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" style="color:<?php echo get_post_meta(get_the_ID(),'contentcolor',TRUE); ?>">
               
                <?php while(have_posts()): the_post(); ?>
                <?php the_content(); ?>
                <?php endwhile; ?>
                
                 <?php 
                        the_posts_pagination(array(
                            'show_all' => true,
                            'prev_text' => 'Prev',
                            'next_text' => 'Next',
                            'screen_reader_text' => ' ',
                            'before_page_number' => '<b>',
                            'after_page_number' => '</b>'
                            ));
                        ?>
            </div>
        </div>
    </div>

    <hr>

    <!-- Footer -->
