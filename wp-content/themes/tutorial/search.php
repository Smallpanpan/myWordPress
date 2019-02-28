<?php get_header()?>

<div id="container">
    <!-- 使用主循环，循环博客内容 have_posts() the_post() the_title()  the_permalink() -->
    <?php if(have_posts()):?>
        <?php while(have_posts()):the_post();?>
            <?php the_title();the_permalink();?><br>
            <?php the_excerpt();?>
            <p >
                <?php _e('Filed under&#58;'); ?> <?php the_category(', ') ?> <?php _e('by&#124'); ?> <?php  the_author(); ?><br />
                <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?> <?php edit_post_link('Edit', ' &#124; ', ''); ?>
            </p>
        <?php endwhile?>
    <?php endif;?>
</div>

<div class="sidebar">
    <ul>
<!--这里会遍历所有页面的连接！名字-->
        <?php wp_list_pages()?>

        <li>
            <?php _e('Categories')?>
        </li
        <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
        <li>
            <h2><?php _e("Archives")?></h2>
            <!--         调用存档连接   -->
            <?php wp_get_archives('type=monthly')?>
            <!--            调用友情连接-->
            <?php get_links_list()?>
        </li>
        <li id = 'search'>
            <?php include(TEMPLATEPATH ."/searchform.php")?>
        </li>
        <li>
            <?php get_calendar()?>
        </li>
        <li>
            <h2><?php _e("Mate")?></h2>
            <ul>
                <?php wp_register()?>
                <li><?php wp_loginout()?></li>
                <?php wp_meta()?>
            </ul>
            <?php ?>
        </li>

    </ul>
    <ul>
        <?php if ( function_exists('dynamic_sidebar') && dynamic_sidebar() ) : else : ?>
        <?php endif;?>
    </ul>

</div>
</body>

</html>