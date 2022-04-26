<?php
include 'app/view/headerAndFooters.php';
include 'app/_utils/Req.php';
include 'app/controller/GuitarController.php';

use app\view\HeaderAndFooters;
use app\controller\GuitarController;
use app\_utils\Req;

    $actionName = Req::GetAction();

    switch ($actionName){
        case 'create':

            break;
        default:
            $headerAndFooterObj = new HeaderAndFooters(true,true,'Gitárok listázása');
            $headerAndFooterObj->addHeader();

            $GuitarControllerObj = new GuitarController();
            $GuitarControllerObj->listAllGuitars();

            $headerAndFooterObj->addFooter('Table_ID');
    }
?>


