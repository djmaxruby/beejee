<?php
/**
 * Created by PhpStorm.
 * User: mm_beketov
 * Date: 25.09.17
 * Time: 18:47
 */

class Route
{
    public function run() {
        $params = explode('/',$_SERVER['REQUEST_URI']);
        $controller_name = $params[1] != null ? ucfirst($params[1]) : "Site";
        $action_name = isset($params[2]) && $params[2] != null ? $params[2] : "index";
        $request = isset($params[3]) ? $params[3] : null;

        $controller_name .= "Controller";
        $action_name .= "Action";

        require_once "../controllers/$controller_name.php";

        $controller = new $controller_name;
        $controller->$action_name($request);
    }
}
