<article class="col-12 col-md-12 col-lg-12 col-xl-8 row mx-auto mb-5">
    <div class="col-12 col-md-12 col-lg-4 d-flex justify-content-center">
        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
    </div>
    <div class="col-12 col-md-12 col-lg-8">
        <h2 class="text-center text-uppercase display-6">
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </h2>
        <p>
            <?php echo display_attributs_articles(
                get_the_date(),
                get_the_category_list(', '),
                get_the_tag_list('', ', '),
                get_the_author(),
                get_comments_number(', pas de commentaire'),
            )
            ?>
        </p>
        <div class="w-100">
            <?php the_excerpt(); ?>
            <p>
                <a href="<?php the_permalink(); ?>" class="post__link">Lire la suite</a>
            </p>
        </div>
        <p class="post__meta"> Publié le <?php the_time(get_option('date_format')); ?></p>
        <p>Auteur : <?php the_author(); ?></p>
        <p>Commentaire : <?php comments_number('Pas de commentaire pour l\'instan'); ?></p>
        <p>Catégorie(s) : <?php the_category() ?></p>
        <p>Etiquette(s) : <?php the_tags('') ?></p>
        <!-- Lien lire la suite -->

    </div>
</article>