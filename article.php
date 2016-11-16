<?php   theme_include('header'); ?>

<div class="wrap-main">
    <div class="thumbnail" style="background-image: url('<?php echo article_custom_field('miniature'); ?>');">
        <h3 class="cat"><?php echo article_custom_field('theme'); ?></h3>
        <h1 class="title"><?php echo article_title(); ?></h1>
    </div>
    <section class="main single">
        <section class="page">
            <article class="single">
                <div class="content">
                    <h2 class="title break"><?php echo article_title(); ?></h2>
                    
                    <div class="post-content">
                        <?php echo article_markdown(); ?>
                    </div>

                    <div class="infos">
                        <p>Publié le <?php echo gmdate("d/m/Y", article_time()); ?>, par <?php echo article_author(); ?></p>

                        <ul class="socials">
                            <li><a href="http://www.facebook.com/share.php?u=<?=full_url().current_url()?>&title=<?php echo article_title(); ?>" class='fb'>Facebook</a></li>
                            <li><a href='http://twitter.com/intent/tweet?status=<?php echo article_title() ?>+<?=full_url().current_url()?>' class="twitter">Twitter</a></li>
                        </ul>
                    </div>
                </div>

                <?php if(comments_open()): ?>
                    <div class="comments">
                        <h2 class="comments-title">Commentaires</h2>

                        <div id="disqus_thread"></div>
                        
                        <script>
                            
                            var disqus_config = function () {
                                this.page.url = '<?=full_url().current_url()?>';
                                this.page.identifier = '<?=article_id()?>';
                            };
                            
                            (function() {
                                var d = document, s = d.createElement('script');

                                s.src = '//alpha-craft.disqus.com/embed.js';

                                s.setAttribute('data-timestamp', +new Date());
                                (d.head || d.body).appendChild(s);
                            })();
                        </script>
                        <noscript>Merci d'activer le JavaScript pour voir les commentaires</noscript>
                    </div>
                <?php endif; ?>
            </article>
        </section><!--

<?php   theme_include('sidebar'); ?><!---->
<a href="<?php echo base_url(); ?>admin/posts/edit/<?php echo article_id(); ?>" class="admin">Éditer l'article</a>
<?php   theme_include('footer'); ?>
