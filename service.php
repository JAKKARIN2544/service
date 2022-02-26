<?php
    //echo '<pre>';
    //print_r($_GET);
        if(isset($_GET['page'])){
            if($_GET['page'] == 'users'){
                require_once 'page/singIn_users.php';
            }else if($_GET['page'] == 'officer'){
                require_once 'page/singIn_officer.php';
            }else if($_GET['page'] == 'admin'){
                require_once 'page/singIn_admin.php';
            }else if($_GET['page'] == 'register'){
                require_once 'page/singUp_users.php';
            }else if($_GET['page'] == 'forgot_password'){
                require_once 'page/forgot_password.php';
            }else{
                require_once 'index.php';
            }
        }else if(isset($_GET['register'])){
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
        }else if(isset($_GET['Home'])){
            if($_GET['Home'] == ('index_admin')){
                require_once 'page/index_admin.php';
            }else{
                echo '<script> 
                    window.location.href = "index.php";
                </script>';
            }
        }else if(isset($_GET['logout'])){
            if($_GET['logout'] == MD5('logout')){
                require_once 'config/SQL/logout.php';
            }else{  
                require_once 'index.php';
            }
        }else if(isset($_GET['show'])){
            if($_GET['show'] == MD5('show_user')){
                require_once 'page/users.php';
            }else if($_GET['show'] == MD5('show_officer')){
                require_once 'page/officer.php';
            }else if($_GET['show'] == MD5('show_spare_part')){
                require_once 'page/spare_part.php';
            }else if($_GET['show'] == MD5('show_list_spare_part')){
                require_once 'page/list_spare_part.php';
            }else if($_GET['show'] == MD5('list_service')){
                require_once 'page/list_service.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['view'])){
            if($_GET['view'] == ('profile')){
                require_once 'page/view_profile.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['add'])){
            if($_GET['add'] == MD5('add_officer')){
                require_once 'page/form_add_officer.php';
            }else if($_GET['add'] == MD5('add_users')){
                require_once 'page/form_add_user.php';
            }else if($_GET['add'] == MD5('add_spare_part')){
                require_once 'page/form_add_spare_part.php';
            }else if($_GET['add'] == MD5('add_remaining')){
                require_once 'page/form_add_remaining_spare_part.php';
        //--------------------------------------------------------------
            }else if($_GET['add'] == MD5('user')){
                require_once 'config/SQL/add_users.php';
            }else if($_GET['add'] == MD5('officer')){
                require_once 'config/SQL/add_officer.php';
            }else if($_GET['add'] == MD5('spare_part')){
                require_once 'config/SQL/add_spare_part.php';
            }else if($_GET['add'] == MD5('remaining')){
                require_once 'config/SQL/add_remaining.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        
        
        }else{
            echo '<script> 
                    window.location.href = "index.php";
                </script>';
        }
?>
