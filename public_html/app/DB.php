<?php
/**
 * Created by PhpStorm.
 * User: mbeketov18
 * Date: 25.09.17
 * Time: 22:41
 */

class DB
{
    private static $instance;
    public $connection;

    private function __construct() {
        $db_confing = require_once("../config/db.php");
        try {
            $this->connection = new PDO($db_confing['pdo'], $db_confing['db_user'], $db_confing['db_pass']);
            $this->connection->query("SET NAMES utf8 COLLATE utf8_unicode_ci");
        }
        catch (PDOException $e) {
            die("Ошибка БД: " . $e->getMessage());
        }
    }

    public static function getConnection() {
        if (!isset(self::$instance))
            self::$instance = new self();
        return self::$instance;
    }
}

