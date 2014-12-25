<?php
namespace api\modules\v1\models;
use common\models\User as CommonUser;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class User extends CommonUser
{
    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }


    public function toDict(){
        return array_filter($this->attributes);
    }
}
