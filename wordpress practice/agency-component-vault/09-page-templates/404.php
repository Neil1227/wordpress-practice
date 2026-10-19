<?php
/**
 * Vault Page Template: 404 Error Page (Page Not Found)
 * Template Name: 404 Error Page
 *
 * In WordPress: When a visitor visits a broken URL or non-existent post/page,
 * WordPress automatically loads 404.php from your theme root!
 *
 * @package AgencyComponentVault
 */

get_header();
?>

<div class="vault-404-container">
    <div class="vault-404-card">
        
        <!-- Large Visual Badge / Status Code -->
        <div class="vault-404-badge">
            <span class="vault-404-number">404</span>
            <div class="vault-404-icon-bubble">
                <i class="bi bi-compass-fill"></i>
            </div>
        </div>

        <h1 class="vault-404-title">Oops! Page Not Found</h1>
        <p class="vault-404-desc">
            The page or resource you are looking for might have been moved, renamed, or is temporarily unavailable. Let’s get you back on track!
        </p>

        <!-- Search Bar Form -->
        <div class="vault-404-search-box">
            <form role="search" method="get" class="vault-404-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
                <div class="vault-404-input-group">
                    <i class="bi bi-search vault-404-search-icon"></i>
                    <input type="search" class="vault-404-search-field" placeholder="Search treatments, doctors, or articles..." value="<?php echo get_search_query(); ?>" name="s" />
                    <button type="submit" class="vault-btn-primary">Search</button>
                </div>
            </form>
        </div>

        <!-- Quick Recovery / Helpful Links Grid -->
        <div class="vault-404-quick-links">
            <h3 class="vault-404-quick-heading">Popular Destinations</h3>
            <div class="vault-404-grid">
                
                <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="vault-404-link-card">
                    <div class="vault-404-card-icon"><i class="bi bi-house-door-fill"></i></div>
                    <div class="vault-404-card-text">
                        <strong>Homepage</strong>
                        <span>Return to the main overview</span>
                    </div>
                    <i class="bi bi-chevron-right vault-404-arrow"></i>
                </a>

                <a href="<?php echo esc_url( home_url( '/services' ) ); ?>" class="vault-404-link-card">
                    <div class="vault-404-card-icon"><i class="bi bi-grid-fill"></i></div>
                    <div class="vault-404-card-text">
                        <strong>Our Services</strong>
                        <span>Explore clinical treatments & pricing</span>
                    </div>
                    <i class="bi bi-chevron-right vault-404-arrow"></i>
                </a>

                <a href="<?php echo esc_url( home_url( '/doctors' ) ); ?>" class="vault-404-link-card">
                    <div class="vault-404-card-icon"><i class="bi bi-people-fill"></i></div>
                    <div class="vault-404-card-text">
                        <strong>Our Specialists</strong>
                        <span>Meet our certified practitioners</span>
                    </div>
                    <i class="bi bi-chevron-right vault-404-arrow"></i>
                </a>

                <a href="<?php echo esc_url( home_url( '/contact' ) ); ?>" class="vault-404-link-card">
                    <div class="vault-404-card-icon"><i class="bi bi-envelope-fill"></i></div>
                    <div class="vault-404-card-text">
                        <strong>Contact Desk</strong>
                        <span>Get help & direct hotline numbers</span>
                    </div>
                    <i class="bi bi-chevron-right vault-404-arrow"></i>
                </a>

            </div>
        </div>

        <!-- Direct Actions Strip -->
        <div class="vault-404-actions">
            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="vault-btn-primary">
                <i class="bi bi-arrow-left"></i> Return to Homepage
            </a>
            <a href="tel:5550192834" class="vault-btn-outline">
                <i class="bi bi-telephone-fill"></i> Need Help? Call (555) 019-2834
            </a>
        </div>

    </div>
</div>

<?php
// Optional Reusable Urgent Hotline Partial
get_template_part( 'template-parts/cta-urgent-call', null, array(
    'title' => 'Looking for Immediate Consultation?',
) );

get_footer();
