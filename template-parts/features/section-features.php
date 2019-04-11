<?php

$args = array(
    'post_type'   => 'diferenciais',
    'post_status' => 'publish',
    'posts_per_page' => 3,
);

$query = new WP_Query( $args );

if( $query->have_posts() ):

?>
    <section class="Section Section--style1 Section--features u-paddingHorizontal">
        <div class="u-maxSize--container u-alignCenterBox u-paddingVertical">
            <ul class="Section-items u-size10of24">
            <?php while( $query->have_posts() ): $query->the_post(); ?>
                <li class="Section-items-item u-displayFlex u-flexAlignItemsCenter u-flexDirectionColumn u-flexSwitchRow u-marginBottom--inter">
                    <div class="Image">
                        <img src="<?php echo get_template_directory_uri() ?>/assets/images/featuretemplate.png" alt="<?php echo get_the_title(); ?>">
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