<?php
/* Template Name: Blog Page */

get_header(); ?>

<div class="sect_news">
    <div class="sect_news__container">

        <?php dynamic_sidebar('blog-category'); ?>

        <div class="sect_news__container--categories">
            <?php
            $tags = get_tags();
            if ($tags) :
                foreach ($tags as $tag) : ?>
                    <div class="items">
                        <?php
                        echo '<a href="' . get_tag_link($tag->term_id) . '" rel="tag">' . $tag->name . '  </a>';
                        ?>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
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

                                <!-- GET POST TAG -->
                                <div class="tag_div">
                                    <?php
                                    $tags = get_the_tags();
                                    if ($tags) :
                                        foreach ($tags as $tag) : ?>
                                            <a class="tag" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a>
                                        <?php endforeach; ?>
                                    <?php endif; ?>
                                </div>
                                <!-- END POST TAG -->

                                <!-- GET CATEGORY NAME -->
                                <?php foreach ((get_the_category()) as $cat) {
                                    echo $sep . '<a href="' . get_category_link($cat->term_id) . '"  class="' . $cat->slug . '" ' . esc_attr($cat->name) . '">' . $cat->cat_name . '</a>';
                                } ?>
                                <!-- END GET CATEGORY -->
                            </div>
                            <p class="text">
                                <?php the_title(); ?>
                            </p>
                            <div class="permalink">
                                <a href="<?php echo get_permalink(); ?>">
                                    <p>detail</p>
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/arrow_right_b.svg" alt="">
                                </a>
                            </div>
                        </div>
                    <?php endwhile; ?>

            </div>
            <div class="pagination">
                <?php echo easy_wp_pagenavigation($the_query); ?>
            </div>
        <?php endif; ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>