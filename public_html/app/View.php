<?php
/**
 * Created by PhpStorm.
 * User: mm_beketov
 * Date: 25.09.17
 * Time: 18:30
 */

class View
{
    public function render($template, $params = null) {
        if (isset($params)) {
            foreach ($params as $param_key => $param_val) {
                $$param_key = $param_val;
            }
        }
        require_once(__DIR__.'/../views/'.$template.'.php');
    }
}
