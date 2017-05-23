            
            <footer class="footer" role="contentinfo">

            
        <div class="social">
<div class="container-fluid">
<ul class="social-list">
<center>
                    <li class="facebook">
                    <a href="#" class="fa fa-facebook"></a>
                    </li>
                    <li class="twitter">
                        <a href="#" class="fa fa-instagram"></a>
                    </li>
                    <li class="dribbble">
                        <a href="#" class="fa fa-twitter"></a>
                    </li>
                    <li class="youtube">
                        <a href="#" class="fa fa-youtube"></a>
                    </li>
                    </center>
                </ul>
</div>
</div>
<footer>
<div class="container">
<ul class="footer-menu">
<center>
<?php wp_nav_menu( $arg = array(
    
'theme_location' => 'footer_primary',
                                
                                ) ); ?>
</center>
</div>
</footer>
        
    
    

        <?php wp_footer(); ?>

        <!-- analytics -->
        <script>
        (function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
        (f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
        l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
        ga('send', 'pageview');
        </script>

    </body>
</html>
