<?php

namespace app\controllers;

use app\core\Application;
use app\core\Controller;
use app\core\Request;

class SiteController extends Controller
{
    public function home(): bool|array|string
    {
        $params = [
            'name' => "Povilas"
        ];
        return $this->render('home', $params);
    }

    public function contact(): bool|array|string
    {
        return $this->render('contact');
    }

    public static function handleContact(Request $request): string
    {
        $body = $request->getBody();
        dump($body);
        die;
        return "handling data";
    }
}
