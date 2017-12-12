<?php
    Controller::loadSharedTemplate('head'); 
?>
<body>
    <main>
        <?php Controller::loadSharedTemplate('header'); ?>
        
        <article>
        </article>

        <?php Controller::loadSharedTemplate('footer', $data); ?>
    </main>
</body>