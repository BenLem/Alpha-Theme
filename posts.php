<?php   theme_include('header');
        theme_include('quick-news'); ?>
<div class="wrap-main posts">
    <section class="main">
        <section class="posts full">
            <?php if(has_posts()): ?>
            <ul>
                <?php while(posts()): if(article_category_slug()<>"quick-news"): ?>
                    <li class='post'>
                        <a class='thumbnail-break' href="<?php echo article_url(); ?>" title="Lire l'article" style="background-image: url('<?php echo article_custom_field('miniature') ?>');"></a>
                        <div class='wrap'>
                            <header><h3 class='title'><a href="<?php echo article_url(); ?>" title="<?php echo article_title(); ?>"><span class='title'><?php echo article_title(); ?></span></a></h3></header>

                            <div class="excerpt">                            
                                <a class='thumbnail' href="<?php echo article_url(); ?>" title="Lire l'article" style="background-image: url('<?php echo article_custom_field('miniature') ?>');"></a>

                                <a class='text' href="<?php echo article_url(); ?>" title="Lire l'article"><?php echo strip_tags(excerpt(article_html(), 505)); ?></a>

                                <div class="infos">Posté par <?php echo article_author(); ?> le <?php echo gmdate("d/m", article_time()); ?> - <span class='cat'><?php echo article_custom_field('theme'); ?></span></div>
                            </div>
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