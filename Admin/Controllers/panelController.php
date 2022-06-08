<?php
require_once "Admin/Models/panelModel.php";
class panelController
{
    private function checkUser($login, $password)
    {
        $panelModel = new panelModel();
        $resultUser = $panelModel->getUsers();
        foreach ($resultUser as $key => $value) {

            if (($value['login'] == $login) && ($value['password'] == md5($password))) {
                return $value['token'];
            } else {
                return null;
            }
        }
    }
    private function checkToken($token)
    {
        $panelModel = new panelModel();
        $resultUser = $panelModel->getUsers();
        foreach ($resultUser as $key => $value) {

            if ($value['token'] == $token) {
                return true;
            } else {
                return false;
            }
        }
    }
    function indexAction()
    {
        if (isset($_POST["login"]) && isset($_POST["password"]) && $_POST["login"] != null && $_POST["password"] != null) {
            $result = $this->checkUser($_POST["login"], $_POST["password"]);
            if ($result != null) {
                setcookie("token", $result);
                header('Location: /panel');
                $_POST = null;
            } else {
                header('Location: /admin');
            }
            exit();
        }

        if (isset($_COOKIE['token'])) {
            //reque
            $result_check_token = $this->checkToken($_COOKIE['token']);
            if ($result_check_token) {
                //get info about
                $panelModel = new panelModel();
                $items_arr = $panelModel->getAllItems();
                //get amount
                $amout_items = count($items_arr);
                //last item
                $last_item = $items_arr[$amout_items-1];
                require_once 'Admin/Views/panelViews.php';
            } else {
                header('Location: /admin');
                exit();
            }
        } else {
            header('Location: /admin');
            exit();
        }
    }
    function itemsAction()
    {
        if (isset($_COOKIE['token'])) {
            $result_check_token = $this->checkToken($_COOKIE['token']);
            if ($result_check_token) {
                $panelModel = new panelModel();
                $items_arr = $panelModel->getAllItems();
                //print_r($items_arr);
                require_once 'Admin/Views/itemsViews.php';
            }
            
        } else {
            header('Location: /admin');
            exit();
        }
    }
    function editAction($id)
    {
        if (isset($_COOKIE['token']) && $id != null) {
            //reque
            $result_check_token = $this->checkToken($_COOKIE['token']);
            if ($result_check_token) {
                
            }
            echo "edit" . $id;
        } else {
            header('Location: /panel');
            exit();
        }
    }
    function deleteAction()
    {
        if (isset($_COOKIE['token'])) {
            //reque
            $result_check_token = $this->checkToken($_COOKIE['token']);
            if ($result_check_token) {
                
            }
            require_once 'Admin/Views/itemsViews.php';
        } else {
            header('Location: /admin');
            exit();
        }
    }
    function createAction()
    {
        if (isset($_COOKIE['token'])) {
            //reque
            $result_check_token = $this->checkToken($_COOKIE['token']);
            if ($result_check_token) {
                
            }
            require_once 'Admin/Views/createViews.php';
        } else {
            header('Location: /admin');
            exit();
        }
    }
}
