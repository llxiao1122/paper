<?php get_header(); ?>
<!--Content Start-->
<div id="content">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<!--Page Start-->
<div class="post-page" id="post-<?php the_ID(); ?>">

                                <h1 class="titlepage"><!--Title Start -->
                                <?php the_title(); ?>
                                </h1><!--Title End -->
                                
                                
                                
                                <?php the_content('<p class="serif">全部查看 &raquo;</p>'); ?>
                                <?php wp_link_pages(array('before' => '<p><strong>页码：</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
</div>
<!--Page End-->
<?php endwhile; endif; ?>
</div>
<!--Content End-->
<?php get_footer(); ?>