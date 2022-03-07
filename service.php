<?php
    //echo '<pre>';
    //print_r($_GET);
        if(isset($_GET['page']) && !empty($_GET['page'])){
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
            }else if($_GET['page'] == 'reportAll'){
                require_once 'page/report_system.php';
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
                echo '<script> 
                    window.location.href = "index.php";
                </script>';
            }
        }else if(isset($_GET['login'])){
            if($_GET['login'] == MD5('login_user')){
                require_once 'config/SQL/login_users.php';
            }else if($_GET['login'] == MD5('login_admin')){
                require_once 'config/SQL/login_admin.php';
            }else if($_GET['login'] == MD5('login_officer')){
                require_once 'config/SQL/login_officer.php';
            }else{
                echo '<script> 
                    window.location.href = "index.php";
                </script>';
            }
        }else if(isset($_GET['Home'])){
            if($_GET['Home'] == ('index_admin')){
                require_once 'page/index_admin.php';
            }else if($_GET['Home'] == ('index_officer')){
                    require_once 'page/index_officer.php';
                }else if($_GET['Home'] == ('index_users')){
                    require_once 'page/index_users.php';
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
            }else if($_GET['add'] == MD5('job')){
                require_once 'config/SQL/add_job.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['update'])){
            if($_GET['update'] == MD5('update_profile_officer')){
                require_once 'config/SQL/update_profile_officer.php';
            }else if($_GET['update'] == MD5('update_profile_users')){
                    require_once 'config/SQL/update_profile_users.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['reset'])){
            if($_GET['reset'] == ('reset_admin')){
                require_once 'page/reset_pass_admin.php';
            }else if($_GET['reset'] == ('reset_users')){
                require_once 'page/reset_pass_users.php';
                //----------------------------------------------------
            }else if($_GET['reset'] == MD5('reset_pass_admin')){
                require_once 'config/SQL/reset_password_A.php';
            }else if($_GET['reset'] == MD5('reset_pass_users')){
                require_once 'config/SQL/reset_password_U.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['edit'])){
            if($_GET['edit'] == MD5('officer')){
                require_once 'page/form_edit_officer.php';
            }else if($_GET['edit'] == MD5('users')){
                require_once 'page/form_edit_users.php';
            }else if($_GET['edit'] == MD5('sp')){
                require_once 'page/form_edit_spare_part.php';
            //-----------------------------------------------
            }else if($_GET['edit'] == MD5('edit_officer')){
                require_once 'config/SQL/edit_officer.php';
            }else if($_GET['edit'] == MD5('edit_users')){
                require_once 'config/SQL/edit_users.php';
            }else if($_GET['edit'] == MD5('edit_spare_part')){
                require_once 'config/SQL/edit_spare_part.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['action'])){
            if($_GET['action'] == ('confrim-delete')){
                require_once 'config/SQL/confrim_delete_officer.php';
            }else if($_GET['action'] == ('confrim-delete-u')){
                    require_once 'config/SQL/confrim_delete_users.php';
            }else if($_GET['action'] == ('confrim-delete-sp')){
                    require_once 'config/SQL/confrim_delete_sp.php';
            }else if($_GET['action'] == ('confrim-delete-service')){
                    require_once 'config/SQL/confrim_del_service.php';
            }else if($_GET['action'] == ('confrim-delete-sp_list')){
                require_once 'config/SQL/confrim_delete_list_sp.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['delete'])){
            if($_GET['delete'] == MD5('officer')){
                require_once 'config/SQL/delete_officer.php';
            }else if($_GET['delete'] == MD5('users')){
                require_once 'config/SQL/delete_users.php';
            }else if($_GET['delete'] == MD5('spare_part')){
                require_once 'config/SQL/delete_spare_part.php';
            }else if($_GET['delete'] == MD5('del-service')){
                require_once 'config/SQL/del_service.php';
            }else if($_GET['delete'] == MD5('sp_list')){
                require_once 'config/SQL/del_sp_list.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['send'])){
            if($_GET['send'] == ('forgot_password')){
                require 'config/mail/sendmail.php';
            }else{
                echo '<script>
                        window.location.href = "index.php";
                    </script>';
            }
        }else if(isset($_GET['search'])){
            if($_GET['search'] == ('status')){
                require 'page/search_list_service.php';
            }else{
                echo '<script>
                    window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['OTP'])){
            if($_GET['OTP'] == MD5('OTP')){
                require 'page/form_check_OTP.php';
            }else if($_GET['OTP'] == MD5('check_OTP')){
                    require 'config/SQL/check_OTP.php';
            }else{
                echo '<script>
                        window.location.href = "index.php";
                    </script>';
            }
        }else if(isset($_GET['forgot'])){
            if($_GET['forgot'] == MD5('password')){
                require 'page/form_forgot_pass.php';
            }else if($_GET['forgot'] == MD5('new_password')){
                    require 'config/SQL/new_password.php';
            }else{
                echo '<script>
                        window.location.href = "index.php";
                    </script>';
            }
        }else if(isset($_GET['job'])){
            if($_GET['job'] == ('service')){
                require 'page/job_service_officer.php';
            }else if($_GET['job'] == ('service-being')){
                require 'page/view_job_being.php';
            }else if($_GET['job'] == ('service-success')){
                require 'page/view_job_success.php';
            }else if($_GET['job'] == ('service-cancel')){
                require 'page/view_job_cancel.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_officer";
                    </script>';
            }
        }else if(isset($_GET['notify'])){
            if($_GET['notify'] == MD5('service')){
                require 'config/SQL/add_service.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_users";
                    </script>';
            }
        }else if(isset($_GET['form'])){
            if($_GET['form'] == ('service')){
                require 'page/form_service.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_users";
                    </script>';
            }
        }else if(isset($_GET['status'])){
            if($_GET['status'] == ('service')){
                require 'page/follow_service.php';
            }else if($_GET['status'] == ('success')){
                    require 'page/success_service.php';
            }else if($_GET['status'] == ('cancel')){
                    require 'page/cancel_service.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_users";
                    </script>';
            }
        }else if(isset($_GET['view'])){
            if($_GET['view'] == ('profile')){
                require_once 'page/view_profile.php';
            }else if($_GET['view'] == ('profile_u')){
                require_once 'page/view_profile_u.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_admin";
                    </script>';
            }
        }else if(isset($_GET['follow'])){
            if($_GET['follow'] == ('job')){
                require 'page/follow_job.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_users";
                    </script>';
            }
        }else if(isset($_GET['report'])){
            if($_GET['report'] == ('report-users')){
                require 'page/report_users.php';
            }else if($_GET['report'] == ('success')){
                require_once 'page/view_success_service.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_users";
                    </script>';
            }
        }else if(isset($_GET['detail'])){
            if($_GET['detail'] == ('view-service')){
                require 'page/view_follow_service.php';
            }else if($_GET['detail'] == ('view-cancel-service')){
                    require 'page/view_cancel_service.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_users";
                    </script>';
            }
        }else if(isset($_GET['export'])){
            if($_GET['export'] == ('report-all1')){
                require 'config/export/report_service_all1.php';
            }else if($_GET['export'] == ('report-all2')){
                require 'config/export/report_service_all2.php';
            }else if($_GET['export'] == ('report-today1')){
                require 'config/export/report_service_today1.php';
            }else if($_GET['export'] == ('report-today2')){
                require 'config/export/report_service_today2.php';
            }else if($_GET['export'] == ('report-today3')){
                require 'config/export/report_service_today3.php';
            }else if($_GET['export'] == ('report-today4')){
                require 'config/export/report_service_today4.php';
            }else if($_GET['export'] == ('report-being')){
                require 'config/export/report_service_being.php';
            }else if($_GET['export'] == ('report-success')){
                require 'config/export/report_service_success.php';
            }else if($_GET['export'] == ('report-cancel')){
                require 'config/export/report_service_cancel.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_users";
                    </script>';
            }
        }else if(isset($_GET['withdraw'])){
            if($_GET['withdraw'] == ('spare_part')){
                require 'page/withdraw_spare_part.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_officer";
                    </script>';
            }
        }else if(isset($_GET['list'])){
            if($_GET['list'] == ('withdraw_sp')){
                require 'config/SQL/withdraw_sp.php';
            }else if($_GET['list'] == ('withdraw_spare_part')){
                require 'page/list_withdraw_spare_part.php';
            }else{
                echo '<script>
                        window.location.href = "service.php?Home=index_officer";
                    </script>';
            }

        }else{
            echo '<script> 
                    window.location.href = "index.php";
                </script>';
        }
?>
