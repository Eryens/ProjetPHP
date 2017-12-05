<?php
    Controller::loadSharedTemplate('head'); 
?>
    <body>
        <main>
            <?php Controller::loadSharedTemplate('header'); ?>
            <article>

                <h1 id="movieName"><?= $data['movie']['titre'] ?></h1>

                <!-- Synopsis -->
                <section class="row">
                    <h2>Synopsis</h2>
                    <p>
                        <?= $data['movie']['synopsis'] ?>
		            </p>
                </section>

                <!-- A propos -->
                <section class="row">
                    <h2>A propos</h2>
                    <p>
                        <?= $data['movie']['title'] ?> est un film sorti le <time><?= $data['movie']['releasedate'] ?></time>.
                    </p>
                </section>

                <!-- Acteurs -->
                <section class="row">
                    <h2>Acteurs</h2>

                    <?php foreach($data['pictureactor'] as $key => $value) { ?>

                    <figure class="col-4">
                        <img class="personPicture" src=<?=$value['path']?> alt="Actor">
                        <figcaption><?=$value['legend']?></figcaption>
                    </figure>

                    <?php } // end foreach ?> 
                </section>

                <!-- Realisateur -->
                <section class="row" id="realisateur">
                    <figure class="col-md-12 text-center">
                        <img class="personPicture" src=<?= $data['picturedirector']['path'] ?> alt="realisateur" height="200px">
                        <figcaption><?= $data['picturedirector']['legend'] ?></figcaption>
                    </figure>
                </section>

                <!-- Images film -->
                <section class="row">
                    <h2>Images du film</h2>
                    <?php //Controller::loadtemplate('imageList', $data); ?>
                </section>

            </article>

            <?php Controller::loadSharedTemplate('footer', $data); ?>
        </main>
    </body>