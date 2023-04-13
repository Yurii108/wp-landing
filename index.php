<?php get_header(); ?>

<div class="card-list">
    <div class="card-list__wrappar">
        <div class="card card-list__card">
            <?php 
            $image = get_field('image');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h2 class="card-list__title"><?php the_field('title'); ?></h2>
            <p class="card-list__description"><?php the_field('discription'); ?></p>
            <a class="card-list__link card-list__btn">Show more</a>
        </div>

        <div class="card card-list__card">
            <?php 
            $image = get_field('image1');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h2 class="card-list__title"><?php the_field('title1'); ?></h2>
            <p class="card-list__description"><?php the_field('discription1'); ?></p>
            <a class="card-list__link card-list__btn">Show more</a>
        </div>

        <div class="card card-list__card">
            <?php 
            $image = get_field('image2');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h2 class="card-list__title"><?php the_field('title2'); ?></h2>
            <p class="card-list__description"><?php the_field('discription2'); ?></p>
            <a class="card-list__link card-list__btn">Show more</a>
        </div>

        <div class="card card-list__card">
            <?php 
            $image = get_field('image3');
            if( !empty( $image ) ): ?>
            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
            <?php endif; ?>
            <h2 class="card-list__title"><?php the_field('title3'); ?></h2>
            <p class="card-list__description"><?php the_field('discription3'); ?></p>
            <a class="card-list__link card-list__btn">Show more</a>
        </div>

    </div>
</div>

<?php get_footer(); ?>