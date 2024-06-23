<?php

get_header();
?>

    <main id="primary" class="site-main">

        <section class="banner">

            <div class="banner__logo">
                <img class="flottement" src="<?php echo get_theme_file_uri() . '/assets/images/logo.png'; ?> " alt="logo Fleurs d'oranger & chats errants">
            </div>
         
            <video class="banner__video" autoplay loop muted  poster="<?php echo get_theme_file_uri() . '/assets/images/banner.png'; ?>">
                <source src="<?php echo get_theme_file_uri() . '/assets/video/Koukaki-video.mp4'; ?>" type="video/mp4">
            </video>  
       
        </section>

        <section id="#story" class="story">
            <h2>L'histoire</h2>
            <article id="" class="story__article">
                <p id="paragraphes" ><?php echo get_theme_mod('story'); ?></p>
            </article> 
          
            <!-- Ajout du Caroussel -->
            <?php get_template_part('templates-parts/caroussel'); ?>

            <article id="place">
                <div class="place__container">
                    <h3>Le Lieu</h3> 
                    <p id="paragraphes"><?php echo get_theme_mod('place'); ?></p>
                    <!--  Ajout des Nuages  -->
                    <div class="place_clouds">
                        <img class="cloud_big" src="<?php echo get_theme_file_uri() . '/assets/images/big_cloud.png'; ?>" alt="gros nuage">
                  
                        <img class="cloud_little" src="<?php echo get_theme_file_uri() . '/assets/images/little_cloud.png'; ?>" alt="petit nuage">
                    </div>
                 </div>

            </article>
        </section>


        <section id="studio">
            <h2>Studio Koukaki</h2>
            <div>
                <p id="paragraphes" >Acteur majeur de l’animation, Koukaki est un studio intégré fondé en 2012 qui créé, produit et distribue des programmes originaux dans plus de 190 pays pour les enfants et les adultes. Nous avons deux sections en activité : le long métrage et le court métrage. Nous développons des films fantastiques, principalement autour de la culture de notre pays natal, le Japon.</p>
                <p id="paragraphes" >Avec une créativité et une capacité d’innovation mondialement reconnues, une expertise éditoriale et commerciale à la pointe de son industrie, le Studio Koukaki se positionne comme un acteur incontournable dans un marché en forte croissance. Koukaki construit chaque année de véritables succès et capitalise sur de puissantes marques historiques. Cette année, il vous présente “Fleurs d’oranger et chats errants”.</p>
            </div>
            </section>

             <!-- Section Oscars Short Film .img -->
            <?php get_template_part('/templates-parts/oscars'); ?> 

    </main><!-- #main -->

<?php
get_footer();
