<?php

$error = [];
if($_SERVER['REQUEST_METHOD'] == "POST"){ 
    $user = new User;
    $time = date('h:i:s');
        
            if($row = $user->where(['email'=>$_POST['email']],1,0)){
                $email = $_POST['email'];

                $user->query("update tblusers set login_stamp = '$time' where email = '$email' limit 1");
                    // show($row);
                    // var_dump(($row['password'] === $_POST['password']));
                    // die;
                    if(password_verify($_POST['password'],$row[0]['password'])){
                        aunthenticate($row[0]);

                        if(auth('role')=='admin'){
                            if(auth('verify_status') == 1){
                                redirect('home');
                            }else{
                                redirect('denied-session');
                            }
                        }else{
                            if(auth('verify_status') == 1){
                                $_SESSION['login'] = auth('name');
                                    redirect('pos');
                            }else{
                                redirect('denied-cashier');
                            }
                        } 
                    }else
                    if(empty($_POST['password']))
                    {
                        $error['password'] = "Password is required";
                    }else{
                        $error['password'] = "Wrong password";
                    }
            }else
            if(empty($_POST['email'])){
                $error['email'] = "Email is required";
            }else
            {
                $error['email'] = "Wrong email";
            }
    }

require view_path('auth/login');