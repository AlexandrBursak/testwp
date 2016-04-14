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

            <section class="page-content">

                <?php while ( have_posts() ) : the_post(); ?>

                    <article id="post-<?php the_ID(); ?>">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

                        <div class="post-thumbnail">
                            <?php the_post_thumbnail(); ?>
                        </div>

                        <div class="entry-content">
                            <?php the_content(); ?>
                        </div>

                        <?php
                        edit_post_link(
                            sprintf( 'Edit "%s"' , get_the_title() ),
                            '<footer class="entry-footer"><span class="edit-link">',
                            '</span></footer>'
                        );

                        ?>

                        <div class="entry-comment">
                            <?php comments_template(); ?>
                        </div>

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

    </main>

    <?php get_sidebar(); ?>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>

