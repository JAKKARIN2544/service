<?php
    //echo '<pre>';
    //print_r($_GET);
        if(isset($_GET['register'])){
            if($_GET['register'] == MD5('reg_user')){
                require_once 'config/SQL/reg_users.php';
            }else if($_GET['register'] == MD5('reg_admin')){
                require_once 'config/SQL/reg_admin.php';
            }else if($_GET['register'] == MD5('reg_office')){
                require_once 'config/SQL/reg_office.php';
            }else{
                require_once 'index.php';
            }
        }else if(isset($_GET['login'])){
            if($_GET['login'] == MD5('login_user')){
                require_once 'config/SQL/login_users.php';
            }else if($_GET['login'] == MD5('login_admin')){
                require_once 'config/SQL/login_admin.php';
            }else if($_GET['login'] == ('login_office')){
                require_once 'config/SQL/login_office.php';
            }else{
                require_once 'index.php';
            } 
        }else{
            echo '<script> 
                    window.location.href = "index.php";
                </script>';
        }
?>
