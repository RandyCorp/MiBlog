<?php get_header(); ?>

<div class="container">
    <div class="row">
        <section class="main col-lg-8">
            <div class="row posts single-post">
                <!-- Mientras haya articulos, cargalos -->
                <?php if( have_posts() ) : while ( have_posts() ) : the_post();?>
                <!-- Articulo -->
                <article class="col-md-12 post">
                    <div class="contenedor">
                        <div class="info">
                            <h2 class="titulo"><?php the_title(); ?></h2>
                            <!-- <p class="fecha"><?php echo get_the_date(); ?></p> -->
                            <div class="texto">
                                <?php echo the_content(); ?>
                            </div>
                        </div>
                    </div>
                </article>

                <?php endwhile; else : ?>
                <!-- No hay articulos -->
                <article class="col-md-12 post">
                    <div class="contenedor">
                        <div class="info">
                            <h2 class="titulo">El post que buscas no existe</h2>
                            <div class="texto">
                                <p>Por favor, confirma que la URL sea correcta</p>
                            </div>
                        </div>
                    </div>
                </article>
                <?php endif; ?>
            </div>
        </section>
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>