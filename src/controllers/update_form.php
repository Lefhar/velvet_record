<?php

namespace Controller;

use Models\headerModel;
use Models\update_formModel;
use Models\usersModel;

class update_form
{

    /**
     * @brief controleur de la page de modification d'un disque
     * @return void
     */
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();
        $head = new headerModel();
        $header["menu"] = $head->catHead();
        $disk = new update_formModel();
        if (!empty($_GET['id'])) {
            $disk->setId($_GET['id']);
        }
        $data = $disk->index();
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/update_form.php');
        include(baseDir . 'views/footer.php');
    }

}