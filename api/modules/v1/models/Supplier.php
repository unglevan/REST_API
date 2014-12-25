<?php
namespace api\modules\v1\models;
use common\models\Supplier as CommonSupplier;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Supplier extends CommonSupplier
{
    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

//    public function toDict(){
//        return array_filter($this->attributes);
//    }
}
