<?php

namespace console\controllers;

use Yii;

class AuthController extends \yii\console\Controller
{
    public function actionCreateAdminPerm() {
        $auth = Yii::$app->authManager;

        $admin = $auth->createRole('admin');
        $auth->add($admin);

        $auth->assign($admin, 1);
    }
}