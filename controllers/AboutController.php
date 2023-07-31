<?php

namespace app\controllers;

class AboutController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'about';

        return $this->render('index');
    }
}