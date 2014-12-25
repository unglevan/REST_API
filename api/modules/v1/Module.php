<?php
namespace api\modules\v1;

/**
 * iKargo API V1 Module
 * 
 * @author Budi Irawan <budi@ebizu.com>
 * @since 1.0
 */
class Module extends \yii\base\Module
{
    public $controllerNamespace = 'api\modules\v1\controllers';

    public function init()
    {
        parent::init();
        //#TODO change to Api.php file
        \Yii::$app->user->enableSession = false;
        \Yii::$app->user->loginUrl = null;
    }
}
