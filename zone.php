<?php require('./layout/header.php') ?>
    <div class="about">
        <div class="section_maps">
            <div>
                
            <iframe class="content-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d60551.579373933855!2d-97.4499991515147!3d18.462189782013933!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c582bb9b474927%3A0x181452bc07d211eb!2zVGVodWFjw6FuLCBQdWUu!5e0!3m2!1ses-419!2smx!4v1691890943482!5m2!1ses-419!2smx"width="400px" height="300px"></iframe>
            </div>
            <iframe class="content-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d36010.66222479361!2d-97.31801689975428!3d18.43128853767295!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c5bb9b6b4fdcc9%3A0x4b39191156d53a77!2sSan%20Pablo%20Tepetzingo%2C%20Pue.!5e0!3m2!1ses-419!2smx!4v1692326289632!5m2!1ses-419!2smx" width="400px" height="300px"></iframe>
            <iframe class="content-maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d122038.84703637828!2d-96.75544225884927!3d17.086638134136773!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85c7221b8344be7d%3A0x9ad3a00f0440b253!2sZona%20Metropolitana%20de%20Oaxaca%2C%20Oax.!5e0!3m2!1ses-419!2smx!4v1692326343515!5m2!1ses-419!2smx" width="400px" height="300px" ></iframe>
        </div>
    </div>
    <section class="testimony">
        <div class="testimony__container container">
            <img src="./images/leftarrow.svg" class="testimony__arrow" id="before">

            <section class="testimony__body testimony__body--show" data-id="1">
                <div class="testimony__texts">
                    <h2 class="subtitle">Mi nombre es Jordan Alexander, <span class="testimony__course">estudiante
                            de CSS.</span></h2>
                    <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                        esse, asperiores eaque totam nulla repudiandae quasi, deserunt culpa exercitationem
                        blanditiis laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                </div>

                <figure class="testimony__picture">
                    <img src="./images/face.jpg" class="testimony__img">
                </figure>
            </section>

            <section class="testimony__body" data-id="2">
                <div class="testimony__texts">
                    <h2 class="subtitle">Mi nombre es Alejandra Perez, <span class="testimony__course">estudiante de
                            CSS.</span></h2>
                    <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                        esse, asperiores eaque laborum veniam laboriosam saepe reiciendis dolorem. Cum, ratione
                        voluptatum!</p>
                </div>

                <figure class="testimony__picture">
                    <img src="./images/face2.jpg" class="testimony__img">
                </figure>
            </section>

            <section class="testimony__body" data-id="3">
                <div class="testimony__texts">
                    <h2 class="subtitle">Mi nombre es Karen Arteaga, <span class="testimony__course">estudiante de
                            CSS.</span></h2>
                    <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                        esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                </div>

                <figure class="testimony__picture">
                    <img src="./images/face3.jpg" class="testimony__img">
                </figure>
            </section>

            <section class="testimony__body" data-id="4">
                <div class="testimony__texts">
                    <h2 class="subtitle">Mi nombre es Kevin Ramirez, <span class="testimony__course">estudiante de
                            CSS.</span></h2>
                    <p class="testimony__review">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ut est
                        esse, niam laboriosam saepe reiciendis dolorem. Cum, ratione voluptatum!</p>
                </div>

                <figure class="testimony__picture">
                    <img src="./images/face4.jpg" class="testimony__img">
                </figure>
            </section>


            <img src="./images/rightarrow.svg" class="testimony__arrow" id="next">
        </div>
    </section>

<?php require('./layout/footer.php') ?>