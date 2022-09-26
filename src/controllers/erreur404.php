<?php

namespace Controller;

use Models\headerModel;
use Models\usersModel;

class erreur404
{
    /**
     * @brief controleur d'une erreur 404
     * @return void
     */
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();
        $head = new headerModel();
        $header["menu"] = $head->catHead();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/erreur404.php');
        include(baseDir . 'views/footer.php');
    }
}