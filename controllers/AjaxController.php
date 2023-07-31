<?php

namespace app\controllers;

use app\models\db\Products;

class AjaxController extends AppController
{
    public function actionGetProduct()
    {
        $this->layout = false;
        $id = htmlspecialchars($_GET['id']); //обработка строк, преобразование сущности в строку
        $product = Products::find()->where(['id'=>1])->asArray()->one(); //класс продукты найти>где>перевести в единственное число
        $product = json_encode($product);

        return $product;
    }
}