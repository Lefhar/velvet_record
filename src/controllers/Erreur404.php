<?php

namespace Controller;

use Models\HeaderModel;
use Models\UsersModel;

class erreur404
{
    /**
     * @brief Controller d'une erreur 404
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/erreur404.php');
        include(baseDir . 'views/footer.php');
    }
}