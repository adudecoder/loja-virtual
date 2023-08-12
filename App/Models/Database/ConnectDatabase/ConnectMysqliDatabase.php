<?php

namespace App\Models\Database\ConnectDatabase;

use App\Interfaces\InterfaceConnectDatabase;

class ConnectMysqliDatabase implements InterfaceConnectDatabase
{

    private $mysqli;

    public function __construct()
    {
        $this->mysqli = new \Mysqli("localhost", "root", "", "loja");
    }

    public function connectDatabase()
    {
        return $this->mysqli;
    }
}
