<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
         <video autoplay muted loop class="video">
            <source src="./wp-content/themes/foce-child/Koukakivideo.mp4" type="video/mp4">
            </video>
         <img id="logoo" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
        </section>
        <section id="story" class="story">
            <h2 class="parent-container">
                <div class="reveal">
                    <div class="text-container">
                        <h5>L'</h5>
                    </div>
                </div>
                <div class="reveal_vincent">
                    <div class="text-container">
                        <h5>histoire</h5>
                    </div>
                </div>
            </h2>
            <article id="" class="story__article">
                <p><?php echo get_theme_mod('story'); ?></p>
            </article>
            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>
            <!-- Carousel -->
            <?php get_template_part( 'partielcarousel' ); ?>
            <article id="place">
                <!-- Nuages -->
                <div class="d">
                    <img class="nuage1" src=".\wp-content\themes\foce-child\images\big_cloud.png">
                    <img class="nuage2" src=".\wp-content\themes\foce-child\images\little_cloud.png">
                    <h3 class="parent-container">
                        <div class="reveal">
                            <div class="text-container">
                                <h5>Le</h5>
                            </div>
                        </div>
                        <div class="container reveal_vincent">
                            <div class="text-container">
                                 <h5>lieu</h5>
                            </div>
                        </div>

                    </h3>
                    <p><?php echo get_theme_mod('place'); ?></p>
                    
                </div>
            </article>
        </section>


        <section id="studio">
            <h2 class="parent-container" >
            <div class="reveal">
                    <div class="text-container">
                        <h5>Studio</h5>
                    </div>
                </div>
                <div class="reveal_vincent">
                    <div class="text-container">
                        <h5>Koukaki</h5>
                    </div>
                </div>
            </h2>
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
        </section>
        <!-- section.php -->

        <section class="menu">
            <img class="logo" src=".\wp-content\themes\foce-child\images\logo.png" alt="Menu">
            <img class="img cat-1" src=".\wp-content\themes\foce-child\images\menu\cat-1.png" alt="Menu">
            <img class="img cat" src=".\wp-content\themes\foce-child\images\menu\cat.png" alt="Menu">
            <img class="img flower" src=".\wp-content\themes\foce-child\images\menu\Flower.png" alt="Menu">
            <img class="img group" src=".\wp-content\themes\foce-child\images\menu\Group 180.png" alt="Menu">
            <img class="img orchid" src=".\wp-content\themes\foce-child\images\menu\Orchid.png" alt="Menu">
            <img class="img sunflower" src=".\wp-content\themes\foce-child\images\menu\Sunflower.png" alt="Menu">
            <img class="img hibiscus" src=".\wp-content\themes\foce-child\images\menu\Hibiscus footer.png" alt="Menu">
            <img class="img random" src=".\wp-content\themes\foce-child\images\menu\Random Flower.png" alt="Menu">
            <div class="choices">
                <a class="a" href="#story" class="parent-container">Histoire</a>
                <a class="a" href="#characters" class="parent-container">Personnages</a>
                <a class="a lieu" href="#place" class="parent-container">Lieu</a>
                <a class="a" href="#studio" class="parent-container">Studio Koukaki</a>
            </div>
            <p class="footer">Studio Koukaki</p>
        </section>
       
    </main><!-- #main -->

<?php
get_footer();
