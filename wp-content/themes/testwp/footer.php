<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 4/13/16
 * Time: 3:27 AM
 */
?>
    <footer class="site-footer">
        <div id="site-footer-menu" class="site-footer-menu">
            <?php if ( has_nav_menu( 'primary' ) ) : ?>
                <?php
                    wp_nav_menu( array(
                        'theme_location' => 'primary',
                        'menu_class'     => 'primary-menu',
                    ) );
                ?>
            <?php endif; ?>
        </div>
        <div>
            <span class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
                    <?php printf( __( 'Copyright © 2016 %s ', 'twentysixteen' ), 'WordPress' ); ?>
                    <?php bloginfo( 'name' ); ?>
                    <?php __( 'Все права защищены.', 'twentysixteen' ); ?>
                </a></span>
        </div>
    </footer>
</div>

<?php wp_footer(); ?>
</body>
</html>