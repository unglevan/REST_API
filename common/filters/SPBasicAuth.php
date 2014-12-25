<?php
namespace common\filters;
use yii\filters\auth\HttpBasicAuth;

/**
* QueryParamAuth is an action filter that supports the authentication based on the access token passed through a query parameter.
*
* @author Qiang Xue <qiang.xue@gmail.com>
* @since 2.0
*/
class SPBasicAuth extends HttpBasicAuth
{
    public $auth = 'common\models\User::findIdentityBasic';
}