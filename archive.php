<?php get_header(); ?>
<div id="content">
        <div id="currentbrowsing">
                <h1>你的位置</h1>
                <?php if (have_posts()) : ?>
                <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
                <?php /* If this is a category archive */ if (is_category()) { ?>
                <h2>
                        <?php single_cat_title(); ?>
                </h2>
                <?php /* If this is a tag archive */ } elseif( is_tag() ) { ?>
                <h2>文章标签 &#8216;
                        <?php single_tag_title(); ?>
                        &#8217;</h2>
                <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
                <h2>
                        <?php the_time('F jS, Y'); ?>
                </h2>
                <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
                <h2>
                        <?php the_time('F, Y'); ?>
                </h2>
                <?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
                <h2>
                        <?php the_time('Y'); ?>
                </h2>
                <?php /* If this is an author archive */ } elseif (is_author()) { ?>
                <h2>作者文章</h2>
                <?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
                <h2>博客文章</h2>
                <?php } ?>
        </div>
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div  onclick="location.href='<?php the_permalink() ?>';" class="archive-post">
                <div class="info_index">
                        <div class="info_time">
                                <?php the_time('j') ?>
                                <?php the_time(' F ') ?>
                        </div>
                        <div class="info_category"> <?php the_author(', ') ?></br>
                        <?php the_category(', ') ?>
                        </div>
       		   </div>
                        <div class="comments" >             
                        <?php comments_popup_link('0 ', '1 ', '%  '); ?>
                        </div>
        			 <h1> <a  href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>">
                <?php the_title(); ?>
                </a>  </h1>
                <div class="archive-post-text">
                        <?php the_excerpt('excerpt_length', 'new_excerpt_length'); ?>
                </div>
        </div>
        <?php comments_template(); ?> 
        <?php endwhile; else: ?>
        <h1>看来还没有</h1>
        <p>
                <?php _e('额，看来还没有。'); ?>
        </p>
        <?php endif; ?>
        <div id="navigation">
        <div class="nextright"><?php previous_posts_link('新文章 &raquo;') ?></div>
        <div class="prevleft"><?php next_posts_link(' &laquo; 旧文章','') ?></div>
        </div>
        <?php endif; ?>
</div>
<?php get_footer(); ?>