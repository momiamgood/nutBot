<?php

use Illuminate\Database\Capsule\Manager as Capsule;


class Settings
{
    public function __construct()
    {
        $this->collectModules();
        $this->dbConnect();
    }

    public function collectModules()
    {
        foreach (glob(__DIR__ . '/modules/*.php') as $file) {
            if (is_file($file)) {
                include_once $file;
            }
        }
    }

    public function dbConnect()
    {
        $capsule = new Capsule();
        $configs = require_once "configs/db.php";

        $capsule->addConnection($configs);
        $capsule->bootEloquent();
    }
}