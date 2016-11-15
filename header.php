<!DOCTYPE html>
<html lang='fr'>
    <?php include('head.php'); ?>
    
    <body class="<?php echo body_class(); ?>">
        <!-- HEADER -->
        <header id='hdr'>
            
            <nav class='main'>
                <div class='wrap'>
                    <nav class='links left'>
                        <a href="<?php echo base_url(); ?>"><span data-hover="Home">Home</span></a>
                        <a href="<?php echo base_url(); ?>forum/t/support"><span data-hover="Support">Support</span></a>
                        <a href="<?php echo base_url(); ?>forum/"><span data-hover="Forum">Forum</span></a>
                    </nav>

                    <div class='banner-wrap'>
                        <a href='<?php echo base_url(); ?>' class='banner' style='-webkit-tap-highlight-color: transparent; -moz-tap-highlight-color: transparent;'></a>
                    </div>

                    <nav class='links right'>
                        <a href="<?php echo base_url(); ?>voter/"><span data-hover="Voter">Voter</span></a>
                        <a class="inactive" href="<?php echo base_url(); ?>boutique/"><span data-hover="Shop">Shop</span></a>
                        <a class="inactive" href="<?php echo base_url(); ?>a-propos/"><span data-hover="À propos">À propos</span></a>
                    </nav>
                </div>
            </nav>

            <!-- RESPONSIVE MENU BELOW -->
    
            
            <div onclick='drpDown()' style='-webkit-tap-highlight-color: transparent; -moz-tap-highlight-color: transparent;' id="menu-btn" class="drpdwn ripple">
                Menu

                <div class="hamburger" id='menu-hamburger'>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
                    
            <nav class='break drpdwn' id='nav-drpdwn'>
                <ul id="menu-drpdwn">
                    <li><a href="<?php echo base_url(); ?>">Home</a></li>
                    <li><a href="<?php echo base_url(); ?>forum/t/support">Support</a></li>
                    <li><a href="<?php echo base_url(); ?>forum/">Forum</a></li>
                    <li class='center'></li>
                    <li><a href="<?php echo base_url(); ?>voter/">Voter</a></li>
                    <li><a class="inactive" href="<?php echo base_url(); ?>boutique/">Shop</a></li>
                    <li><a class="inactive" href="<?php echo base_url(); ?>a-propos/">À propos</a></li>
                </ul>
            </nav>
        </header>