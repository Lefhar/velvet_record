<?php

namespace Controller;

use Models\add_formModel;
use Models\headerModel;
use Models\usersModel;

class add_form
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

        $disk = new add_formModel();
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/add_form.php');
        include(baseDir . 'views/footer.php');
    }
}