<?php get_header(); ?>

<div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">
        <?php
        if ( have_posts() ) :
            // Start the Loop
            while ( have_posts() ) : the_post();
                ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                    <header class="entry-header">
                        <?php
                        if ( is_singular() ) :
                            the_title( '<h1 class="entry-title">', '</h1>' );
                        else :
                            the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
                        endif;
                        ?>
                    </header><!-- .entry-header -->

                    <div class="entry-content">
                        <?php
                        the_excerpt(); // Use the_excerpt() for excerpts or the_content() for full content
                        ?>
                        <a href="<?php the_permalink(); ?>" class="read-more"><?php _e( 'Read More', 'textdomain' ); ?></a>
                    </div><!-- .entry-content -->

                    <footer class="entry-footer">
                        <?php
                        // Optional: display categories, tags, etc.
                        the_category( ', ' );
                        the_tags( '<span class="tags-links">', ', ', '</span>' );
                        ?>
                    </footer><!-- .entry-footer -->
                </article><!-- #post-## -->

                <?php
            endwhile;

            // Pagination
            the_posts_pagination( array(
                'mid_size'  => 2,
                'prev_text' => __( 'Previous', 'textdomain' ),
                'next_text' => __( 'Next', 'textdomain' ),
            ) );

        else :
            ?>
            <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
            <?php
        endif;
        ?>
    </main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
