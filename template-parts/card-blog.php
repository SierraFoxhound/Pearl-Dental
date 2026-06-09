<?php

/**
 * Template Part: Blog Card
 * File: template-parts/card-blog.php
 */
?>
<div class="col-md-6">
    <article class="card border-0 shadow-sm h-100 overflow-hidden blog-page-card">

        <div class="blog-img-wrap position-relative">
            <?php
            // Fetch the category array for the current post
            $categories = get_the_category();
            if (! empty($categories)) :
                // Target only the first primary category assigned to the post
                $first_category = $categories[0];
            ?>
                <a href="<?php echo esc_url(get_category_link($first_category->term_id)); ?>"
                    class="badge bg-primary position-absolute top-0 start-0 m-3 rounded-pill px-3 py-2 z-3 text-uppercase text-white text-decoration-none">
                    <?php echo esc_html($first_category->name); ?>
                </a>
            <?php endif; ?>

            <!-- Display blogimage with classes, if none, display grey padded box with fa icon -->
            <?php if (has_post_thumbnail()) : ?>
                <a href="<?php the_permalink(); ?>" class="d-block">
                    <?php
                    the_post_thumbnail('medium_large', array(
                        'class' => 'img-fluid w-100 object-fit-cover',
                        'alt'   => get_the_title()
                    ));
                    ?>
                </a>
            <?php else : ?>
                <div class="bg-secondary-subtle d-flex align-items-center justify-content-center" style="height: 220px;">
                    <i class="fa-solid fa-tooth fa-3x text-secondary opacity-25"></i>
                </div>
            <?php endif; ?>
        </div>

        <div class="card-body p-4 d-flex flex-column">
            <!-- Date -->
            <div class="d-flex align-items-center text-muted small mb-2">
                <time datetime="<?php echo get_the_date('c'); ?>">
                    <?php echo get_the_date(); ?>
                </time>
            </div>
            <!-- Title -->
            <h4 class="fw-bold text-dark mb-3 h5">
                <a href="<?php the_permalink(); ?>" class="text-dark text-decoration-none card-title-link">
                    <?php the_title(); ?>
                </a>
            </h4>
            <!-- Excerpt -->
            <div class="text-muted small flex-grow-1 mb-3">
                <?php
                // Trim down the summary output length cleanly to 20 words
                echo wp_trim_words(get_the_excerpt(), 20, '...');
                ?>
            </div>

            <hr class="my-3 opacity-25">
            <!-- Button container -->
            <div class="d-flex align-items-center justify-content-start">
                <a href="<?php the_permalink(); ?>" class="btn btn-sm btn-outline-primary rounded-pill px-4 fw-semibold">
                    Read Article <i class="fa-solid fa-arrow-right ms-1 small"></i>
                </a>
            </div>

        </div>
    </article>
</div>