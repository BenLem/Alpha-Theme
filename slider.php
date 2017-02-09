<?php   $i=0; while(latest_posts()){if(article_category_slug()=="articles-en-avant"){++$i;}};
        if($i!=0): ?>

<div class="slider">
    <ul>
        <?php   while(latest_posts()):
                if(article_category_slug()=="articles-en-avant"): ?>
        <li style="background-image: url('<?php echo article_custom_field('miniature'); ?>')">                     
            <div class="content">
                <div class="cat"><b><?php echo article_custom_field('theme'); ?></b></div>

                <a href="<?php echo article_url(); ?>" class="title"><?php echo article_title(); ?></a>

                <div style="height: 79px; overflow: hidden;" class="excerpt"><?php
                    if (article_description() == '') {
                        echo strip_tags(excerpt(article_html(), 165));
                    } else {
                        echo excerpt(article_description(), 160);
                    } ?></div>
            </div>
        </li>
        <?php endif; endwhile; ?>
    </ul>
</div>

<?php endif; ?>