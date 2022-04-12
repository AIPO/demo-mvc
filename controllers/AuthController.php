<?php

namespace app\controllers;

use app\core\Controller;
use app\core\Request;
use app\models\RegisterModel;

class AuthController extends Controller
{
    public function login()
    {
        $this->setLayout('auth');
        return $this->render('login');
    }

    public function register(Request $request)
    {
        $errors = [];
        $registerModel = new RegisterModel();
        if ($request->isPost()) {
            $registerModel->loadData($request->getBody());

            if ($registerModel->validate() && $registerModel->register()) {

                return 'Success';
            }
            dump($registerModel->errors);
            exit;
            return $this->render('register',
                [
                    'model' => $registerModel
                ]
            );

        }
        return $this->render('register',
            [
                'errors' => $errors,
                'model' => $registerModel
            ]
        );
    }
}
