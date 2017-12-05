<?php
    Controller::loadSharedTemplate('head'); 
?>
    <body>
        <main>
            <?php Controller::loadSharedTemplate('header'); ?>

            <article>
                <?php
                    Controller::loadTemplate('movieInformation', $data);
                ?>
            </article>
        </main>
    </body>