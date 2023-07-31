<?php

namespace app\controllers;

class CartController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'cart';

        return $this->render('index');
    }
}