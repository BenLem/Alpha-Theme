<?php   theme_include('header');
        theme_include('quick-news'); ?>
<div class="wrap-main">
<?php   theme_include('slider');
        $max_article_count = 4;

        $article_count = array ('0' => 0, '1' => 0);
        $more = false; ?>
        
        <section class="main">
            <section class="posts">
                <h1 class="news">Les derniers <b>articles</b> à lire</h1>
        
                <ul>
                <?php while(latest_posts()): 
                    if ($article_count[0] <= $max_article_count) {++$article_count[0];};
                    if ($article_count[0] > $max_article_count) {$more = true;};
                    if (article_category_slug()<>'quick-news' and $article_count[1] < $max_article_count) : ?>
                        <li class='post'>
                            › <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><span class="title"><?php echo article_title(); ?></span></a>

                                <span class="infos"><span class="cat"><?php echo article_custom_field('theme'); ?></span> - <?php echo gmdate("d/m", article_time()); ?></span>

                                <div class="excerpt">
                                    <?php echo excerpt(article_markdown(), 205); ?>
                                </div>
                        </li>
                <?php ++$article_count[1];

                endif; endwhile;
                    
                if ($more == true) {?>
                    <li class='post'>
                        › <a href='<?=base_url();?>articles'><span class="title">Voir tous les articles</span></a>
                    </li>
                <?php };?>
                </ul>
        
        </section><!--

<?php   theme_include('sidebar'); ?><!----->
<a href="<?php echo base_url(); ?>admin/posts/" class="admin">Administration</a>
<?php   theme_include('footer'); ?>