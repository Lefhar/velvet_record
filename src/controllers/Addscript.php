<?php

namespace Controller;

use Models\addscriptModel;
use Models\headerModel;
use Models\usersModel;

class Addscript
{

    /**
     * @brief Controller qui permet l'insertion en base de donné d'un disque
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        $ajout = new AddscriptModel();
        if(!$class->isAdmin())
        {
            header('location: ../');
        }
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