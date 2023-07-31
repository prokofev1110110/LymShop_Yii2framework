<?php

namespace app\controllers;

class ShopController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'shop';

        return $this->render('index');
    }
}