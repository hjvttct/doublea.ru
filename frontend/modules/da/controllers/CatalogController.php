<?php

namespace frontend\modules\da\controllers;

use yii\web\Controller;

class CatalogController extends Controller
{
    public function actionCatalog()
    {
        return $this->render('catalog');
    }
}