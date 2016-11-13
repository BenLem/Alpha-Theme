<?php   theme_include('header');
        theme_include('quick-news'); ?>
<div class="wrap-main">
<?php   theme_include('slider'); ?>

<section class="main">
    <section class="posts">
        <h1 class="news">Les derniers <b>articles</b> à lire</h1>
        <?php if(has_posts()): ?>
        <ul>
            <?php while(posts()): if(article_category_slug() != "quick-news"): ?>
                <li class='post'>
                    › <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><h3 class="title"><?php echo article_title(); ?></h3></a>
                    
                    <span class="infos"><span class="cat"><?php echo article_custom_field('theme'); ?></span> - <?php echo gmdate("d/m", article_time()); ?></span>
                    
                        
                    <div class="excerpt">
                        <a href="<?php echo article_url(); ?>" title="Lire l'article"><?php echo strip_tags(excerpt(article_html(), 205)); ?></a>
                    </div>
                </li>
            <?php endif; endwhile; ?>
        </ul>
    </section><!--

        <?php else : ?><!---->
            <ul>
                <li class="post">
                    <b class='error'>Erreur.</b> Aucun résultat trouvé.
                </li>
            </ul><!--
        <?php endif; ?>

<?php   theme_include('sidebar'); ?><!----->
<a href="<?php echo base_url(); ?>admin/posts/" class="admin">Administration</a>
<?php   theme_include('footer'); ?>