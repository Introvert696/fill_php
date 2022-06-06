<?php
require_once 'Models/itemsModel.php';

class itemsController
{
    function getAction($id)
    {
        $items_models = new ItemsModel;
        $result_item = $items_models->getOneItem($id);
        if($result_item!=null){
            //print_r($result_item);
            require_once 'Views/getoneitemView.php';
        }else{
            echo "Not found";
        }
    }
    function indexAction()
    {
        $items_models = new ItemsModel;
        $items_arr = $items_models->getAllItems();
        require_once 'Views/itemsView.php';
        //print_r($items_arr);
    }
}
