<aside class="col-lg-4">
    <div class="widget redes-sociales">
        <div class="titulo-seccion">
            <h3>Síguenos</h3>
        </div>

        <div class="redes-sociales">
            <a class="telegram" href="https://t.me/RandyCorpYT">
                <i class="icono fab fa-telegram-plane"></i>
                <span class="seguidores">1</span>
            </a>
            <a class="youtube" href="https://www.youtube.com/RandyCorp">
                <i class="icono fab fa-youtube"></i>
                <span class="seguidores">1044</span>
            </a>
            <a class="facebook" href="https://www.facebook.com/RandyCorpYT">
                <i class="icono fab fa-facebook"></i>
                <span class="seguidores">91</span>
            </a>
            <a class="twitter" href="https://twitter.com/RandyCorpYT">
                <i class="icono fab fa-twitter"></i>
                <span class="seguidores">16</span>
            </a>
        </div>
    </div>

    <div class="widget">
        <div class="titulo-seccion">
            <h3>Información destacada</h3>
        </div>

    <!-- Soporte para widgets (Si existen widgets configurados, que los ejecute) -->
    <?php if ( !function_exists("dynamic_sidebar") || !dynamic_sidebar("Sidebar") ) : endif; ?>
</aside>