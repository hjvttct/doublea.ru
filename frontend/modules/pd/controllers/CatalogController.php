<?php

namespace frontend\modules\pd\controllers;

use yii\web\Controller;

class CatalogController extends Controller
{
    public function actionCatalog()
    {
        $this ->layout='pd';
       return $this->render('catalog');

    }
}