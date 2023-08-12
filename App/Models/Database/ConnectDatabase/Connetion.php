<?php

namespace App\Models\Database\ConnectDatabase;

use App\Interfaces\InterfaceConnectDatabase;

class Connection
{
    private $interfaceConnectDatabase;

    public function __construct(InterfaceConnectDatabase $interfaceConnectDatabase)
    {
        $this->interfaceConnectDatabase;
    }

    public function connectDatabase()
    {
        //
    }
}