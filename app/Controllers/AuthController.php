<?php
namespace App\Controllers;

use App\Model\User;

class AuthController extends BaseController{


    //     public function param($key) {
    //     return isset($_POST[$key]) ? $_POST[$key] : '';
    // }

    public function login (){
        $this->loadView('login');
    }

    public function processLogin(){

        $email = $this->request->param('email');
        $password = $this->request->param('password');

        if(!$email){
           $this->redirect('/auth/login?msg=please provide a valid email');
           return;
       }

       if(!validatePassword($password)){
            $this->redirect('/auth/login?msg=password should have atleast <br /> an uppercase, lowercase, number and upto 8 characters');
           return;
       }

        $user = User::findByEmail($email);

        if(!$user){
            return $this->redirect('/auth/login?msg=unable to login');
        }

        if(!\password_verify($password, $user->password)){
            return $this->redirect('/auth/login?msg= wrong login credientials');
        }

        User::updateLastLogin($user->id);
        $this->redirect('/');
    }



    public function register(){
        $this->loadView('register');
    }

    public function processReg(){

       $email = filter_var($this->request->param('email'), FILTER_VALIDATE_EMAIL);
       $password = $this->request->param('password');

       if(!$email){
           $this->redirect('/auth/register?msg=please provide a valid email');
           return;
       }

       if(!validatePassword($password)){
            $this->redirect('/auth/register?msg=password should have atleast <br /> an uppercase, lowercase, number and upto 8 characters');
           return;
       }

        $user = User::findByEmail($email);

        if($user){
            return $this->redirect('/auth/register?msg=user already registered');
        }

       $result = User::create([
                    'email' => $email,
                    'password' => \password_hash($password, PASSWORD_DEFAULT)

       ]);

       if(!$result){
            $this->redirect('/auth/register?msg=registration failed');
            return;
        }

        
        $this->redirect('/auth/login?msg=registration successfull');
        


    }
}