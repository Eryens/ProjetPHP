<?php

class Controller {
    
    // Loads a template from the view directory
    public static function loadTemplate($templateName, $args = null) {

        if (!empty($args)) {
            $data = $args;
        }

        include dirname(dirname(__FILE__)) . '/views/' . $templateName . '.php';
    }

    // Loads a template from the view shared directory (exemple : head and menu)
    public static function loadSharedTemplate($templateName, $args = null) {
        
        if (!empty($args)) {
            $data = $args;
        }

        include dirname(dirname(__FILE__)) . '/views/shared/' . $templateName . '.php';
    }

    // Loads a template from the admin directory
    public static function loadAdminTemplate($templateName, $args = null) {
        
        if (!empty($args)) {
            $data = $args;
        }

        include dirname(dirname(__FILE__)) . '/views/admin/' . $templateName . '.php';
    }
}