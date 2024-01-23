<?php

namespace App\controllers;

use App\config\helpers\Utils;
use App\models\Contact;
use Fckin\core\Controller;
use App\models\User;
use Fckin\core\Request;

class SiteController extends Controller
{
    protected $user;
    protected $counter = 0;

    public function __construct()
    {
        if (isAuthenticate()) {
            $this->user = new User();
        }
    }

    public function home()
    {
        $params = [
            'user' => $this->user?->detail()
        ];
        return $this->render('home', $params);
    }

    public function component()
    {
        $this->setLayout('demo');
        $contact = new Contact();
        return $this->render('component', [
            'model' => $contact,
            'user' => $this->user?->detail()
        ]);
    }

    public function counter(Request $request)
    {
        $this->setLayout('demo');
        if ($request->isPost()) {
            $counterType = \getParam('counterType');
            $data = $request->getBody();
            $count = $counterType === 'increment' ? (int) $data['count'] + 1 : (int) $data['count'] - 1;
            return Utils::renderComponent('counter', ['counter' => $count]);
        }
        return $this->render('counter', ['counter' => 0]);
    }
}
