<?php

namespace App\Controller\Pages;

use \App\Utils\view;

class Home {

    /**
     * Método responsável por retornar o conteúdo (view) do nossa home
     * @return string
     */
    public static function getHome() {
        return View::render('pages/home');
    }
}

