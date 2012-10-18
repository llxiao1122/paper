<?php get_header(); ?>
<div id="content" >
<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<?php if (is_sticky()) {?>

<div class="first-post sticky" >
                        <div class="info_index">
                        <div class="info_time">
                        <?php the_time('j') ?>
                        <?php the_time(' F ') ?>
                        </div>
                        <div class="info_category"> <?php the_author(', ') ?></br>
                        <?php the_category(', ') ?>
                        </div>
                        <div class="info_sticky">
                        In evidence
                        </div>
                        </div>
                        <div class="comments" >             
                        <?php comments_popup_link('0 ', '1 ', '%  '); ?>
                        </div>
                        <h1> <a  href="<?php the_permalink() ?>" rel="bookmark" title=" <?php the_title_attribute(); ?>">
                        <?php the_title(); ?></a>
                         </h1>
                        <div class="first-post-text">
                        <?php the_excerpt('excerpt_length', 'new_excerpt_length'); ?>
                        </div>

</div>
<?php } else { ?>
<!--<a  href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">-->
<div onclick="location.href='<?php the_permalink() ?>';" class="first-post">
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
                        <?php the_title(); ?></a>
                         </h1>
                        <div class="first-post-text">
                        <?php the_excerpt('excerpt_length', 'new_excerpt_length'); ?>
                        </div>
</div>
<?php } ?>
<?php endwhile; else: ?>
<?php endif; ?>
</div>
<div id="navigation">
<div class="nextright"><?php previous_posts_link('下一页&raquo;') ?></div>
<div class="prevleft"><?php next_posts_link(' &laquo;上一页','') ?></div>
</div>
<?php get_footer(); ?>