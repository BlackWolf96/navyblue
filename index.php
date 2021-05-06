<?php
    /**
     * @package WordPress
     * @subpackage NavyBlue
     * @version 1.1
     * 
     */
?>
<?php get_header(); ?>
    <div class="col-lg-10 col-md-4 col-sm-12">
        <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
                <?php if(is_home()) : ?>
                    <div class="p-4 mb-2">
                        <article class="p-4 rounded bg-light shadow">
                            <a class="post-title" href="<?php the_permalink(); ?>">
                                <h2><?php the_title(); ?></h2>
                            </a>
                            <?php the_excerpt(); ?>
                        </article>
                    </div>
                <?php else : ?>
                    <div class="p-4 mb-2">
                        <article class="p-4 rounded bg-light shadow">
                            <?php the_content(); ?>
                        </article>
                    </div>
                <?php endif;?>
            <?php endwhile; ?>
        <?php else:?>
            Nothing Here
        <?php endif; ?>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-0 p-4">
        <div class="mb-5 bg-white">
            <?php if(is_active_sidebar('right_sidebar')) : ?>
                <?php dynamic_sidebar('right_sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer(); ?>