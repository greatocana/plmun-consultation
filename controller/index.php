<?php
session_start();
require('../libraries/fordee/init.php');

header('Access-Control-Allow-Origin: *'); 
header('Access-Control-Allow-Methods: POST,GET,PUT,DELETE');

$db = $create::connection('localhost','consultation','root','');
$key = 'PLMUN_K3Y!';

include_once('./authController.php');
include_once('../model/AuthModel.php');

$AuthController = new AuthController();
$AuthModel = new AuthModel($db);

switch ($_SERVER['REQUEST_METHOD']) {
    case 'POST':
		$action = $request::post('action',false);

        switch ($action) {
            case 'login':
                $AuthController->login($AuthModel,$key);
            break;

            case 'register';
                $AuthController->register($AuthModel,$key);
            break;
        }

    break;

    case 'GET':
        $action = $request::get('action',false);
        switch ($action) {
            case 'sample':
                echo 'sample';
            break;
        }
    break;

    case 'PUT':

    break;

    case 'DELETE':

    break;
    
    default:
        # code...
    break;
}

?>