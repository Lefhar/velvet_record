<?php

namespace Controller;

use Models\HeaderModel;
use Models\UsersModel;

class Deleteform
{
    /**
     * @brief Controller de la confirmation de suppression d'un disque
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();
        if(!$class->isAdmin())
        {
            header('location: ../');
        }
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/confirm_delete.php');
        include(baseDir . 'views/footer.php');
    }

}