        <!-- Main wrap close -->
        </div>

        <footer class="main">
            <div class="wrap">
                <p class="left">
                    <b style="font-size: 20px;"><span style="color: rgba(211, 1, 14, 0.63)">ALPHA</span></b> est un serveur PvP/Faction <a href="http://minecraft.net/">Minecraft™</a>
                </p>
                
                <p class="right">
                    <a href='http://play.alpha-craft.co'>play.alpha-craft.co</a>
                </p>
            </div>
            
            <nav class='foot'>
                    <p>&copy <?php echo date('Y'); ?> Alpha-Craft - <a href='<?php echo base_url(); ?>mentions-legales'>Mentions légales</a> - Powerd by <a href='http://anchorcms.com'>Anchor</a></p>
                </nav>
        </footer>

        <!-- Scripts -->
        <script>
            function drpDown() {
                document.getElementById("nav-drpdwn").classList.toggle("show");
                document.getElementById("menu-btn").classList.toggle("show");
            }
            
            window.onclick = function(event) {
              if (!event.target.matches('#menu-btn')) {

                var dropdowns = document.getElementsByClassName("drpdwn");
                var i;
                for (i = 0; i < dropdowns.length; i++) {
                  var openDropdown = dropdowns[i];
                  if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                  }
                }
              }
            }
        </script>

        <script src="http://cdnjs.cloudflare.com/ajax/libs/angular.js/1.2.20/angular.min.js"></script>
        
        <script src="//code.jquery.com/jquery-2.1.4.min.js"></script>
    
        <script>$(function(){
                var ink, d, x, y;
                $(".ripple").click(function(e){
                    if($(this).find(".ink").length === 0){
                    $(this).prepend("<span class='ink'></span>");
                }

                ink = $(this).find(".ink");
                ink.removeClass("animate");

                if(!ink.height() && !ink.width()){
                    d = Math.max($(this).outerWidth(), $(this).outerHeight());
                    ink.css({height: d, width: d});
                }

                x = e.pageX - $(this).offset().left - ink.width()/2;
                y = e.pageY - $(this).offset().top - ink.height()/2;

                ink.css({top: y+'px', left: x+'px'}).addClass("animate");
                });
            });</script>

        <script>(function(d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id)) return;
                js = d.createElement(s); js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>
        
        <script src="<?php echo theme_url('/lib/slider/unslider-min.js'); ?>"></script>

        <script>$(function() { $('.slider').unslider({
            arrows: false,
            autoplay: true,
            delay: 6000, })})</script>

    </body>
</html>