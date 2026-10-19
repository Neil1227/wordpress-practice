<?php
/**
 * Vault Component: Navbar with Top Announcement / Emergency Hotline Strip
 *
 * $args options:
 * - notice_text (string): Left notification / address
 * - hotline_label (string): Hotline title
 * - hotline_number (string): Phone number
 * - btn_text (string): Booking button text
 */

$notice_text    = $args['notice_text'] ?? '📍 123 Healthcare Blvd, Suite 400 • Open Mon-Sat 8am - 6pm';
$hotline_label  = $args['hotline_label'] ?? 'Emergency Line:';
$hotline_number = $args['hotline_number'] ?? '(555) 019-2834';
$btn_text       = $args['btn_text'] ?? '📅 Book Appointment';
?>

<!-- Top Notice Strip -->
<div class="vault-top-notice">
    <div class="vault-top-notice-inner">
        <span><?php echo esc_html( $notice_text ); ?></span>
        <span><?php echo esc_html( $hotline_label ); ?> <strong><?php echo esc_html( $hotline_number ); ?></strong></span>
    </div>
</div>

<!-- Main Header Navbar -->
<header class="vault-navbar-wrapper">
    <div class="vault-navbar-container">
        <div class="vault-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php bloginfo( 'name' ); ?><span>+</span>
            </a>
        </div>

        <nav class="vault-nav-menu">
            <?php
            if ( has_nav_menu( 'primary-menu' ) ) {
                wp_nav_menu( array(
                    'theme_location' => 'primary-menu',
                    'container'      => false,
                    'fallback_cb'    => false,
                ) );
            } else {
                echo '<ul>';
                echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Services</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Doctors</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">About</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Contact</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>

        <div class="vault-nav-cta">
            <a href="#appointment" class="vault-btn-primary">
                <?php echo esc_html( $btn_text ); ?>
            </a>
        </div>
    </div>
</header>
