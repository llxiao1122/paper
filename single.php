<?php get_header(); ?>

<!--Content Start-->
<div id="content">
								<?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                                        <!--Single Post Start -->
                                        <div id="post">
                                        
                                        <h1> <!--Title Start -->
                                        <a class="corner" href="<?php the_permalink() ?>" rel="bookmark" title="永久链接到 <?php the_title_attribute(); ?>">
                                        <?php the_title(); ?>
                                        </a>
                                        </h1> <!--Title End -->
                                        
                                        <!--Edit Class Start -->
                                        <div class="edit">
                                        <ul>
                                        
                                        <li>    <?php the_time('j') ?>
                                        <?php the_time('F') ?>,
                                        <?php the_time('Y') ?>
                                        - </li>
                                        <li>
                                        <?php the_category(', ') ?>
                                        - </li>
                                        <li>标签 :
                                        <?php the_tags(' ', ', ', ' '); ?>
                                        </li>
                                        <li class="com_left">
                                        <?php comments_popup_link('0 人说', '1 人说', '% 人说'); ?>
                                        </li>
                                        </ul>
                                        </div>
                                        <!--Edit Class End -->
                                        
                                        
                                        
                                        
                                        <?php the_content();  ?>
                                        </div>
                                        <!--Single Post End -->



<!--Post Author Bio Start -->
<div id="author-info" class="corner">
<div id="author-bio">
<h5>作者
<?php the_author_link(); ?>
</h5>
<p>
<?php the_author_meta('description'); ?>
</p>
</div>
</div>
<!--Post Author Bio End -->

<!--Navigation Post Link Start -->
<div id="post_navigation">
<div class="nextpostright" > 下一篇:  <?php next_post_link('<strong>%link</strong>'); ?> >>  </div>
<div class="prevpostleft" > << 上一篇: <?php previous_post_link('<strong>%link</strong>'); ?>  </div>
</div>
<!--Navigation Post Link End -->


<?php comments_template(); ?> <!--Comments -->
<?php endwhile; else: ?>
<p>额，看来这个还没有。</p>
<?php endif; ?>


</div>
<!--Content End-->

<?php get_footer(); ?>