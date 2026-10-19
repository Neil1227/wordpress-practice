<?php
/**
 * Vault Component: Multi-Column Business & Clinic Footer
 *
 * $args options:
 * - about_text (string)
 * - hours_text (string)
 * - phone (string)
 * - email (string)
 * - address (string)
 */

$about_text = $args['about_text'] ?? 'Providing premium, compassionate, patient-centered care and modern digital services for individuals and families.';
$hours_text = $args['hours_text'] ?? "Monday – Friday: 8:00 AM – 6:00 PM\nSaturday: 9:00 AM – 2:00 PM\nSunday: Closed";
$phone      = $args['phone'] ?? '(555) 019-2834';
$email      = $args['email'] ?? 'care@clinic.com';
$address    = $args['address'] ?? '123 Healthcare Blvd, Suite 400';
?>

<footer class="vault-footer">
    <div class="vault-footer-container">
        <div class="vault-footer-grid">
            <div class="vault-footer-col">
                <h4 class="vault-footer-heading"><?php bloginfo( 'name' ); ?></h4>
                <p><?php echo esc_html( $about_text ); ?></p>
            </div>

            <div class="vault-footer-col">
                <h4 class="vault-footer-heading">Working Hours</h4>
                <p><?php echo nl2br( esc_html( $hours_text ) ); ?></p>
            </div>

            <div class="vault-footer-col">
                <h4 class="vault-footer-heading">Contact & Location</h4>
                <p>
                    <i class="bi bi-geo-alt-fill"></i> <?php echo esc_html( $address ); ?><br>
                    <i class="bi bi-telephone-fill"></i> <?php echo esc_html( $phone ); ?><br>
                    <i class="bi bi-envelope-fill"></i> <?php echo esc_html( $email ); ?>
                </p>
            </div>
        </div>

        <div class="vault-footer-bottom">
            <p>&copy; <?php echo date( 'Y' ); ?> <?php bloginfo( 'name' ); ?>. All rights reserved &bull; Built with WordPress Component Vault.</p>
        </div>
    </div>
</footer>
