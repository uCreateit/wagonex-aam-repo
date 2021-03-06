<section class="featured-vehicle-section">
    <div class="container-fluid">
        <h2 class="text-center mt-4 mb-5">Featured vehicles</h2>
        <div class="owl-carousel feature-vehicle owl-loaded owl-drag">
            <div class="owl-stage-outer">
                <div class="owl-stage" style="transition: all 2s ease 0s; width: 5515px; transform: translate3d(-1225px, 0px, 0px);">
                <?php
                    $args = array(
                        'post_type' => 'featured_vehicle',
                        'posts_per_page' => -1,
                    );
                    $posts = get_posts($args);
                    foreach ($posts as $post) :
                        $url = wp_get_attachment_url(get_post_thumbnail_id($post->ID));
                        ?>
                        <div class="owl-item">
                            <div class="white-box-container" car_detail_url="<?php echo get_post_meta($post->ID, 'detail_url', true) ?? get_option('app_site_url'); ?>">
                                <img src="<?php echo $url; ?>" width="48" alt="featured_vehicle">
                                <h3 class="car-brand-name mt-4 mb-4"><?php echo get_post_meta($post->ID, 'brand', true) ?? $post->post_title; ?></h3>
                                <h4 class="car-model-name"><?php echo get_post_meta($post->ID, 'model', true) ?? null; ?></h4>
                                <span class="car-price"><?php echo get_post_meta($post->ID, 'price', true) ?? null; ?></span>
                                <span class="car-duration"><?php echo get_post_meta($post->ID, 'subscription', true) ?? null; ?></span>
                            </div>
                        </div>

                        <?php
                    endforeach;
                    ?>
            </div>
        </div>
        <div class="owl-nav disabled">
            <button type="button" role="presentation" class="owl-prev">
                <span aria-label="Previous">‹</span>
            </button>
            <button type="button" role="presentation" class="owl-next">
                <span aria-label="Next">›</span>
            </button>
        </div>
    </div>
    <div class="col-md-12 btn-section">
        <div class="d-flex justify-content-center action-block">
            <a class="btn-secondary btn ml-4" href="<?php echo get_option('app_site_url'); ?>/browse?domain=AAM" target="_blank">Browse more</a>
        </div>
    </div>
</div>
</section>