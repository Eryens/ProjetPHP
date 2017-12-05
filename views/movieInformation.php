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
                        <img src=<?=$value['path']?> alt="Actor">
                        <figcaption><?=$value['legend']?></figcaption>
                    </figure>

                    <?php } // end foreach ?> 
                </section>
            </article>
        </main>
    </body>