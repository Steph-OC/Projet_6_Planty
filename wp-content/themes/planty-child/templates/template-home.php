<?php

/**
 * Template Name: Home Template
 */


get_header();
?>

<main id="primary" class="site-main">

    <section class="pl-banner">
        <h1>BOISSON ENERGISANTE 100% NATURELLE</h1>
        <img class="img-banner-1" src="<?= get_stylesheet_directory_uri() . "/assets/img/Group_17.png" ?>" alt="cannette Planty">
    </section>
    <section class="pl-presentation">
        <h2>L'énergie des plantes</h2>
        <p> Planty, c’est la première boisson
            énergisante composée à 100 % de produits naturels.
            Avec son goût frais et fruité, retrouvez votre
            énergie grâce aux plantes riches en vitamine B2,
            à n’importe quel moment de la journée.</p>
    </section>

    <section class="pl-flavour">
        <h3>LES GOUTS</h3>
        <p>Nous avons une saveur pour chaque moment de votre journée.</p>
        <article class="pl-img-flavour">
            <img class="img-flavour" src="<?= get_stylesheet_directory_uri() . "/assets/img/fraise.png" ?>" alt="fraises">
            <img class="img-flavour" src="<?= get_stylesheet_directory_uri() . "/assets/img/pamplemousse.png" ?>" alt="pamplemousse">
            <img class="img-flavour" src="<?= get_stylesheet_directory_uri() . "/assets/img/framboise.png" ?>" alt="framboise">
            <img class="img-flavour" src="<?= get_stylesheet_directory_uri() . "/assets/img/citron.png" ?>" alt="citron">
        </article>
        <a class='' href="">
            <button class='button-page'>Commander</button>
        </a>
    </section>

    <section class="pl-opinion">
        <h3>CE QU'ILS EN PENSENT</h3>
        <article class="pl-img-opinion">
            <div class="pl-section-opinion">
                <img class="img-opinion" src="<?= get_stylesheet_directory_uri() . "/assets/img/P-fatiha.png" ?>" alt="photo incrusté dans un grand p">
                <div class="text-opinion">
                    <h4>Fatiha</h4>
                    <p>La meilleure boisson énergisante disponible sur le marché ! </p>
                </div>
            </div>
            <div class="pl-section-opinion">
                <img class="img-opinion" src="<?= get_stylesheet_directory_uri() . "/assets/img/P-vero.png" ?>" alt="photo incrusté dans un grand p">
                <div class="text-opinion">
                    <h4>Véro</h4>
                    <p>Frais & fruité c’est parfait pour accompagner le goûter.</p>
                </div>
            </div>
            <div class="pl-section-opinion">
                <img class="img-opinion" src="<?= get_stylesheet_directory_uri() . "/assets/img/P-marc.png" ?>" alt="photo incrusté dans un grand p">
                <div class="text-opinion">
                    <h4>Marc</h4>
                    <p>Un boost d’énergie sans produits chimiques, un vrai plus dans ma journée.</p>
                </div>
            </div>
        </article>

        <img class="pl-can" src="<?= get_stylesheet_directory_uri() . "/assets/img/cannettes.png" ?>" alt="cannettes alignées sur différentes hauteurs">

    </section>
</main><!-- #main -->

<?php

get_footer();