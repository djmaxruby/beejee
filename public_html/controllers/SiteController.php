<?php
/**
 * Created by PhpStorm.
 * User: mm_beketov
 * Date: 25.09.17
 * Time: 19:26
 */

class SiteController extends Controller
{
    public function indexAction() {
        $this->view->render('site/index',['content' => 'abracadabra']);
    }
}
