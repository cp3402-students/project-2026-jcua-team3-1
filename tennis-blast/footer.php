<footer id="colophon" class="site-footer">

    <div class="footer-sponsors">
        <?php dynamic_sidebar( 'footer-sponsors' ); ?>
    </div>

    <div class="site-info">
        <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'tennis-blast' ) ); ?>">
            <?php
            printf( esc_html__( 'Proudly powered by %s', 'tennis-blast' ), 'WordPress' );
            ?>
        </a>
        <span class="sep"> | </span>
        <?php
        printf(
            esc_html__( 'Theme: %1$s by %2$s.', 'tennis-blast' ),
            'tennis-blast',
            '<a href="http://underscores.me/">Team 3</a>'
        );
        ?>
    </div><!-- .site-info -->

</footer><!-- #colophon -->