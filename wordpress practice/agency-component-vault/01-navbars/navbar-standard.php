<?php
/**
 * Vault Component: Standard Header Navbar
 *
 * $args options:
 * - brand_name (string): Brand name text (default: Site Title)
 * - cta_text (string): Right button text (default: 'Get in Touch')
 * - cta_url (string): Right button link (default: '#contact')
 */

$brand_name = $args['brand_name'] ?? get_bloginfo( 'name' );
$cta_text   = $args['cta_text'] ?? 'Get in Touch';
$cta_url    = $args['cta_url'] ?? '#contact';
?>

<header class="vault-navbar-wrapper">
    <div class="vault-navbar-container">
        <div class="vault-logo">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>">
                <?php echo esc_html( $brand_name ); ?><span>.</span>
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
                echo '<li><a href="' . esc_url( home_url( '/' ) ) . '">Home</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/services' ) ) . '">Services</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/about' ) ) . '">About</a></li>';
                echo '<li><a href="' . esc_url( home_url( '/contact' ) ) . '">Contact</a></li>';
                echo '</ul>';
            }
            ?>
        </nav>

        <?php if ( $cta_text ) : ?>
            <div class="vault-nav-cta">
                <a href="<?php echo esc_url( $cta_url ); ?>" class="vault-btn-primary">
                    <?php echo esc_html( $cta_text ); ?>
                </a>
            </div>
        <?php endif; ?>
    </div>
</header>
