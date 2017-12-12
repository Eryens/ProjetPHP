<?php
    Controller::loadSharedTemplate('head'); 
?>
<body>
    <main>
        <?php Controller::loadSharedTemplate('header'); ?>
        
        <article>
            <?php Controller::loadTemplate($templateName); ?>
        </article>

        <?php Controller::loadSharedTemplate('footer', $data); ?>
    </main>
</body>