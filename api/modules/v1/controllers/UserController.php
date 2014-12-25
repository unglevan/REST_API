<?php

namespace api\modules\v1\controllers;

use common\controllers\SPActiveController;


class UserController extends SPActiveController
{
    public $modelClass = 'api\modules\v1\models\User';

//    public function actionLogin()
//    {
//        $user = \Yii::$app->user->identity;
//        $user['access_token'] = \Yii::$app->security->generateRandomString();
//        $user->save();
//        return $user;
//    }
//
//    public function actionLogout()
//    {
//        $user = \Yii::$app->user->identity;
//        $user['access_token'] = '';
//        if (Yii::$app->user->logout()) {
//            $data = [
//                "status" => 1,
//                "message" => "Successful logout",
//            ];
//        } else {
//            $data = [
//                "status" => 0,
//                "message" => "Logout not Successful",
//            ];
//        }
//        return $data;
//    }

}
