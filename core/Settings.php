<?php


class Settings {

    public function __construct() {
        $this->collectModules();
        $this->collectConfigs();
    }

    public function collectModules() {
        foreach (glob(__DIR__ . '/modules/*.php') as $file) {
            if (is_file($file)) {
                include_once $file;
            }
        }
    }

    public function collectConfigs() {
        foreach (glob(__DIR__ . '/configs/*.php') as $file) {
            if (is_file($file)) {
                include_once $file;
            }
        }
    }

}