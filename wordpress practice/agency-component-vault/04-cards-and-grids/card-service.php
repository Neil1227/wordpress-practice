<?php
/**
 * Vault Component: Service / Treatment Card (for Loop)
 *
 * $args options:
 * - badge_text (string): Tag/Category override
 * - action_text (string): Button label (default: 'Details &rarr;')
 */

$badge_text  = $args['badge_text'] ?? ( has_category() ? get_the_category()[0]->name : 'Service' );
$action_text = $args['action_text'] ?? 'Details &rarr;';
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'vault-service-card' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="vault-card-thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'medium_large' ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="vault-card-body">
        <span class="vault-category-pill"><?php echo esc_html( $badge_text ); ?></span>

        <h3 class="vault-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <div class="vault-card-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <div class="vault-card-footer">
            <span class="vault-status-indicator">● Available</span>
            <a href="<?php the_permalink(); ?>" class="vault-link-action"><?php echo esc_html( $action_text ); ?></a>
        </div>
    </div>
</article>
