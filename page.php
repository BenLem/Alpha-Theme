<?php   theme_include('header'); ?>

<div class='wrap-main page'>
    <section class='main'>
        <article class="single page">
            <div class="content">
                <h1 class="title"><?php echo page_title(); ?></h1>

                <div class="post-content">
                    <?php echo page_content(); ?>
                </div>
            </div>
        </article>
    </section>
</div>

<?php   theme_include('footer'); ?>