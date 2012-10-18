<?php get_header(); ?>

<!--Content Start-->
<div id="content">
        <!--Current Browsing Title Start-->
        <div id="currentbrowsing">
        <h1>搜索结果如下</h1>
        <h2>
        <?php the_search_query(); ?>
        </h2>
        </div>
        <!--Current Browsing Title End-->
        
								<?php if (have_posts()) : ?>
                        <?php while (have_posts()) : the_post(); ?>
                        
                        <!--Archive Post Start-->
                        <div class="archive-post">
                        
                                <!-- Post Time Info , Category and Comments Start-->
                                <div class="info_index">
                                
                                <div class="info_time">
                                <?php the_time('j') ?>
                                <?php the_time(' F ') ?>
                                </div>
                                
                                <div class="info_category"> 发表于
                                <?php the_category(', ') ?>
                                
                                </div>
                                </div>
                                <div class="comments" >
                                </li>
                                <li class="com_left">
                                <?php comments_popup_link('0 ', '1 ', '%  '); ?>
                                </li>
                                </div>
                                
                                <!-- Post Time Info , Category, Tags End-->
                                
                                <!-- Title Start-->
                                <h1> <a  href="<?php the_permalink() ?>" rel="bookmark" title="固定链接到 <?php the_title_attribute(); ?>">
                                <?php the_title(); ?>
                                </a>  </h1>
                                <!-- Title End-->
                                
                                <!-- Text Start-->
                                <div class="archive-post-text">
                                <?php the_excerpt('excerpt_length', 'new_excerpt_length'); ?>
                                </div>
                                <!-- Text End-->
                        
                        </div>
                        <!--Archive Post End-->
        
        
        <?php endwhile; ?>
        <?php else : ?>
        <p>未找到，请搜索其他字符或者浏览网页下方的最近文章。</p>
        <?php endif; ?>
        
        <!--Navigation Post Link Start -->
        <div id="navigation">
        <div class="nextright"><?php previous_posts_link('新的 &raquo;') ?></div>
        <div class="prevleft"><?php next_posts_link(' &laquo; 旧的','') ?></div>
        </div>
        <!--Navigation Post Link Start -->
                 
</div>
<!--Content End-->
<?php get_footer(); ?>
