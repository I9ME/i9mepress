<?php
    $args = array(
    'post_type'   => 'depoimentos',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    );
    
    $query = new WP_Query( $args );
    if( $query->have_posts() ) :
?>
<section class="Section Section--style1 Section--depoimentos u-paddingHorizontal">
    <div class="u-maxSize--container u-alignCenterBox u-paddingVertical">
        <div id="depoimentos" class="Section-header">
            <h2 class="Section-header-title u-alignCenter"><strong>Depoimentos</strong></h2>
        </div>
        <ul id="depoimentos-carousel" class="Section-items owl-carousel u-paddingVertical u-alignCenter">
            <?php
                while( $query->have_posts() ) :
                    $query->the_post();
                    ?>
                    <li class="Section-items-item u-displayFlex u-flexDirectionColumn u-paddingVertical u-flexJustifyContentCenter u-flexAlignItemsCenter   u-alignCenter u-boxShadow u-marginHorizontal--inter u-marginVertical u-paddingHorizontal--inter">
                        <figure class="Section-items-item-figure u-borderRadius100">
                            <?php echo get_the_post_thumbnail( $page->ID, 'thumbnail' ); ?>
                        </figure>
                        <h3 class="Section-items-item-title u-paddingHorizontal--inter"><?php echo get_the_title(); ?></h3>
                        <p class="Section-items-item-resume">"<?php echo get_the_content(); ?>"</p>
                    </li>
                    <?php
                endwhile;
                wp_reset_postdata();
            ?>
        </ul>
    </div>
</section>
<?php endif; ?>