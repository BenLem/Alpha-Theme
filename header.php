<!DOCTYPE html>
<html>
    <?php include('head.php'); ?>
    
    <body class="<?php echo body_class(); ?>">
        <!-- HEADER -->
        <header id='hdr'>
            <nav class='main'>
                <nav class='cl-effect-5 left'>
                    <a href="<?php echo base_url(); ?>"><span data-hover="Home">Home</span></a>
                    <a href="<?php echo base_url(); ?>forum/t/support"><span data-hover="Support">Support</span></a>
                    <a href="<?php echo base_url(); ?>forum/"><span data-hover="Forum">Forum</span></a>
                </nav>
                
                <div class='banner-wrap'>
                    <a href="<?php echo base_url(); ?>" class="banner"></a>
                </div>
                
                <nav class='cl-effect-5 right'>
                    <a href="<?php echo base_url(); ?>voter/"><span data-hover="Voter">Voter</span></a>
                    <a class="inactive" href="<?php echo base_url(); ?>boutique/"><span data-hover="Shop">Shop</span></a>
                    <a class="inactive" href="<?php echo base_url(); ?>a-propos/"><span data-hover="À propos">À propos</span></a>
                </nav>
            </nav>
        </header>