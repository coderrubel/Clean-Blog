<?php get_header();



?>
   

<div class="container">
        <div class="row">
            <div class="col-lg-10 col-lg-offset-1 col-md-10 col-md-offset-1">
                <div class="post-preview">
               
                    
                    
                    
                    <?php while(have_posts()): the_post(); ?>
                
                    <div class="custom_post">
                        <h2 class="post-title" style="color:<?php echo get_post_meta(get_the_ID(),'cmd_post_title',TRUE) ?>">
                           <?php the_title(); ?>
                        </h2>
                        <?php the_post_thumbnail(); ?>
                    </div>
                        <h3 class="post-subtitle">
                            <?php the_content(); ?>
                        </h3>
                    
                    <p class="post-meta">Posted by <a href="<?php the_permalink(); ?>"><?php the_author(); ?></a> on <?php the_time('F m, Y'); ?></p>
                    
                    Topics: <?php
                    $topic = get_the_terms(get_the_ID(),'custom_taxonomy');
                    foreach ($topic as $topics){
                        $topiclist = $topics->name ;
                    $link = get_term_link($topics,'custom_taxonomy');
                    
                    echo '<a href="'.$link.'">'.$topiclist.'</a>, ';
                    }
                   ?>
                   
                    Catagori: 
                    <?php
                    $catagori = get_the_terms(get_the_ID(),'custom_catagori');
                    foreach($catagori as $catagoris);
                    $mycatagoris = $catagoris->name;
                    $clink = get_term_link($catagoris,'custom_catagori');
                    echo '<a href="'.$clink.'">'.$mycatagoris.'</a> ';
                    
                    ?>
                    
                    
                    
                    
                    <?php endwhile; ?>
                </div>
                <hr>
 
            </div>
        </div>
    </div>
<?php get_footer(); ?>


