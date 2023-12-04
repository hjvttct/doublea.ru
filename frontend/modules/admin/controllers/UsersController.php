<?php

namespace frontend\modules\admin\controllers;

use app\models\User;
use yii\web\Controller;

class UsersController extends Controller
{
    public function actionUsers()
    {
        $userlist = User::find()->orderBy('status')->all();
        $this ->layout='admin';
        return $this->render('users', [
            'users' => $userlist,
        ]);
    }
}