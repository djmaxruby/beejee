<?php
/**
 * Created by PhpStorm.
 * User: mbeketov18
 * Date: 25.09.17
 * Time: 23:34
 */

class Schedule extends Model
{
    public static $table_name = "schedules";

    public static function one($id) {
        if ($id == null)
            return null;
        $model = new self();
        $pdo = DB::getConnection();
        $request = $pdo->connection->prepare("SELECT * FROM ".self::$table_name." WHERE id=$id LIMIT 1");
        $pdo->connection->execute();
        $row = $request->fetch(PDO::FETCH_ASSOC);
        foreach ($row as $key => $value) {
            $model->$key = $value;
        }
        return $model;
    }

    public static function all() {
        $models = [];
        $pdo = DB::getConnection();
        $request = $pdo->connection->prepare("SELECT * FROM ".self::$table_name);
        $request->execute();
        $result = $request->fetchAll(PDO::FETCH_CLASS,__CLASS__);
        $n_model = 0;
        foreach ($result as $model) {
            $models[$n_model++] = $model;
        }
        return $models;
    }
}
