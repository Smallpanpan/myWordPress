<!--<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">-->
<!---->
<!--<html xmlns="http://www.w3.org/1999/xhtml">-->
<!---->
<!--<head profile="http://gmpg.org/xfn/11">-->
<!---->
<!---->
<!---->
<!--    <title>--><?php //bloginfo('name'); ?><!----><?php //wp_title(); ?><!--</title>-->
<!---->
<!---->
<!---->
<!--    <meta http-equiv="Content-Type" content="--><?php //bloginfo('html_type'); ?><!--; charset=--><?php //bloginfo('charset'); ?><!--" />-->
<!---->
<!--    <meta name="generator" content="WordPress --><?php //bloginfo('version'); ?><!--" />  leave this for stats please -->
<!---->
<!---->
<!---->
<!--    <link rel="stylesheet" href="--><?php //bloginfo('stylesheet_url'); ?><!--" type="text/css" media="screen" />-->
<!---->
<!--    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="--><?php //bloginfo('rss2_url'); ?><!--" />-->
<!---->
<!--    <link rel="alternate" type="text/xml" title="RSS .92" href="--><?php //bloginfo('rss_url'); ?><!--" />-->
<!---->
<!--    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="--><?php //bloginfo('atom_url'); ?><!--" />-->
<!---->
<!--    <link rel="pingback" href="--><?php //bloginfo('pingback_url'); ?><!--" />-->
<!---->
<!---->
<!---->
<!--    --><?php //wp_get_archives('type=monthly&format=link'); ?>
<!---->
<!--    --><?php ////comments_popup_script(); // off by default ?>
<!---->
<!--    --><?php //wp_head(); ?>
<!---->
<!--</head>-->
<!---->
<!--<body>-->
<!--函数bloginfo() 主要是取网站的信息，查询数据库wp_option-->
<!--<p>-->
<!--    this is tutorial test!-->
<!--</p>-->
<!--<p><br/>这是邮箱名：</p>-->
<?php //bloginfo('admin_email');?>
<!--<p><br/>这是取的网页站名：</p>-->
<?php //bloginfo('name');?>
<!--<p><br/>这是取网页描述：</p>-->
<?php //bloginfo('description');?>
<!--<br/>-->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">

    <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>

    <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
    <meta name="generator" content="WordPress <?php bloginfo('version'); ?>" /> <!-- leave this for stats please -->
    <!--引入css样式-->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<!-- rel="alternate"是  文档的替代版本（比如打印页、翻译或镜像）。-->
    <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
    <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
    <link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
<!--指向 pingback 服务器的 URL-->
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php wp_get_archives('type=monthly&format=link'); ?>
    <?php //comments_popup_script(); // off by default ?>
    <?php wp_head(); ?>

    <?php if (is_single() || is_page()) {
        $head = get_post_meta($post->ID, 'head', true);
        if (!empty($head)) { ?>
            <?php echo $head; ?>
        <?php } } ?>
</head>
<body><div id="wrapper">

    <div id="header">

        <h1><a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a></h1>
        <?php bloginfo('description'); ?>

    </div>