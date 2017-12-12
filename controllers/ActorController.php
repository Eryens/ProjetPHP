<?php

class ActorController extends Controller
{
    // todo: check if right
    public static function display(int $id)
    {
        $actor = new Actor($id);
        
        return Controller::loadLayoutTemplate('person', $data);
    }
}