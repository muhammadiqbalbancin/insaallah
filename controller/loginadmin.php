<?php
/**
 * Created by PhpStorm.
 * User: Galih
 * Date: 9/24/2017
 * Time: 10:24 PM
 */
require_once('../model/model.php');
session_start();
error_reporting(E_ERROR);
if (isset($_SESSION['pk'['idrole']])){
    header('location:../view/dashboard.php');
}

$user = new input();
    if (isset($_POST['login'])){
        if (!empty($_POST['username']) && !empty($_POST['password'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            $idUser = $user->loginadmin($username,$password);

            if ($idUser != -20){
                $_SESSION ['pk']['idrole']=$username;
                header("location:../view/dashboard.php");
            }
            else
            {
                header("location:../admin/index.php");
            }
        }
    }