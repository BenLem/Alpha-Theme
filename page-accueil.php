<?php   theme_include('header');
        theme_include('quick-news'); ?>
<div class="wrap-main home">
<?php   theme_include('slider');
        $max_article_count = 4;

        $article_count = array ('0' => 0, '1' => 0);
        $more = false; ?>
        
        <section class="main home">
            <section class="posts">
                <h2 class="news">Les derniers <b>articles</b> à lire</h2>
        
                <ul>
                <?php while(latest_posts()): 
                    if ($article_count[0] <= $max_article_count) {++$article_count[0];};
                    if ($article_count[0] > $max_article_count) {$more = true;};
                    if (article_category_slug()<>'quick-news' and $article_count[1] < $max_article_count) : ?>
                        <li class='post'>
                            <a class='thumbnail-break' href="<?php echo article_url(); ?>" title="Lire l'article" style="background-image: url('<?php echo article_custom_field('miniature') ?>');"></a>
                            <div class='wrap'>
                                <header><h3 class='title'><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><span class="title"><?php echo article_title(); ?></span></a></h3></header>

                                <span class="infos"><span class="cat"><?php echo article_custom_field('theme'); ?></span> - <?php echo gmdate("d/m", article_time()); ?></span>

                                <div class="excerpt">
                                    <div class='text'><?php echo strip_tags(excerpt(article_html(), 205)); ?></div>
                                    
                                    <div class="infos-break">Posté le <?php echo gmdate("d/m", article_time()); ?> - <span class='cat'><?php echo article_custom_field('theme'); ?></span></div>
                                </div>
                            </div>
                        </li>
                <?php ++$article_count[1];

                endif; endwhile;
                    
                if ($more == true) {?>
                    <li class='post'>
                        <div class='wrap'>› <a href='<?=base_url();?>articles'><span class="title">Voir tous les articles</span></a></div>
                    </li>
                <?php };?>
                </ul>
        
        </section><!--

<?php   theme_include('sidebar'); ?><!----->
<a href="<?php echo base_url(); ?>admin/posts/" class="admin">Administration</a>
<?php   theme_include('footer'); ?>