<?php

namespace frontend\modules\admin\controllers;

use yii\web\Controller;

class AdminController extends Controller
{
    public function actionAdminpage()
    {
        $this ->layout='admin';
       return $this->render('adminpage');

    }
}