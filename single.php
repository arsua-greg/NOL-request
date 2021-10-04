<?php get_header();

/* Template Name: Single Page */ ?>


<div class="sect_news">
    <div class="sect_news__container">
        <div class="sect_news__container--pc">
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
        </div>

        <div class="post_details">
            <div class="line"></div>
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <div class="post_content">
                        <div class="post_content--details">
                            <div class="category_image">
                                <!-- <?php echo "<img src='" . get_field("cat_image", get_queried_object()) . "'/>"; ?> -->

                                <?php
                                $term = get_queried_object();


                                // vars
                                $image = get_field('image', $term);
                                $color = get_field('color', $term);

                                $terms = get_the_terms(get_the_ID(), 'category');

                                ?>

                                <?php
                                $terms = get_the_terms(get_the_ID(), 'product_brands');

                                if (!empty($terms)) : ?>
                                    <ul>
                                        <?php foreach ($terms as $term) : ?>

                                            <li class="<?php echo $term->slug; ?>">

                                                <img src="<?php the_field('brand_logo', $term); ?>" />

                                            </li>

                                        <?php endforeach; ?>
                                    </ul>
                                <?php
                                endif;
                                ?>


                            </div>
                            <div class="post_ttl">
                                <p class="sing_date"><?php echo get_the_date('Y/m/d'); ?></p>
                                <div class="tags">
                                    <div class="tag_div">
                                        <?php
                                        $tags = get_the_tags();
                                        if ($tags) :
                                            foreach ($tags as $tag) : ?>
                                                <a class="tag" href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>" title="<?php echo esc_attr($tag->name); ?>"><?php echo esc_html($tag->name); ?></a>
                                            <?php endforeach; ?>
                                        <?php endif; ?>
                                    </div>
                                    <?php foreach ((get_the_category()) as $cat) {
                                        echo $sep . '<a href="' . get_category_link($cat->term_id) . '"  class="' . $cat->slug . '" ' . esc_attr($cat->name) . '">' . $cat->cat_name . '</a>';
                                    } ?>
                                </div>
                            </div>
                            <p class="sing_ttl"><?php the_title(); ?></p>
                        </div>
                        <div class="a-post-img-cont">
                            <?php the_post_thumbnail(); ?>
                        </div>
                        <div class="post_content--details">
                            <?php the_content(); ?>
                        </div>
                    </div>
                <?php endwhile; ?>
                <div class="line"></div>
                <div class="p-pagination">
                    <div class="p-pagination-width post-left post-pad-left">
                        <?php previous_post_link('%link', '<svg xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 15 5.77"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="15" y1="2.89" x2="5" y2="2.89"/><polygon points="0 2.89 5 5.77 5 0 0 2.89"/></g></g></svg> prev.') ?>
                    </div>

                    <div class="p-pagination-width post-right post-pad-right">
                        <?php next_post_link('%link', 'next <svg xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 15 5.77"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" y1="2.89" x2="10" y2="2.89"/><polygon points="15 2.89 10 0 10 5.77 15 2.89"/></g></g></svg>') ?>
                    </div>
                </div>
            <?php else : endif; ?>
        </div>
        <div class="sect_news__container--sp">
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
        </div>
    </div>
</div>
<?php get_footer(); ?>