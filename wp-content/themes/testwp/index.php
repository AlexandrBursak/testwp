<?php
/**
 * Created by PhpStorm.
 * User: bursak
 * Date: 4/13/16
 * Time: 3:35 AM
 */

get_header(); ?>

<div id="primary" class="content">
    <main id="main" class="site-main">

        <?php if ( have_posts() ) : ?>
            <section class="page-content">

                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>">
                        <?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>

                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <div class="entry-content">
                            <?php the_excerpt(); ?>
                        </div>

                        <?php
                        edit_post_link(
                            sprintf( 'Edit "%s"' , get_the_title() ),
                            '<footer class="entry-footer"><span class="edit-link">',
                            '</span></footer>'
                        );
                        ?>
                        <div class="clear"></div>

                    </article>

                <?php endwhile; ?>

        <?php

            // Previous/next page navigation.
            the_posts_pagination( array(
            'prev_text'          => __( 'Previous page' ),
            'next_text'          => __( 'Next page' ),
            'before_page_number' => '<span>' . __( 'Page' ) . ' </span>',
            ) );
        ?>
            </section>
        <?php
        else :
        ?>
            <section class="not-found">
                <header>
                    <h1><?php _e( 'Nothing Found!' ); ?></h1>
                </header>
            </section>
        <?php
            endif;
        ?>


    </main>

    <?php get_sidebar(); ?>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>

