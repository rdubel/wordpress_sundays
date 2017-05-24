<?php get_header(); ?>

<main>
    <h2>Spring Summer 2017</h2>
    <section>

        <?php
        $args = array(
            'category' => 3,
            'numberposts' => -1,
            'order' => "ASC"
        );
        $posts = get_posts($args);
        foreach ($posts as $post) { ?>

            <article class="catprod"><a href="<?php echo get_permalink($post->ID) ?>">
                <img src="http://placehold.it/175.5x200" alt="imageproduit" class="img-responsive">

                <?php  $cats = get_the_category($post->ID);
                $tags = get_the_tags($post->ID);
                foreach ($tags as $tag) {
                    if ($tag->term_id == 7) { ?>

                        <h4 class="<?php echo $tag->slug ?>"><?php echo $tag->name ?></h4>

                <?php } elseif ($tag->term_id == 9) { ?>

                            <h4 class="<?php echo $tag->slug ?>"><?php echo $tag->name ?></h4>

                <?php } elseif ($tag->term_id == 8) { ?>

                                <h4 class="<?php echo $tag->slug ?>"><?php echo $tag->name ?></h4>

                <?php }
                }
                $meta = get_post_meta($post->ID, "Price"); ?>
                            <p><?php echo $post->post_title ?></p>
                            <span><?php echo $meta[0] ?></span>
                        </a></article>


                        <?php } ?>
                    </section>
                </main>

                <?php get_footer();
