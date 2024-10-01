<?php

require_once 'models/UserModel.php';

$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL;


if (!empty($_GET['id'])) {
    $encodeId = $_GET['id'];
    $id =  $userModel->decodeId($encodeId);

    if (!empty($id) && is_numeric($id)) {
        $userModel->deleteUserById($id);//Delete existing user
    }
}
header('location: list_users.php');

?>