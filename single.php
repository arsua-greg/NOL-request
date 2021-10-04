<?php get_header(); ?>
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

        <div class="post_details">
            <div class="line"></div>
            <div class="post_content">
                <div class="post_content--details">
                    <img src="<?php echo get_template_directory_uri(); ?>/img/common/cat_2.svg" alt="">

                    <p><?php echo get_the_date('Y/m/d'); ?></p>
                    <p><?php the_title(); ?></p>
                </div>
                <div class="a-post-img-cont">
                    <?php the_post_thumbnail(); ?>
                </div>
                <div class="post_content--details">
                    <?php the_content(); ?>
                </div>
            </div>
            <div class="line"></div>
            <div class="p-pagination">
                <div class="p-pagination-width post-left post-pad-left">
                    <?php previous_post_link('%link', '<svg xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 15 5.77"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" x1="15" y1="2.89" x2="5" y2="2.89"/><polygon points="0 2.89 5 5.77 5 0 0 2.89"/></g></g></svg> prev.') ?>
                </div>

                <div class="p-pagination-width post-right post-pad-right">
                    <?php next_post_link('%link', 'next <svg xmlns="http://www.w3.org/2000/svg" width="15px" viewBox="0 0 15 5.77"><defs><style>.cls-1{fill:none;stroke:#000;stroke-miterlimit:10;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="レイヤー_1" data-name="レイヤー 1"><line class="cls-1" y1="2.89" x2="10" y2="2.89"/><polygon points="15 2.89 10 0 10 5.77 15 2.89"/></g></g></svg>') ?>
                </div>
            </div>
        </div>
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
<?php get_footer(); ?>