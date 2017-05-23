<?php get_header(); ?>

<main>
    <h2>Spring Summer 2017</h2>
    <section>

        <?php
        $args = array(
            'category' => 3,
            'order' => "ASC"
        );
        $posts = get_posts($args);
        foreach ($posts as $post) { ?>

            <article>
                <a href="file:///home/remy/Code/intShopSass/product.html"><img src="http://placehold.it/175.5x200" alt="imageproduit" class="img-responsive"></a>

                <?php  $cats = get_the_category($post->ID);
                $hasSubClass = false;
                foreach ($cats as $cat) {
                    if ($cat->cat_ID == 4) { ?>

                        <h4 class="<?php echo $cat->slug ?>"><?php echo $cat->name ?></h4>

                <?php } elseif ($cat->cat_ID == 5) { ?>

                            <h4 class="<?php echo $cat->slug ?>"><?php echo $cat->name ?></h4>

                <?php } elseif ($cat->cat_ID == 6) { ?>

                                <h4 class="<?php echo $cat->slug ?>"><?php echo $cat->name ?></h4>

                <?php }
                }
                $meta = get_post_meta($post->ID, "Price"); ?>
                            <p><?php echo $post->post_title ?></p>
                            <span><?php echo $meta[0] ?></span>
                        </article>


                        <?php } ?>
                    </section>
                </main>

                <?php get_footer();
