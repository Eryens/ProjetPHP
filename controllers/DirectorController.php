<?php

class DirectorController extends Controller
{
    // todo: check if right
    public static function display(int $id)
    {
        $director = new Director($id);
        $data['personne'] = $director->getBaseInformation();
        return Controller::loadLayoutTemplate('person', $data);
    }
}