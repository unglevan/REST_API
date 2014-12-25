<?php

namespace api\modules\v1\controllers;

use api\modules\v1\models\Supplier;
use common\controllers\SPActiveController;


class SupplierController extends SPActiveController
{
    public $modelClass = 'api\modules\v1\models\Supplier';

    public function actionCatalog($catalog)
    {
        $modelClass = $this->modelClass;
        $models= $modelClass::findAll(["catalog" => $catalog]);
        return $models;
    }
}
