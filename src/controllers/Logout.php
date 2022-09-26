<?php

namespace Controller;

use Models\logoutModel;
use Models\usersModel;

class logout
{
    public function index()
    {

        $class = new usersModel();
        $user = $class->getUser();

        $obj = new logoutModel();
        $data = $obj->out();
        if (isset($data['success'])) {
            header('Location: index.php');
        }
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/confirm_logout.php');
        include(baseDir . 'views/footer.php');
    }
}