<?php   theme_include('header'); ?>

<div class="wrap-main">
    <div class="thumbnail" style="background-image: url('<?php echo article_custom_field('miniature'); ?>');">
        <h2 class="cat"><?php echo article_custom_field('theme'); ?></h2>
        <h1 class="title"><?php echo article_title(); ?></h1>
    </div>
    <section class="main large">
        <section class="page">
            <article class="single">
                <div class="content">
                    <div class="post-content">
                        <?php echo article_markdown(); ?>
                    </div>

                    <div class="infos">
                        <p>Publié le <?php echo gmdate("d/m/Y", article_time()); ?>, par <?php echo article_author(); ?></p>

                        <ul class="socials">
                            <li><div class="fb-like" data-layout="button" data-action="like" data-show-faces="false" data-share="false"></div></li>
                            <li><a class="twitter-share-button" href="https://twitter.com/intent/tweet" data-text="Alpha :" data-hashtags="Minecraft">Tweet</a></li>
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
                        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>
                    </div>
                <?php endif; ?>
            </article>
        </section><!--

<?php   theme_include('sidebar'); ?><!---->
<a href="<?php echo base_url(); ?>admin/posts/edit/<?php echo article_id(); ?>" class="admin">Éditer l'article</a>
<?php   theme_include('footer'); ?>
