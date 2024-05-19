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
            <?php get_template_part( 'carousel' ); ?>
            <!-- <article id="characters">
                <h3 class="parent-container">
                    <div class="reveal">
                        <div class="text-container">
                            <h5>Les</h5>
                        </div>
                    </div>
                    <div class="container reveal_vincent">
                        <div class="text-container">
                         <h5>personnages</h5>
                        </div>
                    </div>
                </h3>
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="../../wp-content/uploads/2022/06/Jaakuna-1.png" alt="Jaakuna">
                            <div class="swiper-slide-title">Jaakuna</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="../../wp-content/uploads/2022/06/Kawaneko.png" alt="Kawaneko">
                            <div class="swiper-slide-title">Kawaneko</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="../../wp-content/uploads/2022/06/Orenjiiro-1.png" alt="Orenjiiro">
                            <div class="swiper-slide-title">Orenjiiro</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="../../wp-content/uploads/2022/06/Pinku-1.png" alt="Pinku">
                            <div class="swiper-slide-title">Pinku</div>
                        </div>
                        <div class="swiper-slide">
                            <img src="../../wp-content/uploads/2022/06/Tenshi-1.png" alt="Tenshi">
                            <div class="swiper-slide-title">Tenshi</div>
                        </div>
                    </div>
                </div>
                <script src="../../wp-content/themes/foce-child/carousel.js"></script>
            </article> -->
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
                    
                    <script src="../../wp-content/themes/foce-child/nuages.js"></script>
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
                <div class="container reveal_vincent">
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
            <img class="background" src=".\wp-content\themes\foce-child\images\back.png" alt="Menu">
            <img class="logo" src=".\wp-content\themes\foce-child\images\logo.png" alt="Menu">
            <div class="choices">
                <a class="a" href="#story">Histoire</a>
                <a class="a" href="#characters">Personnages</a>
                <a class="a lieu" href="#place">Lieu</a>
                <a class="a" href="#studio">Studio Koukaki</a>
            </div>
            <p class="footer">Studio Koukaki</p>
        </section>
        <script src="../../wp-content/themes/foce-child/menu.js"></script>
       
    </main><!-- #main -->

<?php
get_footer();
