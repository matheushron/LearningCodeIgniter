<?php

namespace App\Controllers;

use App\Controllers\BaseController; //apagar essa linha caso de algum erro

class Produtos extends BaseController
{
    public function listar()
    {
        echo View('templates/header');
        echo View('produtos/listar');
        echo View('templates/footer');
    }
}

