<?php

get_header();
?>

    <main id="primary" class="site-main">
        <section class="banner">
            <video id="background-video" poster="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>" autoplay loop muted>
                <source src="<?php echo get_theme_file_uri() . '/assets/videos/koukaki-video.mp4'; ?>" type='video/mp4'>
            </video>
            <div id="logo-parallax"><img  class="logo-koukaki" src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants"  data-0="top:0px" data-300="top:200px" data-600="top:0px">       
        </div>
        </section>
        <section id="story" class="story">
            <h2 class="infade "><span class="infade animtitre">L'histoire</span> </h2> <!-- Ajout de class-->
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
            <article id="characters">
                <div class="main-character">
                    <h3 class="infade "><span class="infade animtitre">Les personnages</span></h3> <!-- Ajout de class-->
                    <?php get_template_part('template-parts/personnages-carrousel'); ?>
                </div>
            </article>
            <article id="place" >
                <div >
                    <h3 class="infade "><span class="infade animtitre">Le Lieu</span></h3> <!-- Ajout de class-->
                    <p><?php echo get_theme_mod('place'); ?></p>
                    <img class="grand-nuage" src="<?php echo get_theme_file_uri() . '/assets/images/grand-nuage.png'; ?>" alt="Grand nuage">
                    <img class="petit-nuage" src="<?php echo get_theme_file_uri() . '/assets/images/petit-nuage.png'; ?>" alt="Petit nuage">
                </div>

            </article>
        </section>


        <section id="studio" class="studio">
            <h2 class="infade "><span class="infade animtitre">Studio Koukaki</span></h2> <!-- Ajout de class-->
            <div>
                <p>Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p>Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>
            <?php get_template_part('template-parts/oscars'); ?> <!-- ajout part-->

    </main><!-- #main -->

<?php
get_footer();


