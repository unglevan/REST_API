<?php
namespace api\modules\v1\models;
use \yii\db\ActiveRecord;
use common\models\SpVideo;
/**
 * Country Model
 *
 * @author Budi Irawan <deerawan@gmail.com>
 */
class Video extends SpVideo
{
    /**
     * @inheritdoc
     */
    public static function primaryKey()
    {
        return ['id'];
    }

    public function getApp()
    {
        return $this->hasOne(App::className(), ['id' => 'sp_app_id']);
    }

    public function toDict(){
        //return array_filter($this->attributes);
        $array= array_filter($this->attributes);
        $array['app']= $this->app->toDict();
        //var_dump($array);
        return $array;
    }
}
