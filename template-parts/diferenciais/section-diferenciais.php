<?php

$args = array(
    'post_type'   => 'diferenciais',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);

$query = new WP_Query( $args );

if( $query->have_posts() ):

?>
    <section class="Section Section--style1 Section--diferenciais u-paddingHorizontal">
        <div class="u-maxSize--container u-alignCenterBox u-paddingVertical">
            <ul class="Section-items u-size10of24">
            <?php while( $query->have_posts() ): $query->the_post();
                // CAPTURANDO URL DA THUMBNAIL
                $image_id = has_post_thumbnail() ? get_post_thumbnail_id() : "";
                $thumbnail = $image_id ? wp_get_attachment_image_src($image_id)[0] : "";
            ?>
                <li class="Section-items-item u-displayFlex u-flexAlignItemsCenter u-flexDirectionColumn u-flexSwitchRow u-marginBottom--inter">
                    <div class="Image">
                        <img src="<?php echo $image_id ? $thumbnail : get_template_directory_uri() . "/assets/images/featuretemplate.png" ; ?>" alt="<?php echo get_the_title(); ?>">
                    </div>
                    <div class="Content u-alignCenter">
                        <h2 class="Section-items-item-title u-paddingBottom--inter--half"><?php echo get_the_title(); ?></h2>
                        <p class="Section-items-item-resume"><?php echo get_the_content(); ?></p>
                    </div>
                </li>
            <?php endwhile; ?>
            </ul>
        </div>
    </section>

<?php endif; ?>