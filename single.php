<?php
/*Template Name: Product
Template Post Type: post, page
*/
get_header();
if ( have_posts() ) :
 ?>
 <section id="product">
        <img src="http://lorempixel.com/400/600" alt="product image" class="img-rounded">
        <article id="desc">
            <h2><?php echo the_title() ?></h2>
            <p><?php echo get_post_field("post_content") ?></p>
            <h4><?php echo get_post_custom_values("Price")[0] ?></h4>
            <form action="post">
                <label for="qty">Quantity x </label>
                <input type="number" id="qty" value="1">
            </form>
            <button type="button" class="btn btn-info">Add to Cart</button>
        </article>
    </section>
<?php endif ?>
<?php get_footer();
