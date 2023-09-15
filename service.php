<?php require('./layout/header.php') ?>

    <section class="container about">
        <h2 class="subtitle">¿Qué es lo que ofrecemos?</h2>
        <p class="about__paragraph">Te presentamos los distintos servicios y planes que la empresa tiene para ti nos adaptamos a las necesidades de nuestros clientes.</p>

        <div class="about__main">
            <article class="about__icons">
                <img src="./img/Internet.png" class="about__icon">
                <h3 class="about__title">Internet</h3>
                <p class="about__paragrah">Elige el pan mensual que se adapte a tus necesidades y disfruta de una excelente velocidad de navegacion.</p>
            </article>

            <article class="about__icons">
                <img src="./img/Cable.png" class="about__icon">
                <h3 class="about__title">Cableado Estructurado</h3>
                <p class="about__paragrah">soluciones de conectividad e implementacion de infraestructura de redes y servicios de comunicacion</p>
            </article>

            <article class="about__icons">
                <img src="./img/Camaras.png" class="about__icon">
                <h3 class="about__title">Camaras de Vigilancia</h3>
                <p class="about__paragrah">Monitoreo en vivo mediante video y audio por medio de camaras fijas o moviles</p>
            </article>
        </div>
    </section>

    <section class="price container">
        <h2 class="subtitle">Obten el plan perfecto para ti</h2>

        <div class="price__table">
            <div class="price__element">
                <p class="price__name">Plan Basico</p>
                <h3 class="price__price">5 MEGAS</h3>
                <div class="price__items">
                    <p class="price__features">$250</p>
                    <p class="price__features">Pago Mensual</p>
                    <p class="price__features">Instalacion Inmediata</p>
                </div>
                <a href="#" class="price__cta">Contrata aqui</a>
            </div>


            <div class="price__element price__element--best">
                <p class="price__name">Plan Recomendado</p>
                <h3 class="price__price">10 MEGAS</h3>
                <div class="price__items">
                    <p class="price__features">$500</p>
                    <p class="price__features">Pago Mensual</p>
                    <p class="price__features">Instalacion Inmediata</p>
                </div>
                <a href="#" class="price__cta">Contrata aqui</a>
            </div>


            <div class="price__element">
                <p class="price__name">Plan Familiar</p>
                <h3 class="price__price">7 MEGAS</h3>
                <div class="price__items">
                    <p class="price__features">$350</p>
                    <p class="price__features">Pago Mensual</p>
                    <p class="price__features">Instalacion inmediata</p>
                </div>
                <a href="#" class="price__cta">Contrata aqui</a>
            </div>


        </div>
    </section>

<?php require('./layout/footer.php') ?>