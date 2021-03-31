<?php get_header(); ?>
    <div class="col-lg-10 col-md-4 col-sm-12">
        <div class="p-4 mb-2">
            <article class="p-4 rounded bg-light shadow">
                <h1>
                    <?php the_title(); ?>
                </h1>
            <div class="">
                <?php the_content(); ?>
            </div>
            
            </article>
            <?php get_template_part('comments'); ?>
        </div>
    </div>
    <div class="col-lg-2 col-md-4 col-sm-0 p-4">
        <div class="mb-5 bg-white">
            <?php if(is_active_sidebar('right_sidebar')) : ?>
                <?php dynamic_sidebar('right_sidebar'); ?>
            <?php endif; ?>
        </div>
    </div>
<?php get_footer();?>