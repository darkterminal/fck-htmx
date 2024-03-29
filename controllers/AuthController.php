<?php

namespace App\controllers;

use App\config\helpers\Utils;
use Fckin\core\Controller;
use Fckin\core\middlewares\AuthMiddleware;
use Fckin\core\Request;
use Fckin\core\Response;
use App\models\Login;
use App\models\User;

class AuthController extends Controller
{
    protected $user;

    public function __construct()
    {
        $this->registerMiddleware(new AuthMiddleware(['profile']));
        $this->user = new User();
    }

    public function login(Request $request, Response $response)
    {
        $login = new Login();
        if ($request->isPost()) {
            $login->loadData($request->getBody());
            if ($login->validate() && $login->login()) {
                \header('HX-Location: /');
            }
            addToast('error', 'Username or password is invalid');
            return Utils::renderComponent('components/login-form', ['model' => $login]);
        }
        return $this->render('login', ['model' => $login]);
    }

    public function register(Request $request, Response $response)
    {
        if ($request->isPost()) {
            $this->user->loadData($request->getBody());
            if ($this->user->validate() && $this->user->register()) {
                addToast('success', 'Thanks for registering');
                $response->redirect('/');
                return;
            }
            addToast('error', 'Some input is not valid!');
            return $this->render('register', [
                'model' => $this->user
            ]);
        }

        return $this->render('register', [
            'model' => $this->user
        ]);
    }

    public function logout(Request $request, Response $response)
    {
        unAuthorized();
        $response->redirect('/');
    }

    public function profile()
    {
        return $this->render('profile', ['user' => $this->user->detail()]);
    }
}
