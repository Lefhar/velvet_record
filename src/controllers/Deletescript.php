<?php

namespace Controller;

use Models\DeleteModel;
use Models\HeaderModel;
use Models\UsersModel;

class Deletescript
{

    /**
     * Controller de suppression d'un disque avec son image
     * @return void
     */
    public function index()
    {

        $class = new UsersModel();
        if(!$class->isAdmin())
        {
            header('location: ../');
        }
        $user = $class->getUser();
        $head = new HeaderModel();
        $header["menu"] = $head->catHead();
        $disk = new DeleteModel();
        $data = $disk->del();
        if ($data['success']) {
            header('Location: index.php');
        } else {
            header('Location: index.php?page=delete_form&id=' . $_POST['disc_id']);
        }
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/confirm_delete.php');
        include(baseDir . 'views/footer.php');
    }
}