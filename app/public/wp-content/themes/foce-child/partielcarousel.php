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

            <?php
            $args = array(
                'post_type' => 'characters',
                'posts_per_page' => -1,
                'meta_key'  => '_main_char_field',
                'orderby'   => 'meta_value_num',

            );
            $characters_query = new WP_Query($args);
            ?>


            <article id="characters">
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
                    <?php
                        while ( $characters_query->have_posts() ) {
                            $characters_query->the_post();
                            echo '<div class="swiper-slide">';
                            echo get_the_post_thumbnail( get_the_ID(), 'full' );
                            echo '<figcaption>';
                            the_title();
                            echo'</figcaption>';
                            echo '</div>';
                        }
                        ?>
                    </div>
                </div>
            </article>


    