<?php if(has_posts()):
while(posts()): if(article_category_slug() == "quick-news"): ?>

    <article class="quick-news <?php echo article_custom_field('theme'); ?>">
        <p><?php echo article_markdown(); ?></p>
    </article>

<?php endif; endwhile;
endif; ?>