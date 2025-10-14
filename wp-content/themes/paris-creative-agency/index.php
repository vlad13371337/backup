<?php
/**
 * Default index template.
 */
get_header();
?>
<section class="section">
    <div class="section-inner">
        <?php if ( have_posts() ) : ?>
            <?php while ( have_posts() ) : the_post(); ?>
                <article <?php post_class( 'card' ); ?>>
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="entry-meta">
                        <span><?php echo esc_html( get_the_date() ); ?></span>
                    </div>
                    <div class="entry-summary">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
        <?php else : ?>
            <p><?php esc_html_e( 'No content found.', 'paris-creative-agency' ); ?></p>
        <?php endif; ?>
    </div>
</section>
<?php
get_footer();
