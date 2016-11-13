<?php   theme_include('header');
        theme_include('quick-news'); ?>
<div class="wrap-main posts">
    <section class="main">
        <section class="posts full">
            <?php if(has_posts()): ?>
            <ul>
                <?php while(posts()): if(article_category_slug()<>"quick-news"): ?>
                    <li class='post'>
                        <header>› <a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><h3 class="title"><?php echo article_title(); ?></h3></a>

                        <span class="infos"><span class="cat"><?php echo article_custom_field('theme'); ?></span> - <?php echo gmdate("d/m", article_time()); ?></span></header>


                        <div class="excerpt">
                            <a href="<?php echo article_url(); ?>" title="Lire l'article"><?php echo strip_tags(excerpt(article_html(), 405)); ?></a>
                        </div>
                    </li>
                <?php endif; endwhile; ?>
            </ul>
            <?php if(has_pagination()): ?>
                <nav class="pagination">
                    <div class="previous">
                        <?php echo posts_prev('Plus ancien'); ?>
                    </div><!--
                    --><div class="next">
                        <?php echo posts_next('Plus récent'); ?>
                    </div>
                </nav>
            <?php endif;
            else: ?>
            <ul>
                <li class="post">
                    <b class='error'>Erreur.</b> Aucun résultat trouvé.
                </li>
            </ul>
            <?php endif; ?>
        </section>

<a href="<?php echo base_url(); ?>admin/posts/" class="admin">Administration</a>
<?php   theme_include('footer'); ?>