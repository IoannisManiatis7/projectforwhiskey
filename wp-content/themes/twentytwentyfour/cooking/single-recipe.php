<?php
/**
 * Template Name: Cooking
 * Template Post Type: post
 */

get_header();
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <main id="primary" class="site-main">
        <div class="overlay-image">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/B_Cooking.svg'); ?>" alt="B Cooking Logo">
        </div>

        <?php
        while (have_posts()) :
            the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <!-- Hero -->
                <?php
                $hero = get_field('hero');
                if ($hero) :
                ?>
                    <header class="hero-section">
                        <div class="hero-content">
                            <h1><?php echo wp_kses_post($hero['title']); ?></h1>
                            <p class="subtitle"><?php echo wp_kses_post($hero['subtitle']); ?></p>

                            <p class="creator"><?php echo wp_kses_post($hero['creator']); ?></p>
                        </div>
                        <div class="hero-image">
                            <?php if ($hero['image']) : ?>
                                <?php echo wp_get_attachment_image($hero['image'], 'large', false, array('alt' => esc_attr($hero['title']))); ?>
                            <?php endif; ?>
                        </div>
                        <p class="subtitle-phone"><?php echo wp_kses_post($hero['subtitle']); ?></p>
                    </header>
                <?php endif; ?>
                <div class="mid-border-1"></div>

                <!-- Main Content Container -->
                <div class="main-content">
                    
                    <!--Info and Ingredients -->
                    <div class="left-side">
                        <!-- Info Section -->
                        <div class="info-section">
                            <div class="section-border"></div>
                            <h2>Info</h2>
                            <div class="mid-border"></div>
                            <div class="section-border-under"></div>
                            <div class="info-desc">
                            <p class="time-entry">
                                <span class="time-label">Χρόνος Προετοιμασίας:</span>
                                <span class="time-value"><?php echo wp_kses_post(get_field('preparation_time')); ?></span>
                            </p>
                            <p class="time-entry">
                                <span class="time-label">Χρόνος Μαγειρέματος:</span>
                                <span class="time-value"><?php echo wp_kses_post(get_field('cooking_time')); ?></span>
                            </p>
                            <div class="difficulty-row time-entry">
                            <p class="time-entry">
                                <span class="difficulty-label">Βαθμός Δυσκολίας:</span>
                                </p>
                                <span class="difficulty-icons time-value">
                                
                                    <?php
                                    $difficulty = get_field('difficulty');
                                    if ($difficulty) :
                                        //colored knives
                                        for ($i = 0; $i < $difficulty; $i++) :
                                            echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/knife.svg') . '" alt="Knife Icon" class="knife-icon">';
                                        endfor;
                                        //grayed knives
                                        for ($i = $difficulty; $i < 5; $i++) :
                                            echo '<img src="' . esc_url(get_template_directory_uri() . '/assets/images/knife.svg') . '" alt="Knife Icon (Gray)" class="knife-icon grayed-out">';
                                        endfor;
                                    endif;
                                    ?>
                                </span>
                                </div>
                            </div>
                            <!-- Share icon -->
                            <div class="share-icon">
                                <a href="#" class="share-button">
                                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/share.svg'); ?>" alt="Share Icon">
                                </a>
                            </div>
                        </div>

                        <!-- Ingredients-->
                        <div class="ingredients-section">
                            <div class="section-border"></div>
                            <h2>Υλικά</h2>
                            <div class="mid-border"></div>
                            <?php
                            $ingredients = get_field('ingredients');
                            if (!empty($ingredients)) :
                                foreach ($ingredients as $ingredient) :
                                    if (isset($ingredient['sub-ingredients'])) :
                                        $sub_ingredients = $ingredient['sub-ingredients'];
                                        if (!empty($sub_ingredients['title'])) :
                                            echo '<h3>' . wp_kses_post($sub_ingredients['title']) . '</h3>';
                                        endif;
                                        if (!empty($sub_ingredients['ingredients'])) :
                                            echo '<ul>';
                                            foreach ($sub_ingredients['ingredients'] as $sub_ingredient) :
                                                if (!empty($sub_ingredient['ingredient'])) :
                                                    echo '<li>' . wp_kses_post($sub_ingredient['ingredient']) . '</li>';
                                                endif;
                                            endforeach;
                                            echo '</ul>';
                                        endif;
                                    endif;
                                endforeach;
                            else :
                                echo '<p></p>';
                            endif;
                            ?>
                        </div>
                    </div>

                    <!--Steps,tips,tags-->
                    <div class="steps-tips-tags-wrapper">
                        <!--Steps -->
                        <div class="right-side">
                            <div class="steps-section">
                                <div class="section-border"></div>
                                <h2>Εκτέλεση</h2>
                                <div class="mid-border"></div>
                                <?php
                                $recipe_steps = get_field('recipe_steps');
                                if (!empty($recipe_steps)) :
                                    $step_counter = 1;
                                    foreach ($recipe_steps as $step) :
                                        if (!empty($step['step_description'])) :
                                            echo '<div class="step">';
                                            echo '<span class="step-number">' . esc_html($step_counter) . '</span>';
                                            echo '<div class="step-content">' . wp_kses_post($step['step_description']) . '</div>';
                                            echo '</div>';
                                            $step_counter++;
                                        endif;
                                    endforeach;
                                else :
                                    echo '<p>No steps found.</p>';
                                endif;
                                ?>
                            </div>
                            <!-- Tips-->
                <div class="tips-section">
                    <h2># το tipακι</h2>
                    <div class="tips-par">
                    <?php
                    if (have_rows('tip')) :
                        
                        echo '<ul class="tips-list">';
                        while (have_rows('tip')) : the_row();
                            $tip_description = get_sub_field('tips_desc');
                            if ($tip_description) :
                                echo '<li><p>' . wp_kses_post($tip_description) . '</p></li>';
                            endif;
                        endwhile;
                        echo '</ul>';
                    else :
                        echo '<p>No tips found.</p>';
                    endif;
                    ?>
                    </div>
                </div>
                    <!-- Credits and Tags-->
                    <div class="credits-tags-wrapper">
                    <div class="credits-section">
                        <?php
                        $credits = get_field('credits');
                        if ($credits) :
                            echo '<div class="credits-content">' . wp_kses_post($credits) . '</div>';
                        else :
                            echo '<p></p>';
                        endif;
                        ?>
                    </div>

                    <!-- Tags -->
                    <div class="tags-section">
                        <?php
                        $tags = get_the_tags();
                        if ($tags) :
                            echo '<div class="tags-list">'; 
                            foreach ($tags as $tag) :
                                echo '<span class="tag-button">' . esc_html($tag->name) . '</span>';
                            endforeach;
                            echo '</div>';
                        else :
                            echo '<p></p>'; 
                        endif;
                        ?>
                    </div>
                </div>
                        </div>
                    </div>

                    <!-- Ad Placeholder Box -->
                    <?php render_ad_placeholder(); ?>
                </div>

                


            </article>
        <?php
        endwhile; 
        ?>
    </main>

    <?php
    get_sidebar();
    get_footer();
    ?>
</body>
</html>