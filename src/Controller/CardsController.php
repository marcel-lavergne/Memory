<?php


namespace App\Controller;


class CardsController extends AbstractController
{
    public function index()
    {
        return $this->twig->render('Cards/index.html.twig');
    }

}
