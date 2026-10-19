<?php
/**
 * Vault Component: Blog Post / News Card (for Loop)
 *
 * $args options:
 * - show_author (bool): default true
 * - show_date (bool): default true
 */

$show_author = $args['show_author'] ?? true;
$show_date   = $args['show_date'] ?? true;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class( 'vault-blog-card' ); ?>>
    <?php if ( has_post_thumbnail() ) : ?>
        <div class="vault-card-thumb">
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail( 'medium_large' ); ?>
            </a>
        </div>
    <?php endif; ?>

    <div class="vault-card-body">
        <div class="vault-meta-row">
            <?php if ( has_category() ) : ?>
                <span class="vault-category-pill"><?php echo esc_html( get_the_category()[0]->name ); ?></span>
            <?php endif; ?>

            <?php if ( $show_date ) : ?>
                <time class="vault-post-date" datetime="<?php echo get_the_date( 'c' ); ?>">
                    <?php echo get_the_date(); ?>
                </time>
            <?php endif; ?>
        </div>

        <h3 class="vault-card-title">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h3>

        <div class="vault-card-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <div class="vault-card-footer">
            <?php if ( $show_author ) : ?>
                <span class="vault-author-name">By <?php the_author(); ?></span>
            <?php endif; ?>
            <a href="<?php the_permalink(); ?>" class="vault-link-action">Read Article &rarr;</a>
        </div>
    </div>
</article>
