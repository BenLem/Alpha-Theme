<?php   theme_include('header'); ?>

<section class="page">
    <article class="single">
        <div class="content">
            <h1 class="title"><?php echo page_title(); ?></h1>

            <div class="post-content">
                <?php echo page_content(); ?>
            </div>
        </div>
    </article>
</section>

<a href="<?php echo base_url(); ?>admin/posts/edit/<?php echo article_id(); ?>" class="admin">Éditer l'article</a>
<?php   theme_include('footer'); ?>