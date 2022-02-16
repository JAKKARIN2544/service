<?php
    //echo '<pre>';
    //print_r($_GET);
        if(!isset($_GET['register'])){
            require_once 'index.php';
        }else{
            $link = $_GET['register'];
                if($link == MD5('user')){
                    require_once 'config/SQL/reg_users.php';
                }else if($link == MD5('admin')){
                    require_once 'config/SQL/login_admin.php';
                }else if($link == MD5('office')){
                    require_once 'config/SQL/login_office.php';
                }else{
                    require_once 'index.php';
                }
        }
?>