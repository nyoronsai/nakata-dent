<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!--[if lt IE 9]><html xmlns="http://www.w3.org/1999/xhtml" class="ie"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html xmlns="http://www.w3.org/1999/xhtml"><!--<![endif]-->
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="viewport" content="width=device-width" />
<title><?php seo_title(); ?></title>
<meta name="description" content="<?php seo_description(); ?>" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" /> 
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php $options = get_desing_plus_option(); ?>

<?php wp_enqueue_script( 'jquery' ); ?>
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?> 
<?php wp_head(); ?>

<?php if(!is_page()&&is_home()) { ?>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/nivo-slider/jquery.nivo.slider.pack.js<?php version_num(); ?>"></script>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/nivo-slider/default.css<?php version_num(); ?>" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/nivo-slider/nivo-slider.css<?php version_num(); ?>" type="text/css" />
<script type="text/javascript">
jQuery(window).on('load',function() {
 jQuery('#slider').nivoSlider({
  effect: 'sliceDown',
  manualAdvance: false,
  directionNav: true,
  controlNav: false,
  controlNavThumbs: false,
  pauseTime: 5000
 });
});
</script>
<?php }; ?>

<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css<?php version_num(); ?>" type="text/css" />
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/comment-style.css<?php version_num(); ?>" type="text/css" />

<link rel="stylesheet" media="screen and (min-width:641px)" href="<?php bloginfo('template_url'); ?>/style_pc.css<?php version_num(); ?>" type="text/css" />
<link rel="stylesheet" media="screen and (max-width:640px)" href="<?php bloginfo('template_url'); ?>/style_sp.css<?php version_num(); ?>" type="text/css" />

<?php if (strtoupper(get_locale()) == 'JA') ://to fix the font-size for japanese font ?>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/japanese.css<?php version_num(); ?>" type="text/css" />
<?php endif; ?>

<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jscript.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/scroll.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/comment.js<?php version_num(); ?>"></script>
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/rollover.js<?php version_num(); ?>"></script>
<!--[if lt IE 9]>
<link id="stylesheet" rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style_pc.css<?php version_num(); ?>" type="text/css" />
<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/ie.js<?php version_num(); ?>"></script>
<![endif]-->

<!--[if IE 7]>
<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/ie7.css<?php version_num(); ?>" type="text/css" />
<![endif]-->

<style type="text/css">
body { font-size:<?php echo $options['content_font_size']; ?>px; }

a
 { color:#<?php echo $options['pickedcolor']; ?>; }

a:hover, #related_post .title a:hover, #previous_next_post a:hover, .page_navi p.back a:hover:hover, #post_list .title a:hover,
 .recommend_gallery .title a:hover, .recommend_gallery a.link:hover, #logo_text a:hover, #footer_logo_text a:hover
 { color:#<?php echo $options['pickedcolor2']; ?>; }

#wp-calendar td a:hover, #wp-calendar #prev a:hover, #wp-calendar #next a:hover, .page_navi a:hover, #submit_comment:hover
 { background:#<?php echo $options['pickedcolor']; ?>; }

#guest_info input:focus, #comment_textarea textarea:focus, #submit_comment:hover
 { border:1px solid #<?php echo $options['pickedcolor']; ?>; }

#return_top:hover {  background-color:#<?php echo $options['pickedcolor']; ?>; }

</style>

</head>
<body class="<?php if(!is_page()&&is_home()) { echo 'index'; }; if (!has_nav_menu('global-menu')) { echo ' no_nav'; }; ?> default">

 <div id="header" class="clearfix">

  <!-- site description -->
  <h1 id="site_description"><?php bloginfo('description'); ?></h1>

  <!-- logo -->
  <?php the_dp_logo(); ?>

  <!-- social button -->
  <?php if ($options['show_rss'] or $options['twitter_url'] or $options['facebook_url']) { ?>
  <ul id="social_link" class="clearfix">
   <?php if ($options['show_rss']) : ?>
   <li><a class="target_blank" href="<?php bloginfo('rss2_url'); ?>"><img class="rollover" src="<?php bloginfo('template_url'); ?>/img/header/rss.png" alt="rss" title="rss" /></a></li>
   <?php endif; ?>
   <?php if ($options['twitter_url']) : ?>
   <li><a class="target_blank" href="<?php echo $options['twitter_url']; ?>"><img class="rollover" src="<?php bloginfo('template_url'); ?>/img/header/twitter.png" alt="twitter" title="twitter" /></a></li>
   <?php endif; ?>
   <?php if ($options['facebook_url']) : ?>
   <li><a class="target_blank" href="<?php echo $options['facebook_url']; ?>"><img class="rollover" src="<?php bloginfo('template_url'); ?>/img/header/facebook.png" alt="facebook" title="facebook" /></a></li>
   <?php endif; ?>
  </ul>
  <?php }; ?>

  <!-- global menu -->
  <?php if (has_nav_menu('global-menu')) { ?>
  <a href="#" class="menu_button"><?php _e('menu', 'tcd-w'); ?></a>
  <div id="global_menu" class="clearfix">
   <?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'theme_location' => 'global-menu' , 'container' => '' ) ); ?>
  </div>
  <?php }; ?>

  <!-- banner -->
  <?php if(!is_mobile()) { ?>
  <?php if($options['header_ad_code1']||$options['header_ad_image1']) { ?>
  <div id="header_banner">
  <?php if ($options['header_ad_code1']) { ?>
   <?php echo $options['header_ad_code1']; ?>
  <?php } else { ?>
   <a href="<?php esc_attr_e( $options['header_ad_url1'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['header_ad_image1'] ); ?>" alt="" title="" /></a>
  <?php }; ?>
  </div>
  <?php }; ?>
  <?php }; ?>

 </div><!-- END #header -->

 <div id="contents" class="clearfix">

  <!-- smartphone banner -->
  <?php if(is_mobile() and !is_home()) { ?>
  <?php if($options['mobile_ad_code1']||$options['mobile_ad_image1']) { ?>
  <div id="mobile_banner_top">
   <?php if ($options['mobile_ad_code1']) { ?>
    <?php echo $options['mobile_ad_code1']; ?>
   <?php } else { ?>
    <a href="<?php esc_attr_e( $options['mobile_ad_url1'] ); ?>" class="target_blank"><img src="<?php esc_attr_e( $options['mobile_ad_image1'] ); ?>" alt="" title="" /></a>
   <?php }; ?>
  </div>
  <?php }; ?>
  <?php }; ?>

