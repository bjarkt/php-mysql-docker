<?php
class Db {
    private static $instance = NULL;

    private function __construct() {}
    private function __clone() {}

    public static function getInstance() {
        if (self::$instance === NULL) {
            $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
            if (getenv("ISINDOCKER") == "1") {
                self::$instance = new PDO('mysql:host=db;dbname=test;charset=utf8;port=3306',
                                            'root',
                                            'root', $pdo_options);
            } else {
                self::$instance = new PDO('mysql:host=liveHost;dbname=dbName;charset=utf8;port=3306',
                                            'user',
                                            'password', $pdo_options);

            }
        }
        return self::$instance;
    }
}
?>

