<?php
/**
 * Created by PhpStorm.
 * User: mbeketov18
 * Date: 25.09.17
 * Time: 23:34
 */

class Schedule extends Model
{
    public $table_name = "schedules";

    public static function one($id) {
        $model = new self();
        $pdo = DB::getConnection();
        $request = $pdo->connection->query("SELECT * FROM ".$model->table_name." WHERE id=$id LIMIT 1");
        foreach ($request as $row) {
            var_dump($row);
        }
        return $model;
    }
}
