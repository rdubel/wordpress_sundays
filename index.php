<?php get_header(); ?>

<main>
    <h2>Spring Summer 2017</h2>
    <section>
        <article>
            <a href="file:///home/remy/Code/intShopSass/product.html"><img src="http://placehold.it/175.5x200" alt="image produit" class="img-responsive"></a>
            <h4 class="buy">buy</h4>
            <p>Random product Name</p>
            <span>€200.00</span>
        </article>

        <?php
        $args = array(
            'category' => 3
        );
        $posts = get_posts($args);
        foreach ($posts as $post) { ?>

            <article>
                <a href="file:///home/remy/Code/intShopSass/product.html"><img src="http://placehold.it/175.5x200" alt="imageproduit" class="img-responsive"></a>

                <?php  $cats = get_the_category($post->ID);
                        foreach ($cats as $cat) {
                            if ($cat->cat_ID == 4) {?>

                                <h4 class="<?php echo $cat->slug ?>"><?php echo $cat->name ?></h4>
                        <?php }
                        } ?>

            </article>


        <?php } ?>
    </section>
</main>

<?php get_footer();
