<?php

namespace Controller;

use Models\addformModel;
use Models\headerModel;
use Models\usersModel;

class addform
{
    /**
     * @brief Controleur qui charge le formulaire d'ajout d'un disque
     * @return void
     */
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();

        $head = new headerModel();
        $header["menu"] = $head->catHead();

        $disk = new addformModel();
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/add_form.php');
        include(baseDir . 'views/footer.php');
    }
}