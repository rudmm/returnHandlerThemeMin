<!--begin footer-->

<footer class="footer">
                <div class="footer_logo">
                <?php 
                if( has_custom_logo( $blog_id ) ){
                the_custom_logo();
                }else{
                ?>
                <a href="<?php bloginfo('url'); ?>">
                    <img src="<?php echo get_template_directory_uri() ?>/assets/img/logo_footer.svg" alt="logo" class="img-fluid">
                </a>
                <?php }?>
                </div>
                <div class="footer_menu">
                <?php wp_nav_menu( [
                    'theme_location'  => 'bottom', 
                    'container'       => null, 
                    'container_class' => null, 
                    'container_id'    => null,
                    'menu_class'      => 'menu', 
                    'menu_id'         => null,
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                    ] ); ?>
                </div>
                <div class="copyright">
                    <span>@returnhandler 2019</span>
                </div>
            </footer>
        </div>
    </div>
    <script>
                let theme_location = '<?php echo get_template_directory_uri(); ?>';
            </script>
    <?php wp_footer(); ?>
</body>
</html>