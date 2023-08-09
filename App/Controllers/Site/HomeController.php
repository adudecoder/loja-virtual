<?php

namespace App\Controllers\Site;

use App\Controllers\BaseController;

class HomeController extends BaseController
{
    public function index()
    {

        $dados = [
            'titulo' => 'Loja Virtual'
        ];

        $template = $this->twig->load('home.html');
        $template->display($dados);
    }
}