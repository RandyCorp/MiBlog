<?php get_header(); ?>

<div class="container">
    <div class="row">
        <section class="main col-lg-12">
            <div class="row posts single-post">
                <article class="col-md-12 post">
                    <div class="contenedor">
                        <div class="info">
                            <h2 class="titulo">Error 404</h2>
                            <div class="texto">
                                <p>La página que buscas no fue encontrada, verifica que la URL sea correcta.</p>
                                <img src="<?php bloginfo("template_url"); ?> /img/404.jpg" alt="Error 404">
                                <br>
                                <a href="<?php bloginfo("url"); ?>">Regresa a la página principal</a>
                            </div>
                        </div>
                    </div>
                </article>
            </div>
        </section>
    </div>
</div>

<?php get_footer(); ?>