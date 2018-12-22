<?php
//单例模式
//三私一公
//DB类
class DB {
    private static $db;

    private function __construct() {}

    public static function DBInstance() {
        if (!self::$db) {
            self::$db = new self();
        } 

        return self::$db;
    }

    private function __clone() {}
}
//$db = new DB();

$db = DB::DBInstance();
var_dump($db);
