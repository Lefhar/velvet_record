<?php

namespace Controller;

use Models\add_scriptModel;
use Models\headerModel;
use Models\usersModel;

class add_script
{

    /**
     * @brief controleur qui permet l'insertion en base de donné d'un disque
     * @return void
     */
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();
        $head = new headerModel();
        $header["menu"] = $head->catHead();
        $ajout = new add_scriptModel();

        $data = $ajout->post();
        if ($data['success']) {
            header('Location: index.php');
        } else {
            header('Location: index.php?page=add_form');
        }
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/add_form.php');
        include(baseDir . 'views/footer.php');
    }
}