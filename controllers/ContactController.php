<?php

namespace app\controllers;

class ContactController extends AppController
{
    public function actionIndex()
    {
        $this->layout = 'contact';

        return $this->render('index');
    }
}