<?php
/**
 * Created by PhpStorm.
 * User: mm_beketov
 * Date: 25.09.17
 * Time: 18:30
 */

class Controller
{
    public $view;

    public function __construct() {
        $this->view = new View();
    }
}
