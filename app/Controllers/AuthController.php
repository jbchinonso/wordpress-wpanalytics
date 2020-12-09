<?php
namespace App\Controllers;

use App\Model\User;

class AuthController extends BaseController
{

    //     public function param($key) {
    //     return isset($_POST[$key]) ? $_POST[$key] : '';
    // }

    public function login()
    {
        $this->loadView('login');
    }

    public function processLogin()
    {

        $email = $this->request->param('email');
        $password = $this->request->param('password');

        try {
            if (!$email) {
                throw new \Exception('please provide a valid email');

            }

            $user = User::findByEmail($email);

            if (!$user) {
                throw new \Exception('unable to login');
            }

            if (!\password_verify($password, $user->password)) {
                throw new \Exception('unable to login');
            }

            /**
             * Update last login and set session
             */
            User::updateLastLogin($user->id);
            $this->session->set(USER_SESSION_KEY_NAME, $user->id);
            $this->session->setFlash('success', sprintf('Welcome %s', $user->name));
            $this->redirect('/');

        } catch (\Exception $e) {
            $this->session->setFlash('error', $e->getMessage());
            $this->redirect('/auth/login');

        }

    }

    public function register()
    {
        $this->loadView('register');
    }

    public function processReg()
    {

        $email = filter_var($this->request->param('email'), FILTER_VALIDATE_EMAIL);
        $password = $this->request->param('password');
        $name = $this->request->param('name');

        try {

            if (!$email) {
                throw new \Exception('please provide a valid email');
            }

            if (!validatePassword($password)) {
                throw new \Exception('password should have atleast <br />
                                    one uppercase character, <br />
                                    one lowercase character, <br />
                                    one number and upto 8 characters');

            }

            if (!trim($name)) {
                throw new \Exception('Please Provide a name');
            }

            $user = User::findByEmail($email);

            if ($user) {
                throw new \Exception($email . " is already registered in the system");

            }

            $result = User::create([
                'email' => $email,
                'password' => \password_hash($password, PASSWORD_DEFAULT),
                'name' => $name,

            ]);

            if (!$result) {

                $this->session->setFlash('error', 'unable able to create user Account');
                $this->redirect('/auth/register?msg=error');
                return;

            }

            $this->redirect('/auth/login?msg=registration successful');

        } catch (\Exception $e) {

            $this->session->setFlash('error', $e->getMessage());
            $this->redirect('/auth/register');
        }

    }

    public function logout(){
        $this->session->delete();
        $this->redirect('/auth/login?msg=logged-out');
    }
}
