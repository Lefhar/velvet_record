<?php

namespace Controller;

use Models\headerModel;
use Models\usersModel;

class deleteform
{
    /**
     * @brief Controleur de la confirmation de suppréssion d'un disque
     * @return void
     */
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();
        $head = new headerModel();
        $header["menu"] = $head->catHead();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/confirm_delete.php');
        include(baseDir . 'views/footer.php');
    }

}