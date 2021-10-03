<?php get_header(); ?>
<div class="sect_news">
    <div class="sect_news__container">
        <!-- <?php echo "<img src = '" . get_field("cat_image", get_queried_object()) . "' >"; ?> -->

        <?php dynamic_sidebar('blog-category'); ?>

        <div class="sect_news__container--categories">
            <div class="items">
                <p><?php get_tag(); ?></p>
            </div>
        </div>

        <div class="news_content">
            <div class="news_content__item">
                <?php
                $paged = (get_query_var('paged')) ? absint(get_query_var('paged')) : 1;

                $args = array(
                    'post_type' => 'post',
                    'post_status' => 'publish',
                    'posts_per_page' => 10,
                    'paged' => $paged,
                );

                $the_query = new WP_Query($args);
                ?>

                <?php if ($the_query->have_posts()) : ?>

                    <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
                        <div class="news_content__item--cont">
                            <div class="title">
                                <p class="date"><?php echo get_the_date('Y.m.d'); ?></p>
                                <p class="category">カテゴリー</p>
                                <?php foreach ((get_the_category()) as $cat) {
                                    echo $sep . '<a href="' . get_category_link($cat->term_id) . '"  class="' . $cat->slug . '" ' . esc_attr($cat->name) . '">' . $cat->cat_name . '</a>';
                                } ?>
                            </div>
                            <p class="text">
                                <?php the_title(); ?>
                            </p>
                            <a href="<?php echo get_permalink(); ?>">
                                <p>detail</p>
                                <img src="<?php echo get_template_directory_uri(); ?>/img/common/arrow_right_b.svg" alt="">
                            </a>
                        </div>
                    <?php endwhile; ?>

            </div>
            <!-- <div class="pagination">
                <?php echo easy_wp_pagenavigation($the_query); ?>
            </div> -->
        <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>