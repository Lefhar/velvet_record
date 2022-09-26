<?php

namespace Controller;

use Models\LogoutModel;
use Models\UsersModel;

class Logout
{
    public function index()
    {

        $class = new UsersModel();
        $user = $class->getUser();

        $obj = new LogoutModel();
        $data = $obj->out();
        if (isset($data['success'])) {
            header('Location: index.php');
        }
        include(baseDir . 'views/header.php');
        include(baseDir . 'views/confirm_logout.php');
        include(baseDir . 'views/footer.php');
    }
}