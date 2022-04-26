<?php
namespace app\controller;
include 'app/model/GuitarDao.php';

use app\model\GuitarDao;

class GuitarController{

    public function load($view, $data = []){
        extract($data);
        ob_start();
        include ("app/view/{$view}.php");
        return $data;
    }

    public function listAllGuitars(){
        $guitarDaoObj = new GuitarDao();
        $guitars = $guitarDaoObj->getAllGuitars();
        return $this->load('index',['guitars' => $guitars]);
    }

    public function createGuitars(){

    }
}

