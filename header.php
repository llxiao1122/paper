<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="description" content="敏锐于体会生活细微处，设计于理性计划人生中，绘画于发现暮光灿烂地" />
<title>
<?php bloginfo('name'); ?>
<?php if ( is_single() ) { ?>_<?php } ?>
<?php wp_title(); ?>
</title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="shortcut icon" href="<?php echo home_url() ?>/favicon.ico" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>
</head>
<body>

<div id="wrap_container" ><?php include (TEMPLATEPATH . '/searchform.php'); ?>
<?php wp_nav_menu(array( 'fallback_cb' => 'display_categories' , 'menu' => 'primary-menu', 'container_class' => 'main-menu', 'container_id' => 'wrap', 'theme_location' => 'primary-menu' ) ); ?>
<div class=hinge><a href="http://kkddpp.com/feed">KKDDPP.COM</a></div>
</div>
<div id="header">
</div>
</div>
<div id="me" >
<?php if ($pov_dislogan== "true") { } else { ?>
<h7>
<?php $slogan_header="This is a free space where you can enter the text for your blog slogan, a description or whatever you want to say to your readers." ?>
<?php if (get_option('pov_slogan')) { $slogan_header = get_option('pov_slogan') ; } ?>
<?php echo $slogan_header; ?>
</h7>
<?php } ?>
<ul>
<?php if ($pov_disoptiontext== "true") { } else { ?>
<li class="nobullet optional" >
<?php $option_header="Enter an optional text next to the social network links.Could be usefull for admin description." ?>
<?php if (get_option('pov_slogan')) { $option_header = get_option('pov_optiontext') ; } ?>
<?php echo $option_header; ?>
</li>
<?php } ?>
</div>
<div id="container">