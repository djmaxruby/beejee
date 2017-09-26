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
        $request = $pdo->connection->query("SELECT * FROM ".self::$table_name." WHERE id=$id LIMIT 1");
        $row = $request->fetch(PDO::FETCH_ASSOC);
        foreach ($row as $key => $value) {
            $model->$key = $value;
        }
        return $model;
    }

    public static function all() {
        $models = [];
        $pdo = DB::getConnection();
        $request = $pdo->connection->query("SELECT * FROM ".self::$table_name);
        $n_model = 0;
        foreach ($request->fetch(PDO::FETCH_ASSOC) as $rows) {
            var_dump($rows);
//            $models[$n_model] = new self();
//            foreach ($row as $key => $value) {
//                $models[$n_model]->$key = $value;
//            }
//            $n_model++;
        }
        return $models;
    }
}
