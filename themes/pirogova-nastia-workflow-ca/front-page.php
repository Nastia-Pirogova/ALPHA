<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package pirogova-nastia.workflow.ca
 */

get_header();
?>

    <main>
        <section class="hero">
            <div class="container hero-container">
                <div class="hero-inner">
                    <h1 class="hero-title">
                        <?php the_field("title"); ?>
                    </h1>
                    <h2 class="hero-title-descr"> <?php the_field("dectription"); ?></h2>
                    <ul class="hero-list">


                            <?php
                            if (have_rows('list')):
                            while (have_rows('list')) : the_row();
                            $sub_value = get_sub_field('list_item');
                            ?>
                        <li> <svg class="hero-list__item-icon" width="18px" height="18px">
                                <use class="" href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-check-mark"></use>
                            </svg><?php echo $sub_value; ?></li>
                        <?php endwhile; else : endif; ?>



                    </ul>

                    <button type="button" class="hero__button">
                        <svg class="hero__button-icon" width="18px" height="18px">
                            <use href="<?php echo bloginfo('template_url');?>/assets/images/icons.svg#icon-phone"></use>
                        </svg>
                        Request a call
                    </button>
                </div>
                <?php
                $image = get_field('images');
                if (!empty($image))
                    $image_id = $image['ID'];
                $image_alt = $image['alt'];
                $image_url = $image['url'];
                ?>
                <img class="hero-img" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt ?>">
<!--                <img class="hero-img" src="--><?php //echo bloginfo('template_url');?><!--/assets/images/hero-img.png" alt="">-->
            </div>
        </section>
    </main>

<?php

get_footer();
