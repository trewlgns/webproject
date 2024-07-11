<?php

namespace App\Controllers;

use \Config\Database;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function test(): string
    {
        $db = Database::connect();
        $query = $db->query('SHOW TABLES;');
        $res = $query->getResult();


        return view('welcome_message', array('test' => json_encode($res)));
    }
}
