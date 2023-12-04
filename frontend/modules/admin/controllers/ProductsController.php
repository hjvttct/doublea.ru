<?php

namespace frontend\modules\admin\controllers;

use yii\base\Controller;

class ProductsController extends Controller
{
    public function actionProducts()
    {

        return $this->render('products');

    }
}