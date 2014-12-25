<?php
/**
 * Created by PhpStorm.
 * User: thang
 * Date: 2014/12/19
 * Time: 18:58
 */

namespace common\controllers;
use yii\filters\auth\CompositeAuth;
use yii\rest\ActiveController;
use Yii;
class SPActiveController extends ActiveController
{
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['authenticator'] = [
            'class' => CompositeAuth::className(),
            'authMethods' => [
//                SPBasicAuth::className(),
//                QueryParamAuth::className(),
            ]
        ];
        $behaviors['corsFilter']= [
            'class' => \yii\filters\Cors::className(),
            'cors' => [
                //#TODO change to 127.0.0.1 at production
                // restrict access to
                'Origin' => ['*']
            ]
        ];
        return $behaviors;
    }
}