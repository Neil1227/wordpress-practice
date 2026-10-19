<?php
/**
 * Vault Component: 3-Column 5-Star Testimonials / Social Reviews
 *
 * $args options:
 * - title (string)
 * - subtitle (string)
 */

$title    = $args['title'] ?? 'What Our Patients & Clients Say';
$subtitle = $args['subtitle'] ?? 'Read real feedback from verified clients who trust our team for their care.';
?>

<section class="vault-testimonials-section">
    <div class="vault-section-header">
        <span class="vault-section-tag">Reviews & Feedback</span>
        <h2 class="vault-section-title"><?php echo esc_html( $title ); ?></h2>
        <p class="vault-section-sub"><?php echo esc_html( $subtitle ); ?></p>
    </div>

    <div class="vault-testimonials-grid">
        <div class="vault-testimonial-card">
            <div class="vault-stars">★★★★★</div>
            <p class="vault-quote">"The entire team was incredibly gentle and welcoming. The laser treatment was completely painless, and my results are amazing!"</p>
            <div class="vault-client-info">
                <strong>Jessica Taylor</strong>
                <span>Verified Patient &bull; 2 weeks ago</span>
            </div>
        </div>

        <div class="vault-testimonial-card">
            <div class="vault-stars">★★★★★</div>
            <p class="vault-quote">"Booking online was effortless. I was in the doctor's chair within 5 minutes of arriving. Best healthcare experience in the city."</p>
            <div class="vault-client-info">
                <strong>David Miller</strong>
                <span>Verified Client &bull; 1 month ago</span>
            </div>
        </div>

        <div class="vault-testimonial-card">
            <div class="vault-stars">★★★★★</div>
            <p class="vault-quote">"Professional, transparent with insurance, and modern digital equipment. I highly recommend them to all my colleagues."</p>
            <div class="vault-client-info">
                <strong>Amanda Scott</strong>
                <span>Family Care Client &bull; 3 weeks ago</span>
            </div>
        </div>
    </div>
</section>
