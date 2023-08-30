<?php

namespace App\Controller\Pages;

use \App\Utils\view;
use \App\Model\Entity\OrganiZation;

class Home extends Page {

    /**
     * Método responsável por retornar o conteúdo (view) do nossa home
     * @return string
     */
    public static function getHome() {
        // ORGANIzAÇÃO
        $obOrganiZation = new OrganiZation;

        //  VIEW DA HOME
        $content = View::render('pages/home',[
            'name' => $obOrganiZation->name,
            'description' => $obOrganiZation->description,
            'site' => $obOrganiZation->site
        ]);

        //RETORNA A VIEW DA PÁGINA
        return parent::getPage('EMUSICA - Canal = HOME', $content);
    }
}

